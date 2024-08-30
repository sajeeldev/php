<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <style>
        body{
            margin: 50px;
            line-height: 30px;
        }
    </style>
</head>
    <h1>PHP Functions</h1>

    <?php
        
        
        //Function:  Function is a block of statement that is used repeatedly in a program.

        // User-defined function - A function usually defined by the user. Starts with the keyword function, followed by the name of the function

        function myMessage($value) {
            echo "This is new ". $value . "</br>";
        }

        myMessage("message");

        echo "<br>";

        // Function Arguments - Arguments are specified after the function name, inside parantheses, we can pass many arguments as we want
        
        function familyCast($names) {
            echo "$names  Stark <br>";
        }

        familyCast("Eddard");
        familyCast("Bran");
        familyCast("Sansa");
        familyCast("Arya");
        familyCast("Rickon");

        echo "<br>";
        
        // Default argument value - Example 

        function setHeight($minheight = 50) {
            echo "The height is". " ".$minheight. "<br>";
        }
        
        setHeight(350);
        setHeight(18);
        setHeight();
        setHeight(21);

        echo "<br>";

        // Argument by reference - arguments are usually passed using value, which means that a copy of value is used in the function. The variable that was passed into the function cannot be changed

        function myCars(&$names) {
            $names .= "This is my old car <br>";
        }

        $newcar = "This is my new car";
        myCars($newcar);
        echo $newcar;

        echo "<br>";

        // other example of passing an argument by reference - example 2

        function increment(&$num){
            $num++;
        }

        $n = 19;
        increment($n);
        echo $n;

        echo "<br>";
        echo "<br>";


        // example 3 - passing arguments by reference. adding two numbers

        function sum(&$num){
            $num += 5;
        }

        $n = 10;
        sum($n);
        echo $n;

        echo "<br>";
        echo "<br>";


        //  30/08/2024 Functions with returning value - example 1

        function laptopModel($model){
            return $model;
        }
        
        $result = laptopModel("HP - ProBook G650");
        echo $result;


        echo "<br>";
        echo "<br>";

        // Functions with returning value - example 2

        function division($x, $y){
            $z = $x / $y;
            return $z;
        }

        $result = division(150, 5);
        echo "The result of 150 / 5 is: " . $result;

        echo "<br>";
        echo "<br>";

        // Be careful about using "do this thing or die()" logic in your return lines.  It doesn't work as you'd expect:

        function myfunc1() {
            return('thingy' or die('otherthingy'));
        }
        function myfunc2() {
            return 'thingy' or die('otherthingy');
        }
        function myfunc3() {
            return('thingy') or die('otherthingy');
        }
        function myfunc4() {
            return 'thingy' or 'otherthingy';
        }
        function myfunc5() {
            $x = 'thingy' or 'otherthingy'; return $x;
        }
        echo myfunc1(). "\n". myfunc2(). "\n". myfunc3(). "\n". myfunc4(). "\n". myfunc5(). "\n";

        echo "<br>";
        echo "<br>";

        // variable functions - We can call a function by using variable. For example

        function storage(){
            echo "This is my data";
        }

        $data = 'storage';
        $data();

        echo "<br>";
        echo "<br>";

        function test($argu = ''){
            echo "In test() the argument was $argu";
        }

        $var = 'test';
        $var('argu');

        echo "<br>";
        echo "<br>";

        // Variable number of arguments - By using ... operator in function parameter, the function accepts an unknown number of arguments. This is also know as variadic function.
        
        function sumMyNumbers(...$x){
            $n = 0;
            $len = count($x);
            for ($i = 0; $i < $len; $i++) {
                $n += $x[$i];
            }
            return $n;
        }

        $result = sumMyNumbers(4, 8, 2, 9, 6, 8);
        echo $result;

        echo "<br>";
        echo "<br>";

        // simple example - 
        function passing(...$new){
            return $new;
        }

        $result = passing(2, 3, 4, 5, 6, 7, 8);
        print_r($result);

        echo "<br>";
        echo "<br>";


        // example 1 practise

        function addinNumbers( ...$num){
            $n = 0;
            for ($i = 0; $i < count($num); $i++){
                $n += $num[$i];
            }
            return $n;
        }

        $result = addinNumbers(10,5,5,25,15);
        echo $result;


        echo "<br>";
        echo "<br>";

        // practise example 1 using multiplication - Variable numbers of arguments

        function multiplyNumbers(...$cross){
            $m = 1;
            $ttn = count($cross);
            for($i = 0; $i < $ttn; $i++){
                $m *= $cross[$i];
            }
            return $m;
        }

        $result = multiplyNumbers(10,5,5,15);
        echo "The result of 10 X 5 X 5 X 15 is = " .  $result;

        echo "<br>";
        echo "<br>";


        // The variadic argument must be last argument:

        function myFamily($lastname, ...$firstname){
            $txt = '';
            $length = count($firstname);
            for($i = 0; $i < $length; $i++){
                $txt = $txt. "Hi, $firstname[$i] $lastname.<br>";
            }
            return $txt;
        }

        $result = myFamily('Garry', 'James', 'Hampton', 'Lee', 'Watson');
        echo $result;


    ?>
</body>
</html>