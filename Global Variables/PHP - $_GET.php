<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Superglobal - $_GET</title>
</head>
<body>
        <h1>PHP Superglobal - $_GET</h1>

        <form action="PHP - $_GET.php" method="get">
            Name: <input type="text" name="Name">
            Email: <input type="text" name="email">
            <input type="submit">
        </form>

        Welcome <?php echo $_GET["Name"];?>
        Your email address is: <?php echo $_GET["email"]?>
</body>
</html>