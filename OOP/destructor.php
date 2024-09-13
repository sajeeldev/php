<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP Destructor</title>
</head>
<body>
        <h1>PHP - The __destruct Function</h1>

        <?php
        
            class car{
                public $name;
                public $model;

                function __construct($name,$model){
                    $this->name = $name;
                    $this->model = $model;
                }

                function __destruct(){
                    echo "The name of the car is: ". $this->name;
                    echo "<br>";
                    echo "The mdel of the car is: " . $this->model;
                }
            }
            $obj = new car("BMW","Black");
        
        ?>

</body>
</html>