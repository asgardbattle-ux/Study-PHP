<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>

<body>
    <?php
    $phrase = "Giraffe Academy ;)";
    echo substr($phrase, 8, -3);

    /** STRING FUNCTIONS
     * strlen(string) | int - returns the length of a string
     * str_word_count() | int - counts the number of words in a string
     * str_contains() | true/false - checks if a string contains a specific substring
     * ** Available in PHP 8.0. For older version, strpos() is to be used
     * strpos() - searches for a specific text within a string
     * ** If a match is found ( case-sensitive ), the function returns the character position of the first match. If no match is found, it will return false
     * str_starts_with() | true/false - checks if a string starts with a specific substring
     * ** Available in PHP 8.0
     * str_ends_with() | true/false - checks if a string ends with a specific substring
     * ** Available in PHP 8.0
     * strtoupper(string) | str - returns a string in upper case
     * strtolower(string) | str - returns a string in lower casee
     * str_replace(search, reaplce, subject(where to search)) | str - replaces some characters with some other characters in a string
     * strrev() | str - reverses a string
     * trim() | str - removes any whitespace from the beginning or the end
     * explode() | arr - splits a string into an array
     * substr($phrase, where to start from, how many) | str - is used to extract a part of a string (slice a string). "how many" part is optional
     * ** Specify the start index and the number of characters you want to return
     * ** By leaving out the length parameter, the range will go to the end
     * ** Use negative length to specify how many characters to omit, starting from the end of the string: substr("Hi, how are you?", 5, -3); result in: "ow are y"
     */

    /** CHARACTER ESCAPE
     * In PHP, an escape character is a backslash \ followed by the character you want to insert
     */
    ?>
</body>

</html>