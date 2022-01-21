<?php
class Index{

    public function run(){
        echo "this is run method<br>";
    }

    public function aa(){
        echo "aa<br>";
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "this is destruct<br>";
    }

    public function __construct($para)
    {
        echo "this is constructor<br>";
    }
}

$obj = new Index("ABCD");
$obj->aa();
$obj->run();