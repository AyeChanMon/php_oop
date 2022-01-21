<?php
class Main{
    public function Inner(){
        return new class extends Main{
            public $x = "this is inner x";

            public function run(){
                return "this is innerrun";
            }

            public function Inner2(){
                return new class extends Main{
                    public  function one(){
                        return "this is inner of inner of main";
                    }
                };
            }
        };
    }
}

$obj = new Main();
$obj->Inner()->x;
$obj->Inner()->run();
$obj->Inner()->Inner2()->one();