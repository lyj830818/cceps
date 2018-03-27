<?php
if(!function_exists('getCSS'))
{
    function getCSS($code)
    {
        $css = unserialize('O:8:"stdClass":0:{}');
        foreach($css as $page => $value)
        {
            $css->$page = str_replace('default/default/', 'default/' . $code . '/', $value);
        }
        return $css;
    }
}
if(!function_exists('getJS'))
{
    function getJS($code)
    {
        $js = unserialize('O:8:"stdClass":0:{}');
        foreach($js as $page => $value)
        {
            $js->$page = str_replace('default/default/', 'default/' . $code . '/', $value);
        }
        return $js;
    }
}