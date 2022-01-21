<?php
class ClassOne{
    public $p = "this is p";
    public static $x = "this is static property";
    public function aa(){
        return "this is aa";
    }
    public static function bb(){
        return "this is aa ".self::$x;
    }
}

echo ClassOne::$x;
echo ClassOne::bb();