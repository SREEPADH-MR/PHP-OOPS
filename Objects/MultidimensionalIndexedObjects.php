<?php

// $object = new stdClass();
// or

// Multidimensional Indexed Objects.
$multidimensionalIndexedObject = (object)[
    (object)['valueOne', 'valueTwo', 'valueThree'],
    (object)['valueOne', 'valueTwo', 'valueThree'],
    (object)['valueOne', 'valueTwo', 'valueThree'],
];

echo "<pre>";
print_r($multidimensionalIndexedObject);
echo "<br>";

#output
// stdClass Object
// (
//     [0] => stdClass Object
//         (
//             [0] => valueOne
//             [1] => valueTwo
//             [2] => valueThree
//         )

//     [1] => stdClass Object
//         (
//             [0] => valueOne
//             [1] => valueTwo
//             [2] => valueThree
//         )

//     [2] => stdClass Object
//         (
//             [0] => valueOne
//             [1] => valueTwo
//             [2] => valueThree
//         )
// )

echo $multidimensionalIndexedObject->{1}->{0};

# Output
// valueOne
