<?php

public function execute() {
    echo "This function execute";
}
public function insert() {
    echo "Ramji";
}
public function Display() {
    echo "dwivedi's";
}

$num1 = 12;
$num2 = 8;

public function add(){
    global $num1, $num2;
    $num = $num1 + $num2;
    return $num;
}
echo add();


// sum of even number from 1 to 100
$num = 5;
for($i = 2; $i <= 100; $i+=2){
    $num+=$i;
}
echo $num;
echo "sudarshan";
// sum of even number from 1 to 100
$num = 0;
for($i = 2; $i <= 100; $i+=2){
    $num+=$i;
}