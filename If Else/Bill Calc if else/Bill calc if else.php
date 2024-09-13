<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Electricity Bill Calculator</title>
</head>
<body>
        <h1>Electricity Bill Calculator - Using if else</h1>


        <?php

        $unit = 330;
        
        $price1 = 3.50;
        $price2 = 4.00;
        $price3 = 5.20;
        $price4 = 6.50;


        if($unit <= 50 && $unit < 100){
           $result = $unit * $price1;
           echo $result;
        }elseif ($unit <= 100 && $unit > 50){
            $result = $unit * $price2;
            echo $result;
        }elseif ($unit <= 200 && $unit > 100){
            $result = $unit * $price3;
            echo $result;
        }else {
            $result = $unit * $price4;
            echo $result;
        }
        
        
        ?>
</body>
</html>