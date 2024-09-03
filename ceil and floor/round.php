<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Round - Math Function</title>
</head>
<body>
        <h1>Round - Math Function</h1>

        <?php

            echo "<h4>PHP round function returns the rounded value of number to specified precision (the number after decimal point)</h4>";

            echo "<h3>Syntax - round(number,precision,mode)</h3>";

            echo "The result of 5.5 is: " . round(5.5);
            echo "<br>";

            echo "The result of 0.60 is: " . round(0.60);
            echo "<br>";

            echo "The result of 2.2 is: " . round(2.2);
            echo "<br>";

            echo "The result of 0.50 is: " . round(0.50);
            echo "<br>";

            echo "The result of 0.49 is: " . round(0.49);
            echo "<br>";

            echo "The result of 4.60 is: " . round(4.60);
            echo "<br>";

            echo "The result of -5.2 is: " . round(-5.5);
            echo "<br>";

            echo "The result of -5.9 is: " . round(-5.9);
            echo "<br>";

            echo "<h3>Syntax - round(number,precision)</h3>";

            echo "<h3>Round numbers to two decimals:</h3>";

            echo "The result of 4.732876 is: ". round(4.739876,2);
            echo "<br>";

            echo "The result of 7.015 is: ". round(7.015,2);
            echo "<br>";

            echo "The result of 4.055 is: ". round(4.055,2);
            echo "<br>";

            echo "<h1>Round number using constants</h1>";

            echo "<ul>
                    <li>PHP_ROUND_HALF_UP</>
                    <li>PHP_ROUND_HALF_DOWN</>
                    <li>PHP_ROUND_HALF_EVEN</>
                    <li>PHP_ROUND_HALF_ODD</>
                 </ul>";

            // ROUND NUMBER USING CONSTANTS

            echo round(4.785112,2,PHP_ROUND_HALF_UP);  

            // Explaination - We have 4.782712 to be rounded. the 2 number in second parameter specifies that 2(second) number after point to be rounded. The third parameter specifies whether it must be rounded half up or half down, even or odd. half means if the value next to the specified (8) value is equal to 5 or above 5, then it will round the specified value (8) to 9, means it will increase up integer by one. Otherwise the specified value remains same

            echo "<br>";

            echo round(4.785112,2,PHP_ROUND_HALF_UP);
            echo "<br>";

            echo round(4.785112,2,PHP_ROUND_HALF_DOWN);
            echo "<br>";
            
            echo round(1.6,0,PHP_ROUND_HALF_DOWN);
            echo "<br>";

            echo round(1.6,0,PHP_ROUND_HALF_UP);
            echo "<br>";

            echo round(4.785112,2,PHP_ROUND_HALF_EVEN);
            echo "<br>";
            
            
            echo round(4.785112,2,PHP_ROUND_HALF_ODD);
            echo "<br>";

            echo "<p>PHP_ROUND_HALF_UP</p>";
            echo "The result of 1.5 is: " . round(1.5,0,PHP_ROUND_HALF_UP);
            echo "<br>";
            
            echo "<p>PHP_ROUND_HALF_DOWN</p>";
            echo "The result of 1.5 is: " . round(1.5,0,PHP_ROUND_HALF_DOWN);
            echo "<br>";

            echo "<p>PHP_ROUND_HALF_EVEN</p>";
            echo "The result of 1.4 is: " . round(1.4,0,PHP_ROUND_HALF_EVEN);
            echo "<br>";

            echo "<p>PHP_ROUND_HALF_ODD</p>";
            echo "The result of 1.5 is: " . round(1.5,2,PHP_ROUND_HALF_UP);
            echo "<br>";


            ?>
</body>
</html>