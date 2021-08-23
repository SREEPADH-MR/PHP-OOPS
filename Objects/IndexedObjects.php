<?php

// $object = new stdClass();
// or

// Indexed Objects.
$indexedObject = (object)[
    'valueOne',
    'valueTwo',
    'valueThree'
];

echo "<pre>";
print_r($indexedObject);
echo "<br>";

#output
// stdClass Object
// (
//     [0] => valueOne
//     [1] => valueTwo
//     [2] => valueThree
// )

echo $indexedObject->{0};

#output
// valueTwo
