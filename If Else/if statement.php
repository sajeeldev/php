<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP If Statement</title>
</head>
<body>
        <h1>PHP Conditional Statements</h1>
        <?php
            echo "<h5>PHP If</h5>";
            
            $x = 25;

            if($x == 25){
                echo "Correct";
            }

            echo "<br>";
            echo "<br>";
            
            $x = 5;
            
            if($x < 10){
                $x++;
                echo $x;
            }
            
            echo "<br>";
            
            // More examples of If statement
            
            if(10 < 20){
                echo "The number 10 is smaller than 20";
            }
            
            echo "<br>";

            $z = 10;

            if($z > 0){
                echo "Have a nice Day";
            }
        ?>
</body>
</html>