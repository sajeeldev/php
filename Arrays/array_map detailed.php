<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>
<body>
        <h1>Array map detailed practical</h1>
        <p>array_map function allows us to apply a callback function to transform each element of an array</p>

        <?php

            function lowercase($values){
                return strtolower($values);
            }

            $fruits = [ "Toyota", "BMW", "Audi", "Mercedes" ];
            
            print_r(array_map("lowercase", $fruits));

            //  ------------------------------------------   //

            // function totalSubject($sub){
            //     // ["English" == 35,
            //     // "Urdu" == 48,
            //     // "Math" == 31,
            //     // "Science" == 17];
            //     return array_pad($sub, 4, "Biology");
            // }

            // $subject = [ "English", "Urdu", "Math", "Science" ];
            // $res = array_map("totalSubject", $subject);
            // print_r($res);
            
        
        ?>
</body>
</html>