<?php

# Indexed Array
$indexedArray = ["valueOne", "valueTwo", "valueThree"];
echo "<pre>";
print_r($indexedArray);
echo "<br>";

# Output
// Array
// (
//     [0] => valueOne
//     [1] => valueTwo
//     [2] => valueThree
// )

echo $indexedArray[1];

# Output
// valueTwo

echo "<br>";
echo "<br>";

foreach ($indexedArray as $key => $value) {
    echo "Key={$key}, Value={$value}";
    echo "<br>";
}

# Output
// Key=0, Value=valueOne
// Key=1, Value=valueTwo
// Key=2, Value=valueThree
