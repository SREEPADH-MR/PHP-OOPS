<?php

class Parentcls
{
    const CLSPARENT = "Parent";

    function __construct()
    {
        echo "Within " . self::CLSPARENT . " constructor.\n<br>";
    }
}

class Childcls extends Parentcls
{
    const CLSCHILD = "Child";

    function __construct()
    {
        parent::__construct();
        echo "Calling " . parent::CLSPARENT . " class.\n<br>";
        echo "Within " . self::CLSCHILD . " constructor.\n<br>";
    }
}

$obj = new Childcls();
