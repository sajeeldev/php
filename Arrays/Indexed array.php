<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Array</title>
</head>
<body>
        <h1>Indexed Array</h1>

        <?php
            
            echo "<p>Create and display indexed array </p>";
            // Create and display indexed array 
            
            $x = array("red","blue","black","pink","green");
            print_r($x);
            
            echo "<h3>Access Indexed Array</h3>";
            echo "<p>To access an indexed array you can refer to the index number</p>";
            
            $x = array("red","blue","black","pink","green");
            echo $x[2];
            
            echo "<h3>Change Value</h3>";
            echo "<p>To change the value of an array item, Use index number<p>";
            echo "<p>+<p>";
            echo "<p>Loop through an index array<p>";
            // loop through an index array
            
            $x = array("red","blue","black","pink","green");
            $y = $x[3] = "Orange";
            
            foreach($x as $y){
                echo $y . " | ";
            }
            
            echo "<h3>Add item using array_push function</h3>";
            $x = array("red","blue","black","pink","green");
            array_push($x , "Orange");
            foreach($x as $y){
                echo $y . " | ";
            }

            



        
        ?>
</body>
</html>