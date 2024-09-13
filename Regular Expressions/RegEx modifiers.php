<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expression Modifiers</title>
</head>
<body>
        <h1>Regular Expression Modifiers</h1>

        <p>Modifiers can change how a search is performed</p>

        <?php

            $txt = "you are better than you think";
            $pattern = "/you/m";
            echo preg_match_all($pattern, $txt);

            echo "<br>";
            echo "<br>";    

            echo preg_replace($pattern, "Who", $txt);
        
        ?>
</body>
</html>