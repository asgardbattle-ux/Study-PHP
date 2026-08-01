<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String reversal ;)</title>
    <style>
        #own-solution-1 {
            display: none;
        }

        #own-solution-2 {
            display: none;
        }

        #school-solution {
            diplay: inline;
        }
    </style>
</head>

<body>
    <div id="own-solution-1">
        <?php
        $textToRev = 'esreveR'; // reverse

        function reverseString($text)
        {
            $reversed = '';
            for ($i = strlen($text) - 1; $i >= 0; $i--) {
                $reversed = $reversed . $text[$i];
            }

            return $reversed;
        }

        $reversedString = reverseString($textToRev);

        echo $reversedString;
        ?>
    </div>

    <div id="own-solution-2">
        <?php
        $textToRev = 'esreveR'; // reverse
        $reversedString = strrev($textToRev);
        echo $reversedString;
        ?>
    </div>

    <div id="school-solution">
        <?php
        // Function to reverse a string recursively
        function reverse_string($str1)
        {
            // Get the length of the string
            $n = strlen($str1);

            // Base case: if the string has only one character, return the string itself
            if ($n == 1) {
                return $str1;
            } else {
                // Decrement the length of the string 
                $n--;

                // Recursively reverse the substring starting from the second character
                // and concatenate the first character to it
                // echo '$str1 => ' . $str1 . ' | $n => ' . $n . '<br/>';
                // echo 'substr($str1, 1, $n) => ' . substr($str1, 1, $n) . ' | ' . 'substr($str1, 0, 1) => ' . substr($str1, 0, 1) . '<br/>';
                // echo 'substr($str1, 1, $n) . substr($str1, 0, 1) => ' . substr($str1, 1, $n) . substr($str1, 0, 1) . '<br/>';
                // echo '- - - - - - - - - - - - -<br/>';
                return reverse_string(substr($str1, 1, $n)) . substr($str1, 0, 1);
                
                // $str1 => 1234 | $n => 3
                // substr($str1, 1, $n) => 234 | substr($str1, 0, 1) => 1
                // substr($str1, 1, $n) . substr($str1, 0, 1) => 2341
                // - - - - - - - - - - - - -
                // $str1 => 234 | $n => 2
                // substr($str1, 1, $n) => 34 | substr($str1, 0, 1) => 2
                // substr($str1, 1, $n) . substr($str1, 0, 1) => 342
                // - - - - - - - - - - - - -
                // $str1 => 34 | $n => 1
                // substr($str1, 1, $n) => 4 | substr($str1, 0, 1) => 3
                // substr($str1, 1, $n) . substr($str1, 0, 1) => 43
                // - - - - - - - - - - - - -
                // 1234 => 1 | 234; 234 => 2 | 34; 34 => 3 | 4; 4
            }
        }

        // Call the reverse_string function with the argument '1234' and print the result
        echo reverse_string('1234') . "\n";

        ?>

    </div>
</body>

</html>