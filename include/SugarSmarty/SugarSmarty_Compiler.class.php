<?php

class Sugar_Smarty_Compiler extends Smarty_Compiler
{
    /**
     * Compile {include ...} tag
     *
     * @param string $tag_args
     *
     * @return string
     */
    function _compile_include_tag($tag_args)
    {
        $attrs = $this->_parse_attrs($tag_args);
        $arg_list = [];

        if (empty($attrs['file'])) {
            $this->_syntax_error("missing 'file' attribute in include tag", E_USER_ERROR, __FILE__, __LINE__);
        }

        $theme_template = 'false';
        foreach ($attrs as $arg_name => $arg_value) {
            if ($arg_name == 'file') {
                $include_file = $arg_value;
                continue;
            } else if ($arg_name == 'assign') {
                $assign_var = $arg_value;
                continue;
            } else if ($arg_name == 'theme_template') {
                $theme_template = $arg_value;
                continue;
            }
            if (is_bool($arg_value)) {
                $arg_value = $arg_value ? 'true' : 'false';
            }
            $arg_list[] = "'$arg_name' => $arg_value";
        }

        if ($theme_template == 'true') {
            $include_file = '"'.SugarThemeRegistry::current()->getTemplate(str_replace([
                    '"',
                    "'"
                ], '', $include_file)).'"';
        }

        $output = '<?php ';

        if (isset($assign_var)) {
            $output .= "ob_start();\n";
        }

        $output .= "\$_smarty_tpl_vars = \$this->_tpl_vars;\n";

        $_params = "array('smarty_include_tpl_file' => ".$include_file.", 'smarty_include_vars' => array(".implode(',', (array)$arg_list)."))";
        $output .= "\$this->_smarty_include($_params);\n"."\$this->_tpl_vars = \$_smarty_tpl_vars;\n"."unset(\$_smarty_tpl_vars);\n";

        if (isset($assign_var)) {
            $output .= "\$this->assign(".$assign_var.", ob_get_contents()); ob_end_clean();\n";
        }

        $output .= ' ?>';

        return $output;
    }
}