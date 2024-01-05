<?php
   require_once("connect.php");

   $fn = $_POST["FoodName"];
   $c = $_POST["Calories"];
   $pr = $_POST["Protein"];
   $carb = $_POST["Carbohydrates"];
   $fts= $_POST["Fats"];
   $des = $_POST["FoodDescription"];

   $query = "INSERT INTO fooditem (FoodName,Calories,Protein,Carbohydrates,Fats,FoodDescription)VALUES(?,?,?,?,?,?)";
    $statement=mysqli_prepare($con, $query);

    mysqli_stmt_bind_param($statement, "sssiii",$fn, $c, $pr,$carb, $fts, $des);

    mysqli_stmt_execute($statement);
    echo"data submitteted successfully";
?>