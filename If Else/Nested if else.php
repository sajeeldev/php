<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested If else - statement</title>
</head>
<body>
        <h1>Nested if else -statement</h1>

        <?php
            $age = 20;

            if($age > 18){
                echo "you are an adult";
            }if($age == 18){
                echo "you just got adult";
            }elseif ($age < 18){
                echo "you are a teenager";
            } elseif ($age < 13) {
                echo "You are a child";
            } else {
                echo " age is $age";
            }
        ?>
</body>
</html>