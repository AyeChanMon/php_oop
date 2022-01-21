<?php

class MySelf{
    //property
    var $name = "aye chan";
    var $age = 26;

    function eat(){
        return $this->name ."can eat";
    }

    function sleep(){
        return "I like sleep";
    }
}

$obj = new MySelf(); //object instantiate
echo $obj ->name;//access property
echo $obj ->eat(); //access method