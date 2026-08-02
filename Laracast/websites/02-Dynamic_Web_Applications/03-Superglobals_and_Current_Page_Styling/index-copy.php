<?php
// // Own function - extract symbols of $_SERVER['REQUEST_URI'] from end to start, until first '/' reached
// // reverse and return the result
// // if no '/' reached, return the all symbols
// function extractText(string $inputStr): string
// {
//     $result = '';

//     for ($i = strlen($inputStr) - 1; $i >= 0; $i--) {
//         $result .= $inputStr[$i];

//         if ($inputStr[$i] === '/') {
//             return strrev($result);
//         }
//     }
//     return strrev($result);
// }

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

$heading = 'Home';
$pageUrl = basename($_SERVER['REQUEST_URI']); // returns base path of the URI

require('views/index.view.php');
