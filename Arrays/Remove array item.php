<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove an array item</title>
</head>
<body>
        <h1>Remove array item</h1>
        <p>To remove an array item from an array, you can use array_splice function</p>

        <?php

            $colors = ["Brown","Black","Red","Yellow","Green","Blue","Grey"];
            array_splice($colors, 4, 6);
            print_r($colors);

            echo "<h3>Using the unset Function</h3>";

            $employee = ["Carl Hampton","Elizabeth","Mark","Luis","Trevor","Corrine", "Lee"];
            unset($employee[1]);
            print_r($employee);

        ?>
</body>
</html>