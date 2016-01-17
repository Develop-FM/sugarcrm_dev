<?php

if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/**
 * @param string $module_name
 *
 * @return array
 */
function get_hook_array($module_name)
{
    $hook_array = [];

    // This will load an array of the hooks to process
    include("custom/modules/$module_name/logic_hooks.php");

    return $hook_array;
}

/**
 * @param array  $hook_array
 * @param string $event
 * @param array  $action_array
 *
 * @return bool
 */
function check_existing_element($hook_array, $event, $action_array)
{
    if (isset($hook_array[$event])) {
        foreach ($hook_array[$event] as $action) {
            if ($action[1] == $action_array[1]) {
                return true;
            }
        }
    }

    return false;
}

/**
 * @param array $hook_array
 *
 * @return string
 */
function replace_or_add_logic_type($hook_array)
{
    $new_entry    = build_logic_file($hook_array);
    $new_contents = "<?php".PHP_EOL.$new_entry.PHP_EOL.PHP_EOL;

    return $new_contents;
}

/**
 * @param string $module_name
 * @param string $contents
 */
function write_logic_file($module_name, $contents)
{
    $file = "modules/$module_name/logic_hooks.php";
    $file = create_custom_directory($file);
    $fp   = sugar_fopen($file, 'wb');
    fwrite($fp, $contents);
    fclose($fp);
}

/**
 * @param array $hook_array
 *
 * @return string
 */
function build_logic_file($hook_array)
{
    $hook_contents = "";
    $hook_contents .= "// Do not store anything in this file that is not part of the array or the hook version. This file will".PHP_EOL;
    $hook_contents .= "// be automatically rebuilt in the future.".PHP_EOL.PHP_EOL;
    $hook_contents .= "\$hook_version = 1;".PHP_EOL;
    $hook_contents .= "\$hook_array = [];".PHP_EOL;

    foreach ($hook_array as $event_array => $event) {
        $hook_contents .= "\$hook_array['".$event_array."'] = [];".PHP_EOL;

        foreach ($event as $second_key => $elements) {
            $hook_contents .= "\$hook_array['".$event_array."'][] = ";
            $hook_contents .= "[";
            foreach ($elements as $element) {
                $hook_contents .= ", ".var_export_helper($element);
            }
            $hook_contents .= "];".PHP_EOL;
        }
    }

    return $hook_contents.PHP_EOL.PHP_EOL;
}