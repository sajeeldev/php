<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical</title>
</head>
<body>
        <h1>If statement</h1>

        <?php

            $x = 2;

            if($x < 10){
                echo "X is smaller than 10";
            }

            echo "<br>";
            echo "<br>";

            // comparison operators

            $x = 5;
            if($x == 5){
                echo "X is equal to 5";
            }

            echo "<br>";
            echo "<br>";

            $x = 5;
            if($x <= 5){
                echo "x is smaller than or equal to 5";
            }

            echo "<br>";
            echo "<br>";

            $x = 20;
            $y = 20;

            if($x === $y){
                $sum = $x + $y;
                echo "Sum of x + y is: " . $sum;
            }

            echo "<br>";
            echo "<br>";

            $x = 45;
            $y = "45";

            if($x !== $y){
                $sum = $x + $y;
                echo "Sum of x + y is: " . $sum;
            }

        ?>

        <h1>If else statement</h1>

        <?php

            $age = 20;

            if ($age > 18) {
                echo "You are an adult";
            }

            echo "<br>";
            echo "<br>";

            $date = date("H");

            // echo $date;
            

            if ($date < 12){
                echo "Have a great day";
            }else {
                echo "good evening";
            }


            echo "<h1>If else shorthand</h1>";

            // using ternary operator

            $today = "wednesday";

            echo $today == 'wednesday' ? 'today is wednesday' : 'today is not wednesday';

            echo "<br>";
            echo "<br>";

            // ternary operator example 2

            $date = date('d/m/y');

            echo $date;

            echo "<br>";
            echo "<br>";

            $todayDate = ($date == '04/09/24') ? 'correct' : 'not correct';

            echo $todayDate;

        ?>

        <h1>if elseif - statement</h1>

        <?php

            $day = "Tuesday";

            if($day == "Monday"){
                echo "Today is Monday";
            }elseif ($day == "Tuesday"){
                echo "Today is Tuesday";
            }elseif ($day = "Tednesday"){
                echo "Today is Tednesday";
            }elseif ($day == "Thursday"){
                echo "Today is Thursday";
            }elseif ($day == "Friday"){
                echo "Today is Friday";
            }elseif ($day == "Saturday"){
                echo "Today is Saturday";
            }elseif ($day == "Sunday"){
                echo "Today is Sunday";
            }else {
                echo "The day is not here";
            }

            echo "<br>";
            echo "<br>";


            // Nested if else

            $age = 21;

            if ($age > 18){
                echo "you are above 18 ";
            }if ($age == 70){
                echo "you are old";
            }elseif ($age <= 18){
                echo "you are a teenager";
            }else {
                echo '- but not above 50';
            }


            echo "<br>";
            echo "<br>";
        ?>


        <!-- Switch Case - conditional Statement -->

        <?php
            
            $colors = "Yellow";

            switch ($colors){
                case "red";
                echo "The color is Red";
                break;
                case "Yellow";
                echo "The color is Yellow";
                break;
                case "black";
                echo "The color is black";
                break;
                case "Pink";
                echo "The color is Pink";
                break;
                case "Brown";
                echo "The color is brown";
            }
                
        
        ?>


</body>
</html>