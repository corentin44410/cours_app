<?php
namespace App\Http\Model;
class Singleton
{
    private static $instance = null;
    private static $count;

    private function __construct() {
        self::$count = 0;
    }

    public static function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public static function increment() {
        self::$count++;
        return self::$count;
    }
    
}

?>