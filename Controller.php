<?php

public function execute() {
    echo "Hiiiiiiiiii";
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
