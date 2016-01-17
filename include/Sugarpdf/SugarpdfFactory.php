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

require_once('include/Sugarpdf/Sugarpdf.php');

class SugarpdfFactory
{
    /**
     * load the correct Tcpdf
     *
     * @param string    $type Tcpdf Type
     * @param string    $module
     * @param SugarBean $bean
     * @param array     $sugarpdf_object_map
     *
     * @return TCPDF valid Tcpdf
     */
    function loadSugarpdf($type = 'default', $module, $bean = null, $sugarpdf_object_map = [])
    {
        $type = strtolower(basename($type));

        //first let's check if the module handles this Tcpdf
        $sugarpdf = null;
        $path     = '/sugarpdf/sugarpdf.'.$type.'.php';
        if (file_exists('custom/modules/'.$module.$path)) {
            $sugarpdf = SugarpdfFactory::_buildFromFile('custom/modules/'.$module.$path, $bean, $sugarpdf_object_map, $type, $module);
        } else if (file_exists('modules/'.$module.$path)) {
            $sugarpdf = SugarpdfFactory::_buildFromFile('modules/'.$module.$path, $bean, $sugarpdf_object_map, $type, $module);
        } else if (file_exists('custom/include/Sugarpdf'.$path)) {
            $sugarpdf = SugarpdfFactory::_buildFromFile('custom/include/Sugarpdf'.$path, $bean, $sugarpdf_object_map, $type, $module);
        } else {
            //if the module does not handle this Sugarpdf, then check if Sugar handles it OOTB
            $file = 'include/Sugarpdf'.$path;
            if (file_exists($file)) {
                //it appears Sugar does have the proper logic for this file.
                $sugarpdf = SugarpdfFactory::_buildFromFile($file, $bean, $sugarpdf_object_map, $type, $module);
            }
        }

        // Default to Sugarpdf if still nothing found/built
        if (! isset($sugarpdf)) {
            $sugarpdf = new Sugarpdf($bean, $sugarpdf_object_map);
        }

        return $sugarpdf;
    }

    /**
     * This is a private function which just helps the getSugarpdf function generate the
     * proper Tcpdf object
     *
     * @param string    $file
     * @param SugarBean $bean
     * @param array     $sugarpdf_object_map
     * @param string    $type
     * @param string    $module
     *
     * @return Sugarpdf
     */
    function _buildFromFile($file, &$bean, $sugarpdf_object_map, $type, $module)
    {
        require_once($file);

        //try ModuleSugarpdfType first then try SugarpdfType if that fails then use Sugarpdf
        $class = ucfirst($module).'Sugarpdf'.ucfirst($type);
        if (! class_exists($class)) {
            $class = 'Sugarpdf'.ucfirst($type);
            if (! class_exists($class)) {
                return new Sugarpdf($bean, $sugarpdf_object_map);
            }
        }

        return SugarpdfFactory::_buildClass($class, $bean, $sugarpdf_object_map);
    }

    /**
     * instantiate the correct Tcpdf and call init to pass on any obejcts we need to from the controller.
     *
     * @param string    $class               - the name of the class to instantiate
     * @param SugarBean $bean                = the bean to pass to the Sugarpdf
     * @param array     $sugarpdf_object_map - the array which holds obejcts to pass between the ontroller and the
     *
     * @return Sugarpdf
     */
    function _buildClass($class, &$bean, $sugarpdf_object_map)
    {
        $sugarpdf = new $class($bean, $sugarpdf_object_map);

        if ($sugarpdf instanceof Sugarpdf) {
            return $sugarpdf;
        } else {
            return new Sugarpdf($bean, $sugarpdf_object_map);
        }
    }
}