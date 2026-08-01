<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input</title>
    <title></title>
</head>

<body>
    <form action="./6-user-input.php" method="get">
        <label for="users-names"></label>Name: <br> <input type="text" id="users-names" name="users-names"><br>
        <label for="age"></label>Age: <br><input type="text" id="age" name="users-age"><br><br>
        <input type="submit">
    </form>
    <br>
    <p>You have typed: <?php echo $_GET["users-names"]; ?> and your are <?php echo $_GET["users-age"]?> years old ;)</p>
</body>

</html>