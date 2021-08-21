<?php

// $object = new stdClass();
// or

// Indexed Objects.
$object = (object)[
    'valueOne',
    'valueTwo',
    'valueThree'
];

echo "<pre>";
print_r($object);
echo "<br>";

#output
// stdClass Object
// (
//     [0] => valueOne
//     [1] => valueTwo
//     [2] => valueThree
// )

echo $object->{0};

#output
// valueTwo
