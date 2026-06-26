<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Plan</title>
</head>
<body>
  <form method="POST">
    <h2>Event Planning System</h2>
     <h3>Input:</h3>
    
    <label for="">Items Sold</label>
    <input type="number" name="items_sold" required>
    <br><br>
    <label for="">Number of</label>
    <input type="number" name="number_of"required>
    <br><br>
    <label for="">Target</label>
    <input type="number" name="target"required>
    <br>
    <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $items_sold = $_POST["items_sold"];
    $number_of = $_POST["number_of"];
    $target = $_POST["target"];
    
    $total_iteams_sold = $items_sold * $number_of;
    $performance = "";
    if($total_iteams_sold >=500){
      $performance = "Excellent";
    }else if($total_iteams_sold >= 300 && $total_iteams_sold < 500){
      $performance = "Good";
    }else if($total_iteams_sold >= 150 && $total_iteams_sold < 300){
      $performance = "Average";
    }else if($total_iteams_sold < 150){
      $performance = "Poor";
    }

    $result = "";
    $difference = 0;
    if($total_iteams_sold == $target){
      $result = "Target net exactly".$difference;
    }else if ($total_iteams_sold > $target){
      $difference = $total_iteams_sold - $target;
       $result = "Above target by ".$difference;
    }else if ($total_iteams_sold < $target){
      $difference = $target - $total_iteams_sold;
       $result = "Below target by ".$difference;
    }


echo"<h3>Output</h3>";
echo "Total Items: ".$total_iteams_sold. "<br>";
echo "Performance: ". $performance . "<br>";
echo "Result: ". $result;


}

?>