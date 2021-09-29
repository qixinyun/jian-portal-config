<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/jian-portal-config/src/SmartyConfig/Jian',
            S_ROOT.'vendor/qixinyun/jian-portal-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/jian-portal-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
