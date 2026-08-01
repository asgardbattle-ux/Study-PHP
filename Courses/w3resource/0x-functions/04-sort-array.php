<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Array ;)</title>
</head>

<body>
    <?php
    $nums = array(51, 14, 1, 21, 156, 37, 'jh');

    function sortArray($arrToSort)
    {
        $sorted = [];
        print "<pre>";
        print_r($arrToSort);
        print "</pre>";

        foreach ($arrToSort as $value) {
            // If sorted arr empty, placing $value directly as first element and continue to the next $value
            if (count($sorted) === 0) {
                $sorted[] = $value;
                continue;
            }

            // Itterate newly formed sorted array
            $length = count($sorted);
            for ($i = 0; $i < $length; $i++) {
                if ($value >= $sorted[$i]) {
                    array_splice($sorted, $i, 0, $value);
                    break;
                }
            }

            // If $value is greater than the last array element add it as the new last
            if (count($sorted) === $length) {
                $sorted[] = $value;
            }
        }

        return $sorted;
    }

    $result = sortArray($nums);
    print "<pre>";
    print_r($result);
    print "</pre>";
    ?>
</body>

</html>