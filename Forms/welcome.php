<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <style>
        div {
            margin: 30px;
            padding: 30px;
        }
    </style>
    
</head>
<body>
        <div>
        <b>Welcome: </b> <?php  echo $_POST["name"] ?> <br><br>
        <b>Your email address is: </b><?php  echo $_POST["email"] ?>
        </div>

</body>
</html>