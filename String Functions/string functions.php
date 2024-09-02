<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>
<body>
    <?php
        // PHP string Functions 

        // #1 - addcslashes() - This function returns a string with backslashes in front of the specified character
        
        $str1 = addcslashes("Something new", "n");
        echo $str1;

        echo "<br>";
        echo "<br>";
        
        // #2 - addslashes() - This function returns a string with backslashes in front of the character
        
        $str2 = addslashes('Something "new"');
        echo $str2;

        echo "<br>";
        echo "<br>";

        // #3 - bin2hex() - Converts string of ASCII to hexa decimal values

        $str3 = bin2hex('alpha');
        echo $str3;

        echo "<br>";
        echo "<br>";

        // chop() - Removes whitespaces or other character from the right end of a string;

        $str4 = "alpha beta";
        echo ($str4). "<br>";
        echo chop($str4, 'a');

        echo "<br>";
        echo "<br>";

        // chr() - Returns a character from a specified ASCII value;

        $str5 = "Hello World!";
        echo chr(52);

        echo "<br>";
        echo "<br>";

        // chunk_split() - splits a string into smaller parts

        $str6 = "This is a coding hub";
        echo chunk_split($str6, '1');

        echo "<br>";
        echo "<br>";

        // convert_cyr_string() - Converts cyrillic character to another
        // This function is deprecated

        // convert_uudecode - decode uuencoded strings

        $str7 = "52&5L;&\@5&AI<R!I<R!386IE96P*";
        echo convert_uudecode($str7);

        echo "<br>";
        echo "<br>";

        // convert_uuencode() - Encodes a string using uuencode algorithm

        $str8 = "Hello, This is Sajeel";
        echo convert_uuencode($str8);

        echo "<br>";
        echo "<br>";

        // count_chars() - Returns information about characters in a string;
        echo "<h1>count_char()</h1>";
        $str9 = "Sajeel";
        echo count_chars($str9, 3);

        echo "<br>";
        echo "<br>";

        // crc32() - calculates a 32-bit CRC for a string

        $str10 = "Sajeel";
        echo crc32($str10);

        echo "<br>";
        echo "<br>";

        // crypt() - One-way string hashing

        $str11 = "Sajeel";
        echo crypt("9", $str11);

        echo "<br>";
        echo "<br>";

        // explode() - Breaks a string into an array - Syntax: explode(separator,string,limit)

        $str12 = "This is Sajeel";
        print_r(explode(" ",$str12));

        echo "<br>";
        echo "<br>";

        // fprintf() - write a formatted string to a specified output stream;

        // $str13 = "Hello, This is Sajeel, Welcome to the programming Hub";
        // fprintf();

        // html_entity_decode() - Converts HTML entity to characters

        $str13 = "&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;";
        echo html_entity_decode($str13);

        echo "<br>";
        echo "<br>";

        // implode() -  Returns a string from the elements of an array

        $arr = array('I', 'am', 'Sajeel', 'I', 'am', 'working', 'at', 'speedforce');
        echo implode(' ',$arr);

        echo "<br>";
        echo "<br>";

        // join() - Join an array

        $arr2 = array('I', 'am', 'Sajeel', 'and', 'I', 'am', 'a', 'developer');
        echo join(' ',$arr2);

        echo "<br>";
        echo "<br>";

        // metaphone(); Return a metaphone key of a string;

        $str14 = "Programmers";
        echo metaphone($str14);

        echo "<br>";
        echo "<br>";

        // similar_text() - Calculates the similarity between the characters in a string;

        $str15 = "Hello World!, This is Sajeel";
        $str16 = "Hello guys!, I am a junior developer";
        echo similar_text($str15, $str16);

        echo "<br>";
        echo "<br>";

        // str_repeat() - repeats a string a specified numbers of time;

        $str17 = "Hello World!, This is Sajeel";
        echo str_repeat('World!',10);

        echo "<br>";
        echo "<br>";

        // str_replace() - replace a some characters in a string

        $str18 = 'Hello World, I am going to launch me X-empire';
        echo str_replace($str18, 'World', "Elon");

        echo "<br>";
        echo "<br>";

        // str_shuffle(); - this will randomly shuffle all the character in a string;

        $str19 = 'Shuffle all these words randomly';
        echo str_shuffle($str19);

        echo "<br>";
        echo "<br>";

        // str_split() - Splits a string into an array

        $str20 = "This is a string and i will break this string throught str_split function";
        print_r(str_split($str20, 17));

        echo "<br>";
        echo "<br>";

        // str_word_count() - Count the number of words in a string

        $str21 = 'This is a string';
        echo str_word_count($str21);

        echo "<br>";
        echo "<br>";

        // strcasecmp() - it will compare two strings (case-sensitive)
        echo strcmp('This is String', 'This is String');



    ?>
</body>
</html>