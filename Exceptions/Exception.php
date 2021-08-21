<?php

function foo($value)
{
    if ($value == 0) {
        throw new Exception("Something went wrong.", 404);
    }
    return $value;
}

try {
    echo foo(0);
    echo '<br>';
} catch (Exception $ex) {

    $error = [];
    $error['errorMessage'] = $ex->getMessage();
    $error['statusCode'] = $ex->getCode();
    $error['filePath'] = $ex->getFile();
    $error['lineNumber'] = $ex->getLine();

    echo "<pre>";
    print_r($error);
} finally {
    echo "completed";
}

#output
// Array
// (
//     [errorMessage] => Something went wrong.
//     [statusCode] => 401
//     [filePath] => C:\xampp\htdocs\Projects\Mine\PHP-OOPS\Exceptions\Exception.php
//     [lineNumber] => 6
// )
