<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Most Used String Functions</title>
</head>
<body>
        <h1>Most Used String Functions in PHP</h1>

        <?php
        
        // 1 - str-replace - Replace the characters in the string specified in the parameters

        echo str_replace("Photographer","Programmer", "Hello, I am Sajeel, and I am a Photographer");

        echo "<br>";
        echo "<br>";

        // 2 - strlen - Return the length of the string

        echo strlen("This is string");

        echo "<br>";
        echo "<br>";


        // 3 - strpos - Find and return the position of the specified word in the parameter, occurred first in the string

        echo strpos("I am a programmer", "a");

        echo "<br>";
        echo "<br>";

        // 4 - Trim - Removes characters from both side of a string

        $str = "Hello World!";
        echo trim($str, "Hd!");

        echo "<br>";
        echo "<br>";

        // 5 - Chunk split 

        $arr = "This is a string split function";

        echo chunk_split($arr, 2);


        echo "<br>";
        echo "<br>";

        // strrev - Reverse the string

        echo strrev("Photographer");

        echo "<br>";
        echo "<br>";

        // chop() - Remove characters from the right end of the string;

        $str = "This is a string";
        echo chop($str, "string");

        echo "<br>";
        echo "<br>";

        // lcfirst - Convert the first character of the string into lowecase

        echo lcfirst("This will convert the first character of the string into lowercase");

        echo "<br>";
        echo "<br>";

        // explode - Break the string into an array - must have to specify a separator in the first parameter.

        $str = "This string will be converted to an array";
        print_r(explode(" ",$str));

        echo "<br>";
        echo "<br>";

        // implode() - This will convert the array into string - you can specify a separator in the first parameter, it's optional

        $arr = ["This", "is", "an", "array", "and", "will", "be", "converted", "to", "a", "string" ];
        echo implode(" " , $arr);

        echo "<br>";
        echo "<br>";

        // substr - Return the number of characters specified in the second paramter from the string

        $str = "Programming is not easy";

        echo substr($str, 11);

        echo "<br>";
        echo "<br>";

        // strtolower - Convert all the charaters to lowercase of the string

        $str = "ALL CHARACTERS ARE IN UPPERCASE";
        echo strtolower($str);

        echo "<br>";
        echo "<br>";

        // crc32 - Print the result of crc32 - this function calculates the 32-bit CRC (cyclic redundency checksum) for a string.

        $str = crc32("Hello World!");
        printf ("%u", $str);

        echo "<br>";
        echo "<br>";

        // strtoupper - Convert all characters in the string to uppercase

        $str = "all characters are in lowercase";
        echo strtoupper($str);

        echo "<br>";
        echo "<br>";

        //  convert_uudecode() - convert_uuencode()

        $str = "Hello world!";
        // Encode the string
        $encodeString = convert_uuencode($str);
        echo $encodeString . "<br>";

        // Decode the string
        $decodeString = convert_uudecode($encodeString);
        echo $decodeString;

        echo "<br>";
        echo "<br>";

        // count_chars() - return a string with all the different characters

        print_r(count_chars("SajeelurRehman", 4));

        echo "<br>";
        echo "<br>";

        // CHR - 

        echo chr(52) . "<br>";
        echo chr(052) . "<br>";
        echo chr(0x52) . "<br>";

        echo "<br>";
        echo "<br>";

        // join - Join array elements with a string:

        $arr = array("This", "is", "an", "array");

        echo join(" ",$arr);

        echo "<br>";
        echo "<br>";
        
        ?>
</body>
</html>