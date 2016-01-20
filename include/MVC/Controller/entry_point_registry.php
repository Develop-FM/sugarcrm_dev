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

$entry_point_registry = [
    'emailImage'                => ['file' => DOCROOT.'modules/EmailMan/EmailImage.php', 'auth' => false],
    'download'                  => ['file' => DOCROOT.'download.php', 'auth' => true],
    'export'                    => ['file' => DOCROOT.'export.php', 'auth' => true],
    'export_dataset'            => ['file' => DOCROOT.'export_dataset.php', 'auth' => true],
    'Changenewpassword'         => ['file' => DOCROOT.'modules/Users/Changenewpassword.php', 'auth' => false],
    'GeneratePassword'          => ['file' => DOCROOT.'modules/Users/GeneratePassword.php', 'auth' => false],
    'vCard'                     => ['file' => DOCROOT.'vCard.php', 'auth' => true],
    'pdf'                       => ['file' => DOCROOT.'pdf.php', 'auth' => true],
    'minify'                    => ['file' => DOCROOT.'jssource/minify.php', 'auth' => true],
    'json_server'               => ['file' => DOCROOT.'json_server.php', 'auth' => true],
    'get_url'                   => ['file' => DOCROOT.'get_url.php', 'auth' => true],
    'HandleAjaxCall'            => ['file' => DOCROOT.'HandleAjaxCall.php', 'auth' => true],
    'TreeData'                  => ['file' => DOCROOT.'TreeData.php', 'auth' => true],
    'image'                     => ['file' => DOCROOT.'modules/Campaigns/image.php', 'auth' => false],
    'campaign_trackerv2'        => ['file' => DOCROOT.'modules/Campaigns/Tracker.php', 'auth' => false],
    'WebToLeadCapture'          => ['file' => DOCROOT.'modules/Campaigns/WebToLeadCapture.php', 'auth' => false],
    'removeme'                  => ['file' => DOCROOT.'modules/Campaigns/RemoveMe.php', 'auth' => false],
    'acceptDecline'             => ['file' => DOCROOT.'modules/Contacts/AcceptDecline.php', 'auth' => false],
    'leadCapture'               => ['file' => DOCROOT.'modules/Leads/Capture.php', 'auth' => false],
    'process_queue'             => ['file' => DOCROOT.'process_queue.php', 'auth' => true],
    'zipatcher'                 => ['file' => DOCROOT.'zipatcher.php', 'auth' => true],
    'mm_get_doc'                => ['file' => DOCROOT.'modules/MailMerge/get_doc.php', 'auth' => true],
    'getImage'                  => ['file' => DOCROOT.'include/SugarTheme/getImage.php', 'auth' => false],
    'GenerateQuickComposeFrame' => ['file' => DOCROOT.'modules/Emails/GenerateQuickComposeFrame.php', 'auth' => true],
    'DetailUserRole'            => ['file' => DOCROOT.'modules/ACLRoles/DetailUserRole.php', 'auth' => true],
    'getYUIComboFile'           => ['file' => DOCROOT.'include/javascript/getYUIComboFile.php', 'auth' => false],
    'UploadFileCheck'           => ['file' => DOCROOT.'modules/Configurator/UploadFileCheck.php', 'auth' => true],
    'jslang'                    => ['file' => DOCROOT.'include/language/getJSLanguage.php', 'auth' => true],
    'SAML'                      => [
        'file' => DOCROOT.'modules/Users/authentication/SAMLAuthenticate/index.php',
        'auth' => false
    ],
];