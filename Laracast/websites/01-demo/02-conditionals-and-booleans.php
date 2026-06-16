<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: "Source Code Pro", sans-serif;
        }
    </style>
    <title>Conditionals and Booleans</title>
</head>

<body>
    <?php
    $name = "Dark Matter";
    $read = true;

    if ($read) {
        $message = "You have read $name";
    } else {
        $message = "You have NOT read $name";
    }
    ?>

    <h1>
        <!-- <?php echo $message; ?> -->
        <!-- Shorthand syntax for echo -->
         <?= $message ?>;
    </h1>
</body>

</html>