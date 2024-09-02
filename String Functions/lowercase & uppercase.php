<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>lowercase and uppercase</h1>
        <?php
            echo "<h1>strtolower</h1>";

            // strtolower - convert all characters to lower case

            $str1 = "THIS IS A STRING";
            echo strtolower( $str1 );

            echo "<h1>strtoupper</h1>";
            $str2 = "this is another string";
            echo strtoupper("$str2");
            
            echo "<h1>lcfirst - Lower case first character</h1>";
            
            $str3 = "Hello, This is Sajeel";
            echo lcfirst( $str3 );
            
            echo "<h1>ucfirst - Upper case first character</h1>";
            
            $str4 = "sajeel";
            echo ucfirst( $str4 );
            
            
            echo "<h1>ucwords - Upper case first character of each word in a string</h1>";
            $str5 = "hello, i am a backend developer";
            echo ucwords( $str5 );
        ?>
</body>
</html>