<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - $_SERVER</title>
</head>
<body>
        <h1>PHP - $_SERVER</h1>

        <h3>$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations</h3>

        <?php

            echo "<h1>Example</h1>";
            echo "<h1>PHP_SELF</h1>";
            echo "<h3>Returns the file name of the current exexuting script</h3>";
            echo $_SERVER['PHP_SELF'];

            // << -------------------------------------------------  >>  //
            
            echo "<h1>SERVER_NAME</h1>";
            echo "<h3>Returns the name of the host server</h3>";
            echo $_SERVER['SERVER_NAME'];
            
            // << -------------------------------------------------  >>  //
            
            echo "<h1>HTTP_HOST</h1>";
            echo "<h3>Returns the host header from the current request</h3>";
            echo $_SERVER['HTTP_HOST'];
            
            // << -------------------------------------------------  >>  //
            
            echo "<h1>HTTP_REFERER</h1>";
            echo "<h3>Returns the complete url of the current page (not reliable because not all user-agents support it)</h3>";
            echo $_SERVER['HTTP_REFERER'];
            
            // << -------------------------------------------------  >>  //
            
            echo "<h1>SERVER_SOFTWARE</h1>";
            echo "<h3>Returns the server indentification string</h3>";
            echo $_SERVER['SERVER_SOFTWARE'];

            // << -------------------------------------------------  >>  //
            
            echo "<h1>SCRIPT_NAME</h1>";
            echo "<h3>Returns the name of the host server</h3>";
            echo $_SERVER['SCRIPT_NAME'];

            // << -------------------------------------------------  >>  //

            echo "<h1>SCRIPT_FILENAME</h1>";
            echo "<h3>Returns the absolute pathname of the current executing script</h3>";
            echo $_SERVER['SCRIPT_FILENAME'];

        ?>
</body>
</html>