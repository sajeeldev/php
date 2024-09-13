<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP Classes & Objects</title>
</head>
<body>
        <h1>PHP - OOP Classes & Objects</h1>

        <?php

            class subjects{
                public $name;
                public $marks;

                function set_name($name){
                    $this->name = $name;
                }
                function get_name(){
                    return $this->name;
                }

                function set_marks($marks){
                    $this->marks = $marks;
                }
                function get_marks(){
                    return $this->marks;
                }
            }

            $sub = new subjects();
            $sub->set_name('Physics');
            $sub->set_marks('45');
            echo "Subject Name: "  . $sub->get_name();
            echo "<br>";
            echo "Obtained Marks: "  . $sub->get_marks();
        
        ?>

        <h3>Outside the class</h3>

        <?php
        
            class Phone{
                public $name;
            }
            $mob = new Phone();
            $mob->name = "iPhone 16 Pro Max";
            echo $mob->name;
        
        ?>

</body>
</html>