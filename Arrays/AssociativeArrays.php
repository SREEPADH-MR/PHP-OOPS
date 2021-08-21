<?php

# Associative Array
$associativeArray = [
    "keyOne" => "valueOne",
    "keyTwo" => "valueTwo",
    "keyThree" => "valueThree"
];

echo "<pre>";
print_r($associativeArray);
echo "<br>";

# Output
// Array
// (
//     [keyOne] => valueOne
//     [keyTwo] => valueTwo
//     [keyThree] => valueThree
// )

echo $associativeArray['keyTwo'];

# Output
// valueTwo

echo "<br>";
echo "<br>";

foreach ($associativeArray as $key => $value) {
    echo "Key={$key}, Value={$value}";
    echo "<br>";
}

# Output
// Key=keyOne, Value=valueOne
// Key=keyTwo, Value=valueTwo
// Key=keyThree, Value=valueThree
