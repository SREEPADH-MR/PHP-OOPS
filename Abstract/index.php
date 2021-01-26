<?php

// Inheritance

include '../Abstract/abstract.php';

class ClassTwo extends ClassOne
{
    public function __construct()
    {
        echo $this->propertyOne."\n"."<br>";

        echo $this->methodOne();
    }
    
    // like interface
    public function methodTwo()
    {

    }
}

$object = new ClassTwo;

// echo "<pre>"; print_r($object); exit;

// echo "<pre>"; print_r($object->propertyOne); exit;

// echo "<pre>"; print_r($object->methodOne()); exit;
