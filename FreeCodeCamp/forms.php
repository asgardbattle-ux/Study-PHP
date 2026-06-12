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
        <label for="users-names">Name:</label><br>
        <input type="text" id="users-names" name="users-names"><br>
        <label for="age">Age:</label><br>
        <input type="text" id="age" name="users-age"><br><br>
        <input type="submit">
    </form>

    <!-- COMMENTS SECTION
    // form.action - form-handler, typically a file on the server with a script for processing input data. Data is send to that file upon submit.
    // input and label are related by input.id and label.for
    // input attrbitues:
    // - id - used for CSS classes, JS, label;
    // - name - key:value pair send to the server(PHP). User input is stored as ASSOCIATIVE ARRAY, where:
    // -- key -> name ( e.g. name="users-name" -> users-name);
    // -- value -> user input.
    // -- it could be accessed by, e.g.: $_POST["users-name"]

    -->
    <br>
</body>

</html>