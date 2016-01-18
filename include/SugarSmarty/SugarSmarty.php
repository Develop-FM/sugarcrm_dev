<?php

if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

if (! defined('SUGAR_SMARTY_DIR')) {
    define('SUGAR_SMARTY_DIR', storage_path('smarty/'));
}

class Sugar_Smarty extends Smarty
{

    /**
     * The file that contains the compiler class. This can a full
     * pathname, or relative to the php_include path.
     *
     * @var string
     */
    var $compiler_file = 'include/SugarSmarty/SugarSmarty_Compiler.class.php';

    /**
     * The class used for compiling templates.
     *
     * @var string
     */
    var $compiler_class = 'Sugar_Smarty_Compiler';

    function Sugar_Smarty()
    {
        if (! file_exists(SUGAR_SMARTY_DIR)) {
            mkdir_recursive(SUGAR_SMARTY_DIR, true);
        }

        if (! file_exists(SUGAR_SMARTY_DIR.'templates_c')) {
            mkdir_recursive(SUGAR_SMARTY_DIR.'templates_c', true);
        }

        if (! file_exists(SUGAR_SMARTY_DIR.'configs')) {
            mkdir_recursive(SUGAR_SMARTY_DIR.'configs', true);
        }

        if (! file_exists(SUGAR_SMARTY_DIR.'cache')) {
            mkdir_recursive(SUGAR_SMARTY_DIR.'cache', true);
        }

        $this->template_dir = '.';
        $this->compile_dir  = SUGAR_SMARTY_DIR.'templates_c';
        $this->config_dir   = SUGAR_SMARTY_DIR.'configs';
        $this->cache_dir    = SUGAR_SMARTY_DIR.'cache';

        $this->request_use_auto_globals = true; // to disable Smarty from using long arrays

        $plugins_dir = [
            'plugins',
            'include/SugarSmarty/plugins'
        ];

        if (file_exists('custom/include/Smarty/plugins')) {
            $plugins_dir[] = 'custom/include/Smarty/plugins';
        }

        $this->plugins_dir = $plugins_dir;
    }

    /**
     * Override default _unlink method call to fix Bug 53010
     *
     * @param string  $resource
     * @param integer $exp_time
     *
     * @return bool
     */
    function _unlink($resource, $exp_time = null)
    {
        if (file_exists($resource)) {
            return parent::_unlink($resource, $exp_time);
        }

        // file wasn't found, so it must be gone.
        return true;
    }
}
