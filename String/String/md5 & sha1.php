<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>md5 & sha1</title>
</head>
<body>
        <h1>md5 & sha1</h1>

        <?php

             // md5 function

             $str = "Sajeel ur Rehman";
             echo md5($str);

             echo "<br>";
             echo "<br>";

            // sha1 -  Calculate the SHA-1 hash of the string "hello"; SHA -> Secure Hash Algorithm

            $str = "n";
            echo sha1($str);

            echo "<br>";
            echo "<br>";

            echo strlen("d1854cae891ec7b29161ccaf79a24b00c274bdaa");
        
        ?>
</body>
</html>