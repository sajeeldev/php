<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting</title>
</head>
<body>
        <h1>Casting</h1>
        <p>Casting is used, Sometimes you need to change a variable from one data type to another data type, Sometimes you want a variable to have a specific data type. This can be done with casting.</p>

        <ul>
            <li>(string) - Converts to data type String</li>
            <li>(int) - Converts to data type Integer</li>
            <li>(float) - Converts to data type Float</li>
            <li>(bool) - Converts to data type Boolean</li>
            <li>(array) - Converts to data type Array</li>
            <li>(object) - Converts to data type Object</li>
            <li>(unset) - Converts to data type Null</li>
        </ul>

        <?php
            // (string) - Converts data type to string


            $a = 1; // integer
            $b = 2.0; // float
            $c = false; // boolean
            $e = Null;  // null
            $f = "string"; // String

            $a = (string) $a;
            $b = (string) $b;
            $c = (string) $c;
            $e = (string) $e;
            $f = (string) $f;


            var_dump($a);
            var_dump($b);
            var_dump($c);
            var_dump($e);
            var_dump($f);


            echo "<br>";
            echo "<br>";


            // Converting the data type of object to array

            class myCar {
                public $color;
                public $model;
                public function __construct($color, $model){
                    $this->color = $color;
                    $this->model = $model;
                }
                public function message(){
                    return "The color of my Car is: ". $this->color . 'and model is'. $this->model;
                }
            }

            $newCar = new myCar('Black', 'Mercedes');
            // echo "<pre>";
            // print_r($newCar);
            // echo "</pre>";
            $newCar = (array) $newCar;
            var_dump($newCar);

        ?>
</body>
</html>