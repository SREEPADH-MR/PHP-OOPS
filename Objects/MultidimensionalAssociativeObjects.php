<?php

// Multidimensional Associative Objects.
$multidimensionalAssociativeObject = (object)[
    'keyOne' => (object)[
        'keyOne' => 'valueOne',
        'keyTwo' => 'valueTwo',
        'keyThree' => 'valueThree'
    ],
    'keyTwo' => (object)[
        'keyOne' => 'valueOne',
        'keyTwo' => 'valueTwo',
        'keyThree' => 'valueThree'
    ],
    'keyThree' => (object)[
        'keyOne' => 'valueOne',
        'keyTwo' => 'valueTwo',
        'keyThree' => 'valueThree'
    ],
];

echo "<pre>";
print_r($multidimensionalAssociativeObject);
echo "<br>";

#output
// stdClass Object
// (
//     [keyOne] => stdClass Object
//         (
//             [keyOne] => valueOne
//             [keyTwo] => valueTwo
//             [keyThree] => valueThree
//         )

//     [keyTwo] => stdClass Object
//         (
//             [keyOne] => valueOne
//             [keyTwo] => valueTwo
//             [keyThree] => valueThree
//         )

//     [keyThree] => stdClass Object
//         (
//             [keyOne] => valueOne
//             [keyTwo] => valueTwo
//             [keyThree] => valueThree
//         )
// )

echo $multidimensionalAssociativeObject->keyTwo->keyThree;

# Output
// valueThree
