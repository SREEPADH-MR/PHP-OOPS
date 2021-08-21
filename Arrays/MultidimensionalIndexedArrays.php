<?php

# Multidimensional Indexed Array
$MultidimensionalIndexedArray = [
    ["valueOne", "valueTwo", "valueThree"],
    ["valueOne", "valueTwo", "valueThree"],
    ["valueOne", "valueTwo", "valueThree"]
];

echo "<pre>";
print_r($MultidimensionalIndexedArray);
echo "<br>";

# Output
// Array
// (
//     [0] => Array
//         (
//             [0] => valueOne
//             [1] => valueTwo
//             [2] => valueThree
//         )

//     [1] => Array
//         (
//             [0] => valueOne
//             [1] => valueTwo
//             [2] => valueThree
//         )

//     [2] => Array
//         (
//             [0] => valueOne
//             [1] => valueTwo
//             [2] => valueThree
//         )
// )

echo $MultidimensionalIndexedArray['1']['0'];

# Output
// valueOne

echo "<br>";
echo "<br>";

foreach ($MultidimensionalIndexedArray as $key => $value) {
    echo "Key={$key}, Value={$value[2]}";
    echo "<br>";
}

# Output
// Key=0, Value=valueThree
// Key=1, Value=valueThree
// Key=2, Value=valueThree
