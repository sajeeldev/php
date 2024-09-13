<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP chr & ord Function</title>
</head>
<body>
        <h1>PHP chr & ord Function</h1>

        <?php
        
            // chr - This function returns characters from different ASCII values   

            // convert ASCII to character
            
            echo chr(83);
            echo chr(65);
            echo chr(74);
            echo chr(69);
            echo chr(69);
            echo chr(76);   

            echo "<br>";
            echo "<br>";

            // ord - Function return the ASCII value of characters
            // convert  character to ASCII value

            echo ord("S");
            echo ord("A");
            echo ord("J");
            echo ord("E");
            echo ord("E");
            echo ord("L");

            

        ?>
</body>
</html>