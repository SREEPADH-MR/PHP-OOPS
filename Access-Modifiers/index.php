<?php

include '../Access-Modifiers/accessModifiers.php';

$object = new ClassOne;

// echo "<pre>"; print_r($object); exit;

echo "<pre>"; print_r($object->propertyOne); exit;
echo "\n" . "<br>";
echo "<pre>"; print_r($object->methodOne()); exit;
