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

$vardefs = [
    'fields' => [
        'document_name'  => [
            'name'             => 'document_name',
            'vname'            => 'LBL_NAME',
            'type'             => 'name',
            'link'             => true, // bug 39288
            'dbType'           => 'varchar',
            'len'              => '255',
            'required'         => true,
            'unified_search'   => true,
            'full_text_search' => ['boost' => 3],
        ],
        'name'           => [
            'name'             => 'name',
            'source'           => 'non-db',
            'type'             => 'varchar',
            'db_concat_fields' => [0 => 'document_name'],
        ],
        'filename'       => [
            'name'       => 'filename',
            'vname'      => 'LBL_FILENAME',
            'type'       => 'varchar',
            'required'   => true,
            'importable' => 'required',
            'len'        => '255',
            'studio'     => 'false',
        ],
        'file_ext'       => [
            'name'  => 'file_ext',
            'vname' => 'LBL_FILE_EXTENSION',
            'type'  => 'varchar',
            'len'   => 100,
        ],
        'file_mime_type' => [
            'name'  => 'file_mime_type',
            'vname' => 'LBL_MIME',
            'type'  => 'varchar',
            'len'   => '100',
        ],
        'uploadfile'     => [
            'name'   => 'uploadfile',
            'vname'  => 'LBL_FILE_UPLOAD',
            'type'   => 'file',
            'source' => 'non-db',
        ],
        'active_date'    => [
            'name'            => 'active_date',
            'vname'           => 'LBL_DOC_ACTIVE_DATE',
            'type'            => 'date',
            'required'        => true,
            'importable'      => 'required',
            'display_default' => 'now',
        ],
        'exp_date'       => [
            'name'  => 'exp_date',
            'vname' => 'LBL_DOC_EXP_DATE',
            'type'  => 'date',
        ],
        'category_id'    => [
            'name'       => 'category_id',
            'vname'      => 'LBL_SF_CATEGORY',
            'type'       => 'enum',
            'len'        => 100,
            'options'    => 'document_category_dom',
            'reportable' => false,
        ],
        'subcategory_id' => [
            'name'       => 'subcategory_id',
            'vname'      => 'LBL_SF_SUBCATEGORY',
            'type'       => 'enum',
            'len'        => 100,
            'options'    => 'document_subcategory_dom',
            'reportable' => false,
        ],
        'status_id'      => [
            'name'       => 'status_id',
            'vname'      => 'LBL_DOC_STATUS',
            'type'       => 'enum',
            'len'        => 100,
            'options'    => 'document_status_dom',
            'reportable' => false,
        ],
        'status'         => [
            'name'    => 'status',
            'vname'   => 'LBL_DOC_STATUS',
            'type'    => 'varchar',
            'source'  => 'non-db',
            'Comment' => 'Document status for Meta-Data framework',
        ],
    ]
];
