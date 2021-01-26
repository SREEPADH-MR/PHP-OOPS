<?php

abstract class ClassOne
{
    public $propertyOne = 'property one';

    public function methodOne()
    {
        echo 'method one';
    }

    // like interface
    abstract public function methodTwo();
}
