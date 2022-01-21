<?php

class Acm{
    public $name = 'aye chan'; //field or property
    protected $age = 26;
    private $exName = 'Luhan';

    public function share(){
        return $this->name . "share programming";
    }

    protected function teach(){
        return "only for member";
    }

    private function dating(){
        return "date with poe";
    }
}

$obj = new Acm();
echo $obj->name;
echo $obj->age;
