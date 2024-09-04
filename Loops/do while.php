<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do while loop</title>
</head>
<body>
        <h1>PHP Do while Loop</h1>
        <p>The "do while" loop always execute the block of code at least once, and then it will check the condition, and repeats the loop as long as the specified condition is true.</p>

        <?php
            $i = 0;

            do{
                echo $i;
                $i++;
            }while($i < 10);
            echo "<br>";

            // what if we set $i to 8 before executing the code 

            $i = 8;

            do{
                echo $i;
                $i++;
            } while($i < 5);

            echo "<p>Break Statement</p>";

            $i = 1;

            do{
                if($i == 4) break;
                echo $i;
                $i++;
            } while ($i < 10);

            echo "<p>Continue Statement</p>";

            $i = 0;

            do{
                $i++;
                if($i == 5) continue;
                echo $i;
            } while($i < 10);
        ?>

        
</body>
</html>