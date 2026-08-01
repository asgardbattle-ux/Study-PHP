<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional IF Statements</title>
</head>

<body>
    <?php
    /* Sample 1 - basic
    $isMale = true;

    if ($isMale === true) {
        echo "You are male";
    } else {
        echo "You are not male";
    }
    */

    /* Sample 2 - AND &&
    $isMale = true;
    $isTall = true;

    if ($isMale == true && $isTall == true) {
        echo "You are a tall male";
    } else {
        echo "You are not male";
    }
    */

    /* Sample 3 - OR ||
    $isMale = false;
    $isTall = false;

    if ($isMale == true || $isTall == true) {
        echo "You are a tall male";
    } else {
        echo "You are not male";
    }
    */

    /* Sample 4 - elseif
    $isMale = true;
    $isTall = false;

    if ($isMale === true && $isTall === true) // !$isTall equals to $isTall === false 
    {
        echo "You are a tall male";
    } elseif ($isMale === true && $isTall === false) {
        echo "Your are a short male";
    } else {
        echo "You are not male";
    }
    */

    /* Sample 4 - elseif using negation instead of === false
    $isMale = true;
    $isTall = false;

    if ($isMale === true && $isTall === true) {
        echo "You are a tall male";
    } elseif ($isMale && !$isTall) {
        echo "Your are a short male";
    } else {
        echo "You are not male";
    }
    */

    /* Sample 5 - elseif */
    $isMale = false;
    $isTall = true;

    if ($isMale === true && $isTall === true) {
        echo "You are a tall male";
    } elseif ($isMale && !$isTall) {
        echo "Your are a short male";
    } elseif ($isMale === false && $isTall === true) {
        echo "You are not a male but are tall";
    } else {
        echo "You are not male and not tall";
    }
    ?>
</body>

<!--
I wake up
If I'm hungry
    I eat breakfast

I lok at my phone
If it's about to die
    I charge it

I leave my house
    If it's cloudy
        I bring an umbrella
    Otherwise
        I bring sunglasses
-->

</html>