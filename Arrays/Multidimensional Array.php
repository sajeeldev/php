<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Array</title>
</head>
<body>
        <h1>Multidimensional Arrays</h1>

        <p>A multidimensional array is an array containing one or more arrays</p>


        <?php

            $car = [
                ["Cars", "In-stock", "Sold"],
                ["Camry", 18, 76],
                ["Accord", 22, 47],
                ["Ciaz", 52, 9 ],
            ];

            // echo $car[0][0] . " | " . $car[0][1] . " | " . $car[0][2] . "<br>";
            // echo $car[1][0] . " | " . $car[1][1] . " | " . $car[1][2] . "<br>";
            // echo $car[2][0] . " | " . $car[2][1] . " | " . $car[2][2] . "<br>";
            // echo $car[3][0] . " | " . $car[3][1] . " | " . $car[3][2] . "<br>";

            for($row = 0; $row < 4; $row++){
                echo $row  . "<br>" ;
                for($col = 0; $col < 3; $col++){
                    echo  $car[$row] [$col]  ;
                }
            }
        ?>
</body>
</html>