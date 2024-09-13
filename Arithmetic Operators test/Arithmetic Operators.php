<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operators - Test</title>
</head>
<body>
    <h1>Arithmetic Operators - Test</h1>
    <?php

        // Addition
        $x = 10;
        $y = 20;
        $z = $x + $y;
        echo "The sum of 10 + 20 is: " . $z . "<br>";

        // Casting int to string, float, boolean, array, object, --> Null = Can't cast to Null because unset cast is deprecated.
        // $z = (array) $z;   Can't cast integer to array, 
        // var_dump($z);
        // echo "<br>";
        // $z = (object) $z; Can't cast integer to object;
        // var_dump($z);
        // echo "<br>";
        $z = (string) $z;
        var_dump($z);
        echo "<br>";
        $z = (float) $z;
        var_dump($z);
        echo "<br>";
        $z = (bool) $z;
        var_dump($z);
        echo "<br>";

        echo "<br>";
        echo "<br>";

        // Subtraction
        $a = 45;
        $b = 30;
        $c = $a - $b;
        echo "The difference of 45 - 30 is: " . $c;

        echo "<br>";

        // Casting int to string, float, boolean, array, object, --> Null = Can't cast to Null because unset cast is deprecated.
        // $c = (array) $c;  Can't cast int to array, 
        // var_dump($c);
        // echo "<br>";
        $c = (string) $c;
        var_dump($c);
        echo "<br>";
        $c = (float) $c;
        var_dump($c);
        echo "<br>";
        $c = (bool) $c;
        var_dump($c);
        echo "<br>";
        // $c = (object) $c;
        // var_dump($c);
        // echo "<br>";

        echo "<br>";
        echo "<br>";

        // Multiplication
        $pd1 = 5;
        $pd2 = 5;
        $product = $pd1 * $pd2;
        echo "The product of 5 x 5 is: " . $product;

        echo "<br>";

        $product = (string) $product;
        var_dump($product);
        echo "<br>";
        $product = (float) $product;
        var_dump($product);
        echo "<br>";
        $product = (bool) $product;
        var_dump($product);
        echo "<br>";
        // $product = (object) $product;
        // var_dump($product);
        // echo "<br>";

        echo "<br>";
        echo "<br>";

        // division
        $int1 = 49;
        $int2 = 7;
        $result = $int1 / $int2;
        echo "The result of 49 / 7 is: ". $result;

        echo "<br>";

        $result = (string) $result;
        var_dump($result);
        echo "<br>";
        $result = (float) $result;
        var_dump($result);
        echo "<br>";
        $result = (bool) $result;
        var_dump($result);
        echo "<br>";

        echo "<br>";
        echo "<br>";
    ?>
</body>
</html>