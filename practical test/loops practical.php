<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops practical</title>
</head>
<body>
        <h1>while loop</h1>

        <?php
            $x = 0;

            while($x <= 10){
                echo $x;
                $x++;
            }
        ?>

        <h1>do while loop</h1>

        <?php
            $x = 0;

            do{
                echo $x;
                $x++;
            }while($x < 10);
        ?>

        <h1>for loop</h1>

        <?php

            for($i = 0; $i < 10; $i++){
                echo $i;
            }
        
        ?>

        <h1>foreach loop</h1>

        <?php

            $Car = ['Toyota','Audi','BMW','Honda'];

            foreach($Car as $model){
                echo $model . " | ";
            }

            echo "<br>";
            echo "<br>";

            // foreach loop as key

            $cars = ['toyota' => 'Camry','Audi' => 'A6','Honda' => 'Civic rebirth','Toyota' => 'Supra',];

            foreach($cars as $key => $model){
                echo $model .  " | ";
            }
        ?>

            <h1>Break</h1>

            <?php

                // Break in for loop
            
                for($i = 0; $i < 10; $i++){
                    if ($i == 5) break;
                    echo $i;
                }

                echo "<br>";
                echo "<br>";

                // Break in while loop

                $x = 0;

                while($x < 10){
                    if($x == 5){
                        break;
                    }
                    echo $x;
                    $x++;
                }
            
            ?>
</body>
</html>