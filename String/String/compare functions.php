<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Compare Functions</title>
</head>
<body>
        <h1>PHP Compare Functions</h1>

        <ul>
            <li>strcmp</li>
            <li>strncmp</li>
            <li>strcasecmp</li>
            <li>strncasecmp</li>
            <li>strnatcmp</li>
            <li>strnatcasecmp</li>
            <li>substr_compare</li>
            <li>similar_text</li>
        </ul>

        <?php

            // 1 - strcmp - compare two strings (case-sensitive)
            echo strcmp("Hello World!", "Hello world!");
            
            echo "<br>";

            
            // 2 - strncmp - compare two strings (case-sensitive) - n means length - will compare only 5 char of string
            echo strncmp("Hello World!", "Hello world!", 5);

            echo "<br>";

            // 3 - strcasecmp - compare two strings (case-sensitive) compare the numbers of characters
            // this function is case-insensitive function
            echo strcasecmp("HELLO!", "hello!");

            echo "<br>";

            // 4 - strncasecmp - compare two strings - of the lenght defined char
            // the returned number are on the base of alphabetic order - if negative (-) means alphabets before 'H'
            echo strncasecmp("jello", "Hello", 1);

            echo "<br>";

            // strnatcmp - 

            echo strnatcmp("HellO", "Hello");

            echo "<br>";

            // strnatcasecmp - compare and return 1 or -1

            echo strnatcasecmp("kellO", "Hello");

            echo "<br>";

            // substr_compare - syntax substr_compare(string1, string2, start, length, case)

            echo substr_compare("Hello World", "Hello World",5);

            echo "<br>";

            // similar_text - 

            echo similar_text("Hello World", "Hiolo horld");



            


        ?>
</body>
</html>