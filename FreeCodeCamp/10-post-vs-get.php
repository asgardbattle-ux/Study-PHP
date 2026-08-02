<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST vs. GET</title>
</head>

<body>
    <form action="./10-post-vs-get.php" method="post">
        Password: <input type="password" name="password"><br />
        <input type="submit">
    </form>
    <br />

    <?php
    echo $_POST["password"];
    ?>
</body>

</html>