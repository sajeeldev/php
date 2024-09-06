<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Array Item</title>
</head>
<body>

        <h2>Add Array Item</h2>

        <?php

            $fruits = ['apple','mango','Orange','banana',];
            $fruits[] = "Coming Soon";
            echo "<pre>";
            Print_r($fruits);
            echo "</pre>";

            echo "<h3>Add Item in an associative array</h3>";

            $car = ["Brand"=>'Audi', 'Model' => 'A5','Year' => '2016'];
            $car["color"] = "Black";
            echo "<pre>";
            Print_r($car);
            echo "</pre>";

            echo "<h3>Add multiple items to an array</h3>";
            
            $colors = ["Red","Yellow","Black"];
            array_push($colors, "Blue", "Green", "Orange");
            echo "<pre>";
            Print_r($colors);
            echo "</pre>";
            
            echo "<h3>Add multiple items to associative array</h3>";


            $car = ["Brand"=>'Audi', 'Model' => 'A5','Year' => '2016'];
            $car +=["country" => "Japan"];
            echo "<pre>";
            Print_r($car);
            echo "</pre>";
            

        
        ?>
    
</body>
</html>