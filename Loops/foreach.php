<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach loop</title>
</head>
<body>
        <h1>Foreach loop</h1>
        <p>foreach loop - loops through a block of code for each element in an array or each property in an object</p>

        <?php
            $colors = ['red','yellow','black','green','blue'];

            foreach ($colors as $value){
                echo $value . " / ";
            }

            echo "<br>";
            echo "<br>";

            echo "<h1>Foreach loops on Objects</h1>";

            $cars = [ 'Toyota' => 'Camry', 'Audi' => 'A5', 'BMW' => 'M5'];
            foreach ($cars as $key => $model){
                echo $model . ' / ';
            }

            echo "<h1>Foreach loops on Objects</h1>";

            class Car {
                public $color;
                public $model;
                public function __construct($color, $model) {
                    $this->color = $color;
                    $this->model = $model;
                }
            }

            $myCar = new Car ('red', 'lava');

            foreach ($myCar as $key => $value){
                echo "$key : $value <br> ";
            }
        ?>
</body>
</html>