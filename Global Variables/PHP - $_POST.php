<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - $_POST</title>
</head>
<body>
        <h1>PHP - $_POST</h1>

        <p>$_POST contains an array of variable received via HTTP POST method.</p>
        <p>There are two ways to send variables via the HTTP post method:</p>

        <ul>
            <li>HTML forms</li>
            <li>JavaScript HTTP requests</li>
        </ul>

        <h2>$_POST in HTML forms</h2>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            Name: <input type="text" name="Name">
            <input type="submit">
        </form>

        <?php

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $name = htmlspecialchars($_REQUEST["Name"]);
            } if (empty ($name) ){
                echo "Name is empty";
            } else {
                echo $name;
            }
        ?>
</body>
</html>