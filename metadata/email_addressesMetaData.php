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
 * Core email_address table
 */
$dictionary['email_addresses'] = [
    'table'   => 'email_addresses',
    'fields'  => [
        'id'                 => [
            'name'     => 'id',
            'type'     => 'id',
            'vname'    => 'LBL_EMAIL_ADDRESS_ID',
            'required' => true,
        ],
        'email_address'      => [
            'name'     => 'email_address',
            'type'     => 'varchar',
            'vname'    => 'LBL_EMAIL_ADDRESS',
            'length'   => 100,
            'required' => true,
        ],
        'email_address_caps' => [
            'name'       => 'email_address_caps',
            'type'       => 'varchar',
            'vname'      => 'LBL_EMAIL_ADDRESS_CAPS',
            'length'     => 100,
            'required'   => true,
            'reportable' => false,
        ],
        'invalid_email'      => [
            'name'    => 'invalid_email',
            'type'    => 'bool',
            'default' => 0,
            'vname'   => 'LBL_INVALID_EMAIL',
        ],
        'opt_out'            => [
            'name'    => 'opt_out',
            'type'    => 'bool',
            'default' => 0,
            'vname'   => 'LBL_OPT_OUT',
        ],
        'date_created'       => [
            'name'  => 'date_created',
            'type'  => 'datetime',
            'vname' => 'LBL_DATE_CREATE',
        ],
        'date_modified'      => [
            'name'  => 'date_modified',
            'type'  => 'datetime',
            'vname' => 'LBL_DATE_MODIFIED',
        ],
        'deleted'            => [
            'name'    => 'deleted',
            'type'    => 'bool',
            'default' => 0,
            'vname'   => 'LBL_DELETED',
        ],
    ],
    'indices' => [
        [
            'name'   => 'email_addressespk',
            'type'   => 'primary',
            'fields' => ['id']
        ],
        [
            'name'   => 'idx_ea_caps_opt_out_invalid',
            'type'   => 'index',
            'fields' => ['email_address_caps', 'opt_out', 'invalid_email']
        ],
        [
            'name'   => 'idx_ea_opt_out_invalid',
            'type'   => 'index',
            'fields' => ['email_address', 'opt_out', 'invalid_email']
        ],
    ],
];

// hack for installer
if (file_exists("storage/cache/modules/EmailAddresses/EmailAddressvardefs.php")) {
    include("storage/cache/modules/EmailAddresses/EmailAddressvardefs.php");
} else {
    $dictionary['EmailAddress'] = $dictionary['email_addresses'];
}

/**
 * Relationship table linking email addresses to an instance of a Sugar Email object
 */
$dictionary['emails_email_addr_rel'] = [
    'table'   => 'emails_email_addr_rel',
    'comment' => 'Normalization of multi-address fields such as To:, CC:, BCC',
    'fields'  => [
        'id'               => [
            'name'     => 'id',
            'type'     => 'id',
            'required' => true,
            'comment'  => 'GUID',
        ],
        'email_id'         => [
            'name'     => 'email_id',
            'type'     => 'id',
            'required' => true,
            'comment'  => 'Foriegn key to emails table NOT unique',
        ],
        'address_type'     => [
            'name'     => 'address_type',
            'type'     => 'varchar',
            'len'      => 4,
            'required' => true,
            'comment'  => 'Type of entry, TO, CC, or BCC',
        ],
        'email_address_id' => [
            'name'     => 'email_address_id',
            'type'     => 'id',
            'required' => true,
            'comment'  => 'Foriegn key to emails table NOT unique',
        ],
        'deleted'          => [
            'name'    => 'deleted',
            'type'    => 'bool',
            'default' => 0,
        ],
    ],
    'indices' => [
        [
            'name'   => 'emails_email_addr_relpk',
            'type'   => 'primary',
            'fields' => ['id'],
        ],
        [
            'name'   => 'idx_eearl_email_id',
            'type'   => 'index',
            'fields' => ['email_id', 'address_type'],
        ],
        [
            'name'   => 'idx_eearl_address_id',
            'type'   => 'index',
            'fields' => ['email_address_id'],
        ],
    ],
];

/**
 * Relationship table linking email addresses to various SugarBeans or type Person
 */
$dictionary['email_addr_bean_rel'] = [
    'table'         => 'email_addr_bean_rel',
    'fields'        => [
        [
            'name'     => 'id',
            'type'     => 'id',
            'required' => true,
        ],
        [
            'name'     => 'email_address_id',
            'type'     => 'id',
            'required' => true,
        ],
        [
            'name'     => 'bean_id',
            'type'     => 'id',
            'required' => true,
        ],
        [
            'name'     => 'bean_module',
            'type'     => 'varchar',
            'len'      => 100,
            'required' => true,
        ],
        [
            'name'    => 'primary_address',
            'type'    => 'bool',
            'default' => '0',
        ],
        [
            'name'    => 'reply_to_address',
            'type'    => 'bool',
            'default' => '0',
        ],
        [
            'name' => 'date_created',
            'type' => 'datetime'
        ],
        [
            'name' => 'date_modified',
            'type' => 'datetime'
        ],
        [
            'name'    => 'deleted',
            'type'    => 'bool',
            'default' => 0,
        ],
    ],
    'indices'       => [
        [
            'name'   => 'email_addresses_relpk',
            'type'   => 'primary',
            'fields' => ['id']
        ],
        [
            'name'   => 'idx_email_address_id',
            'type'   => 'index',
            'fields' => ['email_address_id']
        ],
        [
            'name'   => 'idx_bean_id',
            'type'   => 'index',
            'fields' => ['bean_id', 'bean_module'],
        ],
    ],
    'relationships' => [
        //Defined in Person/Company template vardefs
    ],
];
