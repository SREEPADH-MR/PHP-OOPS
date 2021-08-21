<?php

// Associative Objects.
$object = (object)[
    'keyOne' => 'valueOne',
    'keyTwo' => 'valueTwo',
    'keyThree' => 'valueThree'
];

echo "<pre>";
print_r($object);
echo "<br>";

#output
// stdClass Object
// (
//     [keyOne] => valueOne
//     [keyTwo] => valueTwo
//     [keyThree] => valueThree
// )

echo $object->keyTwo;

#output
// valueTwo
