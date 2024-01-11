<?php
    // update_handler

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {

        require_once("connect.php");

        $query = "UPDATE fooditem SET FoodName = ?,Calories = ?, Protein = ?, Carbohydrates = ?, Fats = ?, FoodDescription = ? WHERE ID =?";

        $statement = mysqli_prepare($con, $query);

        mysqli_stmt_bind_param($statement, "ssssssi", $fn, $c, $pr,$carbs, $fats, $des, $ID);
        
        $ID = $_POST["ID"];
        $fn = $_POST["FoodName"];
        $c = $_POST["Calories"];
        $pr = $_POST["Protein"];
        $carbs= $_POST[" Carbohydrates"];
        $fats= $_POST["Fats"];
        $des= $_POST["FoodDescription"];
        mysqli_stmt_execute($statement);
        // echo "Update was successful";
        header("Location: service.php");
        exit();
    
    }
?>