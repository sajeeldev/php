<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expression</title>
</head>
<body>
        <h1>Regular Expression</h1>

        <h3>What is Regular Expression?</h3>
        <p>A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for.</p>
        <p>Regular expression can be used to perform all types of search and text replace operations</p>

        <h4>In PHP, regular expression are strings composed of delimiters, a pattern and optional modifiers.</h4>

        <h2>Regular Expression Functions</h2>
        <p>preg_match - Returns 1 if the value was found in the string and 0 if not</p>
        <p>preg_match_all - Returns the number of times the pattern was found in the string, which may also be 0</p>
        <p>preg_replace - Returns a new string where matched patterns have been replaced with another string</p>

        <h1>Using preg_match()</h1>
        <p></p>

        <?php
            // Use a regular expression to do a case-insensitive search for portfolio in a string.
            $str = "Visit my Portfolio";
            $pattern = "/portfolio/i";
            echo preg_match($pattern, $str);

            echo "<h1>Using preg_match_all()</h1>";
            echo "<p>The preg_match_all() function will tell you how many matches were found for a pattern in a string</p>";
            
            // use preg_match_all regular expression to do a case-insensitive count of the number of occurrences of characters in a string
            
            $str = "The rain in SPAIN maily falls on the plain";
            $pattern = "/a/i";
            echo preg_match_all($pattern, $str);
            
            
            echo "<h1>Using preg_replace()</h1>";
            echo "<p>The preg_replace function will replace all the matches of the pattern in a string with another string.</p>";

            $str = "I am a Photographer";
            $pattern = "/Photographer/i";
            echo preg_replace($pattern, "Programmer.", "$str");




        ?>
</body>
</html>