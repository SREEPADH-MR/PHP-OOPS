<?php

include '../Traits/classOne.php';
include '../Traits/classTwo.php';

class ClassThree
{
    use ClassOne, ClassTwo;
}

$object = new ClassThree();

$object->methodOne();
echo "\n" . "<br>";
$object->methodTwo();
