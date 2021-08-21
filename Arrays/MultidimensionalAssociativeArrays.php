<?php

# Multidimensional Associative Array
$MultidimensionalAssociativeArray = [
    "keyOne" => [
        "keyOne" => "valueOne",
        "keyTwo" => "valueTwo",
        "keyThree" => "valueThree"
    ],
    "keyTwo" => [
        "keyOne" => "valueOne",
        "keyTwo" => "valueTwo",
        "keyThree" => "valueThree"
    ],
    "keyThree" => [
        "keyOne" => "valueOne",
        "keyTwo" => "valueTwo",
        "keyThree" => "valueThree"
    ],
];

echo "<pre>";
print_r($MultidimensionalAssociativeArray);
echo "<br>";

# Output
// Array
// (
//     [keyOne] => Array
//         (
//             [keyOne] => valueOne
//             [keyTwo] => valueTwo
//             [keyThree] => valueThree
//         )

//     [keyTwo] => Array
//         (
//             [keyOne] => valueOne
//             [keyTwo] => valueTwo
//             [keyThree] => valueThree
//         )

//     [keyThree] => Array
//         (
//             [keyOne] => valueOne
//             [keyTwo] => valueTwo
//             [keyThree] => valueThree
//         )
// )

echo $MultidimensionalAssociativeArray['keyTwo']['keyThree'];

# Output
// valueThree

echo "<br>";
echo "<br>";

foreach ($MultidimensionalAssociativeArray as $key => $value) {
    echo "Key={$key}, Value={$value['keyThree']}";
    echo "<br>";
}

# Output
// Key=keyOne, Value=valueThree
// Key=keyTwo, Value=valueThree
// Key=keyThree, Value=valueThree
