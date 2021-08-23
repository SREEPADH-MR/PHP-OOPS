<?php

// Associative Objects.
$associativeObject = (object)[
    'keyOne' => 'valueOne',
    'keyTwo' => 'valueTwo',
    'keyThree' => 'valueThree'
];

echo "<pre>";
print_r($associativeObject);
echo "<br>";

#output
// stdClass Object
// (
//     [keyOne] => valueOne
//     [keyTwo] => valueTwo
//     [keyThree] => valueThree
// )

echo $associativeObject->keyTwo;

#output
// valueTwo
