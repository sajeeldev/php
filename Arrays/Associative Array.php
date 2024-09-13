<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
        <h1>Associative Array</h1>

        <p>Associative Arrays are arrays that use named keys to that you assign to them</p>

        <?php

            $car = ["Brand" => "Honda", "Model" => "Accord", "Year" => "2021"];
            print_r($car);
            
            echo "<h3>Access associative array</h3>";
            
            $phone = ["Brand" => "iPhone","Model" => "13 Pro max","Year" => "2021"];
            echo $phone["Model"];
            
            echo "<h3>Update/Change associative array</h3>";
            
            $car = ["Brand" => "Honda", "Model" => "Accord", "Year" => "2021"];
            $car["Year"] = 2020; // Case sensitive
            print_r($car);
            
            
            echo "<h3>Loop through an associative array</h3>";
            
            $phone = ["Brand" => "iPhone","Model" => "13 Pro max","Year" => "2021"];

            foreach($phone as $key => $value){
                echo "<b>$key</b>:  $value | &nbsp";
            }
            

            ?>
</body>
</html>