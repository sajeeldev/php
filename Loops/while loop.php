<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While loop</title>
</head>
<body>

        <h1>While - loops through a block of code as long as the specified condition is true</h1>

        <?php
            $i = 0;

            while ($i < 5){
                echo $i;
                $i++;
            }
            // while loop does not run for a specific number of times, but checks after each iteration if the condition is true.
        ?>

        <h1>The break Statement</h1>
        <p>With the break statement we can stop the loop even if the condition is still true:</p>

        <?php
            $i = 1;
            while ($i < 10) {
                if ($i == 5) break; // stops loop when $i = 3
                echo $i; // print first
                $i++;   // then iterate
            }
        ?>

        <h1>The continue Statement</h1>
        <p>With the continue statement we can stop the current iteration, and continue with the next</p>


        <?php

            $x = 0;
            while($x < 10) {
                $x++;
                if ($x == 5) continue; // it will skip 5 and continue after 5 
                echo $x;
            }
        ?>

        <h1>Steps</h1>
        <p>Iteration in steps</p>
        <p>If you want the loop count to 100, but only by each 10, you can increase counter by 10 instead 1 in each iteration:</p>

        <?php
            $i = 0;
            while ($i < 100) {
                $i+= 10;
                echo $i . ", ";
            }
        ?>
    
</body>
</html>