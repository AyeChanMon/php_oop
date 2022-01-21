<?php
$name = "aye chan mon"; //locally
$age = 26;
$fruits = ['apple','orange','mango']; //array
$mySelf = (Object)[
    'name'=>'aye chan',
    'age'=>26,
];
function drive(){
    global $name;
    return $name."can drive";
}

echo drive();
echo "<pre>";
var_dump($mySelf);
echo "<hr>";
echo $mySelf->name; //access