<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expression Patterns</title>
</head>
<body>
        <h1>Regular Expression Patterns</h1>
        <p>Brackets are used to find a range of characters</p>

        <?php

            echo "<p>find one or many of the characters inside the bracket</p>";
            
            $txt = "portfolio.com";
            $pattern = "/[co]/";
            
            echo preg_match_all($pattern, $txt);
            
            echo "<br>";
            echo "<br>";
            
            echo preg_replace($pattern, "#", $txt);
            
            ?>

        <?php
        
        echo "<p>Find any character NOT between the brackets</p>";

        $txt = "Welcome";
        $pattern = "/[^oe]/";

        echo preg_match_all($pattern, $txt);

        echo "<br>";
        echo "<br>";

        echo preg_replace($pattern, "u", $txt);

        ?>

        <p>How many letters are in the text "Welocome" are alphabetically between "e" and "o":</p>


        <?php
            $txt = "Welcome";
            $pattern = "/[e-o]/";

            echo preg_match_all($pattern, $txt);
            
            echo "<br>";
            echo "<br>";

            echo preg_replace($pattern, "t", $txt);
        ?>


        <p>How many letters are in the text are alphabetically between uppercase T and lowercase i:</p>

        <?php

            $txt = "Welcome to my portfolio";
            $pattern = "/[T-i]/";

            echo preg_match_all($pattern, $txt);

            echo "<br>";
            echo "<br>";
            
            echo preg_replace($pattern, "r", $txt);
        
        ?>

        <p>How many character are there in the text "W3Schools has been live since 1999" is either the number "1", "2", "3":</p>

        <?php

            $txt = "W3Schools has been live since 1999";
            $pattern = "/[123]/";

            echo preg_match_all($pattern, $txt);

            echo "<br>";
            echo "<br>";

            echo preg_replace($pattern, "#", $txt);
                    
        ?>

        <p>How many characters in the text "Call 555-2368" is a digit between 0 and 5</p>

        <?php

            $txt = "Call 555-2368";
            $pattern = "/[0-5]/";

            echo preg_match_all($pattern, $txt);

            echo "<br>";
            echo "<br>";

            echo preg_replace($pattern,"#", $txt);

        ?>

        <p>How many non-alphabetical and non-digit characters are in the text "W3Schools.com"?</p>

        <?php

            $txt = "W3Schools.com";
            $pattern = "/./";

            echo preg_match_all($pattern, $txt);

        ?>

        <p>How many occurances of 3 preceeding o's are in the text "cool loop"</p>

        <?php

            $txt = "cool loop";
            $pattern = "/o{2}/";

            echo preg_match_all($pattern, $txt);
        
        ?>



        <h1>Grouping</h1>

        <p>You can use parentheses () to apply quantifiers to entire patterns. They also can be used to select parts of the pattern to be used as a match.</p>

        <?php

            $str = "Apples and Bananas";
            $pattern = "/ba(na){2}/i";

            echo preg_match_all($pattern , $str);

        ?>

</body>
</html>