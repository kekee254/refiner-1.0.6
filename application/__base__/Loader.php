<?php
/**
 * Created by PhpStorm.
 * User: KEKEE
 * Date: 3/5/2019
 * Time: 10:57 AM
 */

class Loader
{
    private static $loader;
    private $database;

    public static function load()
    {
        if (!self::$loader) {
            self::$loader = new Loader();
        }
        return self::$loader;
    }
    public static function get_configs($key)
    {
        $config = self::load();
        $config= $config->find('Config');
        return $config->try_config($key);
    }
    /*
     * Create connections
     * */
    public static  function db()
    {
        $database_connection = self::load();
        $database_connection = $database_connection->find('Query');
        return $database_connection->hook();
    }

    public function  find($classname)
{
    if(isset($classname) && class_exists($classname)):
        $_obj_ =new $classname;
    return $_obj_;
    else:
        echo "can not find class";
        endif;
}
}