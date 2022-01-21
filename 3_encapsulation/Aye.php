<?php

class Aye{
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

    public function aa(){
        return $this->exName;
    }

    /**
     * @return string
     */
    public function getExName()
    {
        return $this->exName;
    }

    /**
     * @param string $exName
     */
    public function setExName($exName)
    {
        $this->exName = $exName;
    }
    
}

$obj = new Aye();
echo $obj->name;
// echo $obj->age;
echo $obj -> aa(); //encapsulation(passing through function)
$obj -> setExName('Baekhyun'); //overwrite
echo $obj -> getExName();