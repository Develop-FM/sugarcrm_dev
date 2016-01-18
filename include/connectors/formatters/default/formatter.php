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
 * Generic formatter
 * @api
 */
class default_formatter
{
    /**
     * @var Sugar_Smarty
     */
    protected $_ss;

    /**
     * @var component
     */
    protected $_component;

    /**
     * @var string
     */
    protected $_tplFileName;

    /**
     * @var string
     */
    protected $_module;

    /**
     * @var string
     */
    protected $_hoverField;

    public function getDetailViewFormat()
    {
        $source = $this->_component->getSource();
        $class  = get_class($source);
        $dir    = str_replace('_', '/', $class);
        $config = $source->getConfig();

        $this->_ss->assign('config', $config);
        $this->_ss->assign('source', $class);
        $this->_ss->assign('module', $this->_module);

        $mapping = $source->getMapping();
        $mapping = ! empty($mapping['beans'][$this->_module]) ? implode(',', array_values($mapping['beans'][$this->_module])) : '';
        $this->_ss->assign('mapping', $mapping);

        if (file_exists($path = DOCROOT."custom/modules/Connectors/connectors/formatters/{$dir}/tpls/{$this->_module}.tpl")) {
            return $this->_ss->fetch($path);
        } else if (file_exists($path = DOCROOT."modules/Connectors/connectors/formatters/{$dir}/tpls/{$this->_module}.tpl")) {
            return $this->_ss->fetch($path);
        } else if (file_exists($path = DOCROOT."custom/modules/Connectors/connectors/formatters/{$dir}/tpls/default.tpl")) {
            return $this->_ss->fetch($path);
        } else if (file_exists($path = DOCROOT."modules/Connectors/connectors/formatters/{$dir}/tpls/default.tpl")) {
            return $this->_ss->fetch($path);
        } else if (preg_match('/_soap_/', $class)) {
            return $this->_ss->fetch(DOCROOT."include/connectors/formatters/ext/soap/tpls/default.tpl");
        } else {
            return $this->_ss->fetch(DOCROOT."include/connectors/formatters/ext/rest/tpls/default.tpl");
        }
    }

    /**
     * @return string
     */
    public function getEditViewFormat()
    {
        return '';
    }

    /**
     * @return string
     */
    public function getListViewFormat()
    {
        return '';
    }

    /**
     * @return string
     */
    public function getSearchFormFormat()
    {
        return '';
    }

    /**
     * @return mixed
     */
    protected function fetchSmarty()
    {
        $source = $this->_component->getSource();
        $class  = get_class($source);
        $dir    = str_replace('_', '/', $class);
        $config = $source->getConfig();

        $this->_ss->assign('config', $config);
        $this->_ss->assign('source', $class);
        $this->_ss->assign('module', $this->_module);

        if (file_exists($path = DOCROOT."custom/modules/Connectors/connectors/formatters/{$dir}/tpls/{$this->_module}.tpl")) {
            return $this->_ss->fetch($path);
        } else if (file_exists($path = DOCROOT."modules/Connectors/connectors/formatters/{$dir}/tpls/{$this->_module}.tpl")) {
            return $this->_ss->fetch($path);
        } else if (file_exists($path = DOCROOT."custom/modules/Connectors/connectors/formatters/{$dir}/tpls/default.tpl")) {
            return $this->_ss->fetch($path);
        } else {
            return $this->_ss->fetch(DOCROOT."modules/Connectors/connectors/formatters/{$dir}/tpls/default.tpl");
        }
    }

    /**
     * @return array
     */
    public function getSourceMapping()
    {
        $source  = $this->_component->getSource();
        $mapping = $source->getMapping();

        return $mapping;
    }

    /**
     * @param Smarty $smarty
     */
    public function setSmarty(Smarty $smarty)
    {
        $this->_ss = $smarty;
    }

    /**
     * @return Sugar_Smarty
     */
    public function getSmarty()
    {
        return $this->_ss;
    }

    /**
     * @param component $component
     */
    public function setComponent($component)
    {
        $this->_component = $component;
    }

    /**
     * @return component
     */
    public function getComponent()
    {
        return $this->_component;
    }

    /**
     * @return string
     */
    public function getTplFileName()
    {
        return $this->_tplFileName;
    }

    /**
     * @param string $tplFileName
     */
    public function setTplFileName($tplFileName)
    {
        $this->_tplFileName = $tplFileName;
    }

    /**
     * @param string $module
     */
    public function setModule($module)
    {
        $this->_module = $module;
    }

    /**
     * @return string
     */
    public function getModule()
    {
        return $this->_module;
    }

    /**
     * @return string
     */
    public function getIconFilePath()
    {
        return '';
    }
}