<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker ;)</title>
</head>

<body>
    <?php
    function isPalindrome(string $string)
    {
        if (strrev($string) === $string) {
            return true;
        } else {
            return false;
        }
    }

    $word1 = "what";
    $word2 = "obo";
    $word3 = "bobo";
    $word4 = "obobo";

    if (isPalindrome($word1)) {
        echo $word1 . " => is a palindrome";
    } else {
        echo $word1 . " => isn't a palindrome";
    }

    echo '<br/>';

    if (isPalindrome($word2)) {
        echo $word2 . " => is a palindrome";
    } else {
        echo $word2 . " => isn't a palindrome";
    }

    echo '<br/>';

    if (isPalindrome($word3)) {
        echo $word3 . " => is a palindrome";
    } else {
        echo $word3 . " => isn't a palindrome";
    }

    echo '<br/>';

    if (isPalindrome($word4)) {
        echo $word4 . " => is a palindrome";
    } else {
        echo $word4 . " => isn't a palindrome";
    }
    ?>
</body>

</html>