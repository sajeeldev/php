<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Arrays</title>
</head>
<body>
        <h1>PHP - Sort Functions For Arrays</h1>
        <ul>
            <li>sort() - sort arrays in ascending order</li>
            <li>rsort() - sort arrays in descending order</li>
            <li>asort() - sort arrays in ascending order, according to the value</li>
            <li>ksort() - sort arrays in ascending order, according to the key</li>
            <li>arsort() - sort arrays in descending order, according to the value</li>
            <li>krsort() - sort arrays in descending order, according to the key</li>
        </ul>

        <?php
            
            echo "<h3>sort() Function</h3>";
            
            // sort() function will sort the array in ascending order
            
            $colors = ["Red","Yellow","Black","Blue","Green"];
            sort($colors);
            print_r($colors);
            
            echo "<br>";
            echo "<br>";
            
            echo "<h3>rsort() Function</h3>";
            // rsort() sort the array in descending order

            $daysofweek = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
            rsort($daysofweek);
            $len = count($daysofweek);
            for($i = 0; $i < $len; $i++){
                echo $daysofweek[$i];
                echo "<br>";
            }


        
        ?>
</body>
</html>