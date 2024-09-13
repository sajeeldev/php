<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If else - Statement</title>
</head>
<body>
        <h1>if else Statement</h1>

        <?php
            // if else statement 
            $time = date('H');
            
            if($time < 12){
                echo "Have a great day";
            }else {
                echo "Have a good night";
            }

            echo "<br>";

            // if elseif else statement

            $t = date("H");
            echo $t;
            echo "<br>";

            if($t < 12){
                echo "Have a great day"; 
            }elseif ($t < 7) {
                echo "Have a good morning";
            }else {
                echo "Have a good night";
            }
        ?>
</body>
</html>