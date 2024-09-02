<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operators</title>
    <style>
        body {
            margin: 50px;

        }
    </style>
</head>
<body>
        <h1>PHP Operators</h1>
        <p>Operators are use to perform operations on variables and values</p>
        <ul>
            <li>Arithmetic Operators</li>
            <li>Assignment Operators</li>
            <li>Comparison Operators</li>
            <li>Increment/Decremnent Operators</li>
            <li>Logical Operators</li>
            <li>String Operators</li>
            <li>Array Operators</li>
            <li>Conditional assignment Operators</li>
        </ul>
        <?php
            echo "<h1>Arithmetic Operators</h1>";
            
            echo "<h3>Addition (+)</h3>";
            echo "<h3>Subraction (-)</h3>";
            echo "<h3>Multiplication (*)</h3>";
            echo "<h3>Division (/)</h3>";
            echo "<h3>Modulus (%)</h3>";
            echo "<h3>Exponentiation (**)</h3>";

            echo "<h1>Addition</h1>";
            // give the sum of two numeric values
            $x = 10;
            $y = 20;
            echo "The sum of 10 + 20 is: " . $sum = $x + $y;

            echo "<h1>Subtraction</h1>";
            // give the difference of two numeric values
            $x = 10;
            $y = 20;
            echo "The difference of 10 - 20 is: " . $sum = $x - $y;

            echo "<h1>Multiplication</h1>";
            // give the product of two numeric values
            $x = 10;
            $y = 20;
            echo "The product of 10 * 20 is: " . $sum = $x * $y;

            echo "<h1>Division</h1>";
            // give the quotient of two numeric values
            $x = 10;
            $y = 20;
            echo "The quotient of 10 / 20 is: " . $sum = $x / $y;

            echo "<h1>Modulus</h1>";
            // give the remainder of two numeric values
            $x = 10;
            $y = 20;
            echo "The remainder of 10 % 20 is: " . $sum = $x % $y;

            echo "<h1>Exponentiation</h1>";
            // calculate the result of x exponent y
            $x = 10;
            $y = 20;
            echo "The exponent of 10 - 20 is: " . $sum = $x - $y;


            echo "<h1>Assignment Operators</h1>";
            echo "<p>The basic assignment operator in php is '=', It means that the left operand gets set to the value of the expression on the right.</p>";

            echo "<h4>x = y - left operand gets set the value of y</h4>";
            echo "<h4>x += y - Addition</h4>";
            echo "<h4>x -= y - Subtraction</h4>";
            echo "<h4>x *= y - Multiplication</h4>";
            echo "<h4>x /= y - Division</h4>";
            echo "<h4>x %= y - Modulus</h4>";


            echo "<h1>Comparison Operators</h1>";
            echo "<h4>== | Equal to | Returns true if x is equal to y</h4>";
            echo "<h4>!= | Not Equal to | Returns true if x is not equal to y</h4>";
            echo "<h4>=== | Identical | Returns true if x is equal to y and they are of same type</h4>";
            echo "<h4>!== | Not Identical | Returns true if x is not equal to y and they are not of same type</h4>";
            echo "<h4>< | Less than | Returns true if x is less than y</h4>";
            echo "<h4>> | Greater than | Returns true if x is greater than y</h4>";
            echo "<h4><= | Less than or Equal to | Returns true if x is less than or equal to y</h4>";
            echo "<h4>>= | Greater than or Equal to | Returns true if x is greater than or equal to y</h4>";
            echo "<h4><=> | Spaceship | Returns true | Returns an integer if x is less than, equal to or greater than y</h4>";

            echo "<h1>Example of spaceship</h1>";

            $x = 250;
            $y = 50;

            echo ($x <=> $y);

            // <-- Increment/ Decrement Operators --> 

            echo "<h1>Increment/Decrement Operators</h1>";
            
            echo "<h3>post-increment</h3>";
            $x = 20;
            echo $x++;

            echo "<h3>pre-increment</h3>";
            $x = 20;
            echo ++$x;

            echo "<h1>Post-decrement</h1>";
            $x = 20;
            echo $x--;

            echo "<h1>Pre-decrement</h1>";
            $x = 20;
            echo --$x;

            // <-- Logical Operators --> //

            echo "<h1>Logical Operators</h1>";

            echo "<h3>and | And operator</h3>";
            echo "<h3>or | Or operator</h3>";
            echo "<h3>xor | Xor operator</h3>";
            echo "<h3>! | Not operator</h3>";

            // and operator - True if both $x and $y are true

            $x = 50;
            $y = 35;

            if ($x == 50 and $y = 35){
                echo 'True';
            }

            echo "<br>";

            // or operator - True if either one is true

            $x = 'apple';
            $y = 'orange';

            if ($x == 'apple' or $y = 'apple') {
                echo 'True';
            }

            echo "<br>";

            // xor operator - True if either one is true, but not both

            $a = 'day';
            $b = 'night';

            if ($a == 'day' xor $b == 'night') {
                echo 'True';
            }else{
                echo 'Not True';
            }

            echo "<br>";
            echo "<br>";

            // ! - not operator | True if $x is not true

            $x = 90;
            
            if (!($x == 90)){
                echo 'True';
            }else {
                echo 'Not True';
            }

            // <-- String Operator -->

            echo "<h1>String Concatenation</h1>";
            
            $n = 20;
            $m = 3;
            echo $n.$m;
            
            
            echo "<h1>String Concatenation assignment</h1>";

            $x = 50;
            $y = 7;
            $x.=$y;
            echo $x;


            echo "<h1>Array Operators</h1>";

            // php array operators are used to compare arrays

            echo "<h3>+   | union operator</h3>";
            echo "<h3>==  | Equality operator</h3>";
            echo "<h3>=== | Indentity operator</h3>";
            echo "<h3>!=  | Inequality operator</h3>";
            echo "<h3>!== | Non-Identity operator</h3>";

            // union operator

            $x = 5;
            $y = 6;
            echo ($x + $y);
            
            echo "<br>";
            echo "<br>";
            // union of array using union operator

            $arr1 = ['apple','orange','banana','guava',]; 
            $arr2 = ['black','white','green','red',];

            print_r($arr1 + $arr2);

            echo "<br>";
            echo "<br>";
            

            // Equality operator 
            $arr3 = ['one','two','three','four',];
            $arr4 = ['one','two','three','four',];

            var_dump($arr3 == $arr4);

            echo "<br>";
            echo "<br>";

            // Identity operator ===

            $arr5 = ['a', 'b', 'c'];
            $arr6 = ['a', 'b', 'c'];

            var_dump($arr5 === $arr6);

            echo "<br>";
            echo "<br>";

            // Inequality != returns true if $x is not equal to $y

            $x = [25, 26, 27];
            $y = [25, 26, 27];

            var_dump($x != $y);

            echo "<br>";
            echo "<br>";

            // Non-indentity - return true if $x is not indentical to $y

            $x = [25, 26, 29];
            $y = [25, 26, 29];

            var_dump($x !== $y);


            echo "<h1>Conditional Assignment Operators</h1>";
            echo "<h3>Ternary Operator</h3>";

            $x = 20; 
            $y = 30; 
            
            echo ($y < $x) ? "True" : "False";

            $x = "string";
            $y = 70;

            echo "<br>";

            $a = "100";
            $b = 50;
            

            // + operator automatically converts string into integers
            $z = $a + $b;
            echo $z;


            echo "<br>";
            echo "<br>";
            echo "<br>";

            echo ($b > $a) ? "True": "False";

            echo "<br>";
            echo "<br>";

            if($a > $b){
                echo 'a is greater than b';
            }


        ?>
</body>
</html>