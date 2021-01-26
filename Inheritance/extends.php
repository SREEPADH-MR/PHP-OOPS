<?php

// Inheritance

include '../Access-Modifiers/accessModifiers.php';

class ClassTwo extends ClassOne
{
    public function __construct()
    {
        echo $this->propertyThree."\n"."<br>";

        echo $this->methodThree();
    }
}

$object = new ClassTwo;

// echo "<pre>"; print_r($object); exit;

// echo "<pre>"; print_r($object->propertyOne); exit;

// echo "<pre>"; print_r($object->methodOne()); exit;
