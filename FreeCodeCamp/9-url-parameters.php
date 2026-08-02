<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL parameters</title>
</head>

<body>
    <form action="./9-url-parameters.php" method="get">
        Name: <input type="text" name="name"><br />
        <input type="submit">
    </form>

    <?php echo $_GET["name"]; ?>
</body>

</html>