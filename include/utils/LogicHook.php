<?php

if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

/**
 * Predefined logic hooks
 *
 *  - after_save
 *  - before_save
 *  - before_retrieve
 *  - after_retrieve
 *  - process_record
 *  - before_delete
 *  - after_delete
 *  - before_restore
 *  - after_restore
 *  - server_roundtrip
 *  - before_logout
 *  - after_logout
 *  - before_login
 *  - after_login
 *  - login_failed
 *  - after_relationship_add
 *  - after_relationship_delete
 *  - handle_exception
 */
class LogicHook
{
    /**
     * @var array
     */
    protected static $customHooks = [];

    /**
     * @var LogicHook
     */
    protected static $instance = null;

    /**
     * @param string  $moduleDir
     * @param string  $event
     * @param string  $title
     * @param Closure $callback
     * @param int     $priority
     */
    static function add($moduleDir, $event, $title, Closure $callback, $priority = 1)
    {
        static::$customHooks[$moduleDir][$event][] = [$priority, $title, $callback];
    }

    static public function refreshHooks()
    {
        static::$hooks = [];
    }

    /**
     * Static Function which returns and instance of LogicHook
     *
     * @param SugarBean|null $bean
     *
     * @return LogicHook
     */
    public static function instance(SugarBean $bean = null)
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }

        static::$instance->setBean($bean);

        return static::$instance;
    }

    /**
     * @var SugarBean
     */
    var $bean = null;

    /**
     * @var array
     */
    protected $hooks = [];

    /**
     * @var array
     */
    protected $globalHooks = [];

    /**
     * LogicHook constructor.
     */
    protected function __construct()
    {
        $this->globalHooks = $this->loadGlobalHooks();
    }

    /**
     * @return array
     */
    private function loadGlobalHooks()
    {
        $hook_array = [];

        if (file_exists($path = DOCROOT."custom/modules/logic_hooks.php")) {
            include $path;
        }

        if (file_exists($path = DOCROOT."custom/application/Ext/LogicHooks/logic_hooks.ext.php")) {
            include $path;
        }

        return $hook_array;
    }

    /**
     * @param SugarBean $bean
     *
     * @return \LogicHook
     */
    function setBean($bean)
    {
        $this->bean = $bean;

        return $this;
    }

    /**
     * @param string $module_dir
     *
     * @return array
     */
    public function loadHooks($module_dir)
    {
        $hook_array = [];

        if (empty($module_dir)) {
            return $hook_array;
        }

        $custom = "custom/modules/$module_dir";

        if (file_exists($path = "$custom/logic_hooks.php")) {
            include $path;
        }

        if (file_exists($path = "$custom/Ext/LogicHooks/logic_hooks.ext.php")) {
            include $path;
        }

        return (array)$hook_array;
    }

    /**
     *
     * @param string  $module_dir
     * @param boolean $refresh
     *
     * @return array
     */
    public function getHooks($module_dir, $refresh = false)
    {
        if ($refresh || ! isset($this->hooks[$module_dir])) {
            $this->hooks[$module_dir] = $this->loadHooks($module_dir);
        }

        return $this->hooks[$module_dir] + Arr::get(static::$customHooks, $module_dir, []) + $this->globalHooks;
    }

    /**
     * Provide a means for developers to create upgrade safe business logic hooks.
     * If the bean is null, then we assume this call was not made from a SugarBean Object and
     * therefore we do not pass it to the method call.
     *
     * @param string $module_dir
     * @param string $event
     * @param array  $arguments
     */
    function call_custom_logic($module_dir, $event, $arguments = null)
    {
        // declare the hook array variable, it will be defined in the included file.
        $hook_array = null;

        // This will load an array of the hooks to process
        $hooks = $this->getHooks($module_dir);

        $this->process_hooks($hooks, $event, $arguments);
    }

    /**
     * This is called from call_custom_logic and actually performs the action as defined in the
     * logic hook. If the bean is null, then we assume this call was not made from a SugarBean Object and
     * therefore we do not pass it to the method call.
     *
     * @param array  $hook_array
     * @param string $event
     * @param array  $arguments
     */
    function process_hooks(array $hook_array, $event, $arguments)
    {
        // Now iterate through the array for the appropriate hook
        if (! empty($hook_array[$event])) {
            // Apply sorting to the hooks using the sort index.
            // Hooks with matching sort indexes will be processed in no particular order.
            $sorted_indexes = [];

            foreach ($hook_array[$event] as $idx => $hook_details) {
                $order_idx            = $hook_details[0];
                $sorted_indexes[$idx] = $order_idx;
            }

            asort($sorted_indexes);

            $process_order = array_keys($sorted_indexes);

            foreach ($process_order as $hook_index) {
                try {
                    $hook_details = $hook_array[$event][$hook_index];

                    $args = [$event, $arguments];

                    if (! is_null($this->bean)) {
                        array_unshift($args, $this->bean);
                    }

                    if (is_callable($hook_details[2])) {
                        call_user_func_array($hook_details[2], $args);
                        continue;
                    }

                    if (! file_exists($hook_details[2])) {
                        continue;
                    }

                    require_once $hook_details[2];

                    $hook_class    = Arr::get($hook_details, 3);
                    $hook_function = Arr::get($hook_details, 4);

                    if ($hook_class == $hook_function || is_null($hook_function)) {
                        $class = new ReflectionClass($hook_class);
                        $class->newInstanceArgs($args);
                    } else {
                        $class = new $hook_class();
                        call_user_func_array([$class, $hook_function], $args);
                    }
                } catch (Exception $e) {
                    Log::critical($e->getMessage());
                }
            }
        }
    }
}