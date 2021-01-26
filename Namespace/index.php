<?php

// namespace ClassOne or ClassTwo;

include '../Namespace/classOne.php';
include '../Namespace/classTwo.php';

use ClassOne\ClassName;
use ClassTwo\ClassName as ClassTwo;

$object = new ClassName();
echo "\n" . "<br>";
$object = new ClassTwo();
