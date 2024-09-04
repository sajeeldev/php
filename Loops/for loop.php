<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>
<body>
        <h1>For Loop</h1>
        <p>The for loop - loops through a code for a specified number of times</p>
        <p>It is used when you know how many times the script should run</p>

        <?php

            for($x = 0; $x < 10; $x++){
                echo $x;
            } echo "<br>";

            // diff b/w the '<=' and only '<' 

            for ($x = 0; $x <= 10; $x++){
                echo $x;
            }

            echo "<h1>Break Statement</h1>";

            for($i = 0; $i <= 10; $i++){
                if ($i == 5) break;
                echo "The number is: $i " . "<br>";
            }

            echo "<h1>Continue Statement</h1>";

            for ($i = 0; $i <= 10; $i++){
                if ($i == 5) continue;
                echo $i . " ";
            }

            echo "<h1>Step 10</h1>";

            for ($i = 0; $i <= 100; $i+=10){
                echo $i . " " ;
            }


        ?>
</body>
</html>