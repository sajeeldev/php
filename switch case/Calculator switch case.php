<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Calculator Program in php</title>
</head>

<body>
  <h1>Simple Calculator program in PHP using switch case</h1>
  <div id="page-wrap">
	<h1>PHP - Simple Calculator Program</h1>
	  

    <?php

$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';

        // $first_num = 10;
        // echo $first_num . " ";
        // $operator = " + ";
        // echo $operator;
        // $second_num = 30;
        // echo $second_num . " = " ;

        switch ($operator){
          case " + ";
          $result = $first_num + $second_num;
          // echo $result;
          break;
          case " - ";
          $result = $first_num - $second_num;
          // echo $result;
          break;
          case " x ";
          $result = $first_num * $second_num;
          // echo $result;
          break;
          case " / ";
          $result = $first_num * $second_num;
          // echo $result;
          break;
        }

    ?>

<form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
	  </form>


</body>

</html>