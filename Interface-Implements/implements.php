<?php

include '../Interface-Implements/interface.php';

class ClassTwo implements ClassOne
{
    public function methodOne()
    {
        echo 'method one';
    }
}

$object = new ClassTwo;

echo "<pre>"; print_r($object->methodOne()); exit;
