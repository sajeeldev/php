<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Access Modifiers</title>
</head>
<body>
        <h1>PHP - Access Modifiers</h1>
        <h3>Properties and Methods can have access modifiers which control where they can be accessed</h3>

        <h3>There are three access modifiers</h3>

        <ul>
            <li>Public - the property or method that can be accessed from everywhere</li>
            <li>Protected - the property or method that can be accessed within the class or the classes derived from that class.</li>
            <li>Private - the property or method that can only be accessed within the class</li>
        </ul>

        <?php

            class fruit{
                public $name;
                protected $color;
                private $weight;

            }

            $obj = new fruit();
            echo $obj->name = 'mango';
            echo $obj->color = "yellow";
            echo $obj->weight = "500g";
        
        ?>
</body>
</html>