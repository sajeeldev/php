<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case - Statement</title>
</head>
<body>
        <h1>PHP Switch Case - Statement</h1>


        <?php

            $color = "orange";

            switch ($color) {
                case  "red";
                echo "The color is red";
                break;
                case "blue";
                echo "The color is blue";
                break;
                case "brown";
                echo "The color is brown";
                break;
                case "green";
                echo "The color is green";
                break;
                case "red";
                echo "The color is Red";
                break;
                default:
                echo "The color is neither red, brown, blue, nor green. It's orange";
            }

            echo "<h3>Commong Code blocks</h3>";

            echo "<p>If you want multiple cases to use same code of block, then you specify the cases like this</p>";

            $d = 5;

            switch ($d) {
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                    echo "This week feels so long";
                    break;
                case 6:
                case 0;
                    echo "Weekends are the best";
                    break;
                default;
                    echo "Something went wrong";
            }

        ?>
</body>
</html>