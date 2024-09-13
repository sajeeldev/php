<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$PHP - $_REQUEST</title>
</head>
<body>
        <h1>$_REQUEST</h1>

        <p>PHP $_REQUEST is a global variable which contains submitted form data, and all cookie data.</p>
        <p>In other words, $_REQUEST is an array containing data from $_GET, $_POST and $_COOKIE</p>

        <p>You can access this data with the $_REQUEST keyword followed by the name of the form field, or cookie</p>

        <!-- -------------------- -->
        
        <form method=" " action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" name= "fname" >
            <input type="submit">
        </form>

        </form>
        
        
        
        
        <!-- -------------------- -->

        <?php
             
             echo "<h2>Using request on $'_POST request</h2>";

             if($_SERVER ['REQUEST_METHOD'] == "POST")  {
                $name = htmlspecialchars($_REQUEST['fname']);
                if(empty($name)){
                    echo "Name is empty";
                } else {
                    echo $name;
                }
             }


             echo "<h4>Using GET method</h4>";
        ?>

        <!-- -------------------- -->
        
        <form method= "get" action="testingform.php">
            Name : <input type="text" name= "name"><br><br>
            
            Age : <input type="text" name="age"><br><br>
            
            <input type="submit">

        <!-- -------------------- -->

</body>
</html>