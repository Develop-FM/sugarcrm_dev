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

$GLOBALS['starttTime'] = microtime(true);

set_include_path(dirname(__FILE__).'/..'.PATH_SEPARATOR.get_include_path());

if (empty($GLOBALS['installing']) && ! file_exists('config.php')) {
    header('Location: install.php');
    exit ();
}

if (empty($GLOBALS['installing']) && empty($sugar_config['dbconfig']['db_name'])) {
    header('Location: install.php');
    exit ();
}

if (! empty($sugar_config['xhprof_config'])) {
    require_once 'include/SugarXHprof/SugarXHprof.php';
    SugarXHprof::getInstance()->start();
}

$include = [
    'include/SugarObjects/SugarConfig.php',
    'include/SugarObjects/LanguageManager.php',
    'include/SugarCache/SugarCache.php',

    // DATA SECURITY MEASURES
    'include/utils.php'       => function () {
        // cn: set php.ini settings at entry points
        setPhpIniSettings();
    },
    'include/clean.php'       => function () {
        clean_special_arguments();
        clean_incoming_data();
    },
    // END DATA SECURITY MEASURES

    // provides $sugar_version, $sugar_db_version, $sugar_flavor
    'sugar_version.php',
    'include/database/DBManagerFactory.php',
    'include/dir_inc.php',
    'include/Localization/Localization.php',
    'include/javascript/jsAlerts.php',
    'include/TimeDate.php',
    // provides $moduleList, $beanList, $beanFiles, $modInvisList, $adminOnlyList, $modInvisListActivities
    'include/modules.php',
    'data/SugarBean.php',
    'include/utils/mvc_utils.php',
    'include/SugarObjects/VardefManager.php',
    'modules/DynamicFields/templates/Fields/TemplateText.php',
    'include/utils/file_utils.php',
    'include/SugarEmailAddress/SugarEmailAddress.php',
    'modules/Trackers/BreadCrumbStack.php',
    'modules/Trackers/Tracker.php',
    'modules/Trackers/TrackerManager.php',
    'modules/ACL/ACLController.php',
    'modules/Administration/Administration.php',
    'modules/Administration/updater_utils.php',
    'modules/Users/User.php',
    'modules/Users/authentication/AuthenticationController.php',
    'include/SugarTheme/SugarTheme.php',
    'include/MVC/SugarModule.php',
    'modules/Currencies/Currency.php',
    'include/MVC/SugarApplication.php',
    'include/upload_file.php' => function () {
        UploadStream::register();
    },
    'include/SugarObjects/SugarRegistry.php'
];

foreach ($include as $key => $path) {
    $callback = null;

    if (! is_integer($key)) {
        $callback = $path;
        $path     = $key;
    }

    require_once(DOCROOT.$path);

    if (is_callable($callback)) {
        call_user_func($callback);
    }
}

///////////////////////////////////////////////////////////////////////////////
////    Handle loading and instantiation of various Sugar* class
if (! defined('SUGAR_PATH')) {
    define('SUGAR_PATH', realpath(dirname(__FILE__).'/..'));
}

if (empty($GLOBALS['installing'])) {
    ///////////////////////////////////////////////////////////////////////////////
    ////	SETTING DEFAULT VAR VALUES

    $error_notice           = '';
    $use_current_user_login = false;

    // Allow for the session information to be passed via the URL for printing.
    if (isset($_GET['PHPSESSID'])) {
        if (! empty($_COOKIE['PHPSESSID']) && strcmp($_GET['PHPSESSID'], $_COOKIE['PHPSESSID']) == 0) {
            session_id($_REQUEST['PHPSESSID']);
        } else {
            unset($_GET['PHPSESSID']);
        }
    }

    if (! empty($sugar_config['session_dir'])) {
        session_save_path($sugar_config['session_dir']);
    }

    SugarApplication::preLoadLanguages();

    $timedate = TimeDate::getInstance();

    $GLOBALS['sugar_version']  = $sugar_version;
    $GLOBALS['sugar_flavor']   = $sugar_flavor;
    $GLOBALS['timedate']       = $timedate;
    $GLOBALS['js_version_key'] = md5($GLOBALS['sugar_config']['unique_key'].$GLOBALS['sugar_version'].$GLOBALS['sugar_flavor']);

    $db = DBManagerFactory::getInstance();
    $db->resetQueryCount();
    $locale = new Localization();

    // Emails uses the REQUEST_URI later to construct dynamic URLs.
    // IIS does not pass this field to prevent an error, if it is not set, we will assign it to ''.
    if (! isset ($_SERVER['REQUEST_URI'])) {
        $_SERVER['REQUEST_URI'] = '';
    }

    $current_user   = new User();
    $current_entity = null;
    $system_config  = new Administration();
    $system_config->retrieveSettings();

    LogicHook::instance()->call_custom_logic('core', 'after_entry_point');
}

////	END SETTING DEFAULT VAR VALUES
///////////////////////////////////////////////////////////////////////////////
