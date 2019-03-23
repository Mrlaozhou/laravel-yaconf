<?php
namespace Mrlaozhou\Yc;

/**
 * Class Yc
 *
 * @package Mrlaozhou\Yc
 * @see http://www.php.net/manual/zh/class.yaconf.php
 */
class Yc
{

    /**
     * @param string $name
     * @param null   $default
     *
     * @return mixed
     */
    public static function get(string $name, $default = null)
    {
        return \Yaconf::get($name, $default);
    }

    /**
     * @param string $name
     *
     * @return bool
     */
    public static function has(string $name)
    {
        return \Yaconf::has($name);
    }
}