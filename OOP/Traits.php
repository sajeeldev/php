<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP Traits</title>
</head>
<body>
        <h1>PHP OOP - Traits</h1>

        <p>PHP only support single inheritance: a child class can inherit only from a single parent</p>
        <p>So if, we need to inherit the multiple behaviour we use traits</p>
        <p>Traits are declared by the trait keyword</p>
        <p>To use the trait in a class "use" keyword</p>

        <?php

            // trait message1{
            //     public function msg1(){
            //         echo "OOP is fun";
            //     }
            // }

            // class welcome{
            //     use message1;
            // }

            // $msgobj = new welcome();
            // $msgobj->msg1();
        
        ?>

        <h3>Using Multiple Traits</h3>

        <?php

            trait message1 {
                public function msg1(){
                    echo "OOP is fun!";
                }
            }

            trait message2 {
                public function msg2(){
                    echo "OOP reduces code duplication";
                }
            }

            class welcome {
                use message1;
            }

            class welcome2 {
                use message1, message2;
            }

            $obj1 = new welcome();
            $obj1->msg1();

            echo "<br>";

            $obj2 = new welcome2();
            $obj2->msg1();
            $obj2->msg2();

        
        ?>

</body>
</html>