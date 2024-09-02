<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>
</head>
<body>
    <h1>Data Types</h1>

    <ul>
        <li>String</li>
        <li>Integer</li>
        <li>Float</li>
        <li>Boolean</li>   <!--  also callled double -->
        <li>Array</li>
        <li>Object</li>
        <li>Null</li>
    </ul>

    <?php
        
        // var_dump() - function returns the data type and value

        // string - are characters like Hello World!

        echo "<h1>String</h1>";
        
        $a = "This is a String";
        echo var_dump( $a );
        
        // Integer - Integers are numbers 0 to 9 without decimal numbers
        
        echo "<h1>Integer</h1>";
        
        $b = 99;
        echo var_dump( $b );
        
        // Float - Float are numbers with points/decimal
        echo "<h1>Float</h1>";
        $c = 99.9;
        echo var_dump( $c );
        
        // Boolean - datatype represent only two possible states, True or False
        echo "<h1>Boolean</h1>";
        $d = true;
        
        // array - array store multiple values in single variable
        echo "<h1>Array</h1>";
        $arr = array(1, 'horses', 5, 'books', 1.5, 'litre milk');
        echo var_dump( $arr );
        

        // Object - Objects are instance of class
        echo "<h1>Object</h1>";
        
        class car {
            public $color;
            public $model;
            public function __construct($color, $model) {
                $this->color = $color;
                $this->model = $model;
            }
            public function __message(){
                return "my car is a " . $this->color ." ". $this->model ."!";
            }
        }

        $myCar = new car('black', 'bmw');
        print_r($myCar);


        echo "<h1>Object</h1>";
        // Null - Null value is a datatype that holds only null value;
        $x = null;
        var_dump($x);

    ?>

</body>
</html>