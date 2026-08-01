<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lower string checker ;)</title>
</head>

<body>
    <?php
    $stringOfSymbols = 'sadfb';
    $allowedLetters = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

    // Solution 1
    // function stringSearcher($string, $array)
    // {
    //     $allSmall = true;

    //     for ($i = 0; $i < strlen($string); $i++) {
    //         $symbol = $string[$i];

    //         if (!(in_array($symbol, $array))) {
    //             $allSmall = false;
    //             break;
    //         }
    //     }

    //     return $allSmall;
    // }

    // $result = stringSearcher($stringOfSymbols, $allowedLetters);

    // if ($result) {
    //     echo "All small letters.";
    // } else {
    //     echo "Other symbol is met.";
    // }

    // Solution 2
    function stringSearcher2(string $string)
    {
        $allSmall = true;

        for ($i = 0; $i < strlen($string); $i++) {
            $symbol = $string[$i];
            $stringToASCII = ord($symbol);

            if (!($stringToASCII >= 97 && $stringToASCII <= 122)) {
                // '$stringToASCII >= 97 && $stringToASCII <= 122' a-z range
                $allSmall = false;
                break;
            }
        }

        return $allSmall;
    }

    $result2 = stringSearcher2($stringOfSymbols);

    if ($result2) {
            echo "All small letters.";
        } else {
            echo "Other symbol is met.";
        }
    ?>
</body>

</html>