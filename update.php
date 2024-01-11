<?php
require_once ("connect.php" );



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row" style="border:6px solid #7aaf4c; background-color: #4CAF50;">
      <?php 
        include("nav2.php")
      ?>  
    </div>
    <?php
    if(isset($_GET['id'])){
      $id = ($_GET['id']);
      echo $id;

      $query = "SELECT * FROM fooditem WHERE ID = ?";
      $stmt = mysqli_prepare($con, $query);
      mysqli_stmt_bind_param($stmt, "i", $id);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $data = mysqli_fetch_assoc($result);

      if($data){
        
    ?>
    
    <div class="row mt-3" style="background-color: #B0E0B2; border 4px solid  #4CAF50; padding:10px;">
      <div class="col-md-6 offset-md-3 border rounded p-4 bg-light">
      
        <form action="proccess-update.php" method="POST" style="background-color: #B0E0B2;">
          <input type="hidden" name="ID" value="<?php echo $data['ID']; ?>">
            <div class="form-group">
            <label for="food_name">Food Name:</label>
            <input type="text" name="FoodName" class="form-control" required value="<?php echo $data['FoodName'];?>">
          </div>

          <div class="form-group">
            <label for="calories">Calories:</label>
            <input type="text" id="Calories" name="Calories" class="form-control" required  value="<?php  echo $data['Calories'];?>">
          </div>

          <div class="form-group">
            <label for="Protein">Protein (g):</label>
            <input type="text" id="Protein" name="Protein" class="form-control" required  value="<?php echo $data['Protein'];?>">
          </div>

          <div class="form-group">
            <label for="Carbohydrates">Carbohydrates (g):</label>
            <input type="text" id="Carbohydrates" name="Carbohydrates" class="form-control" required  value="<?php echo $data['Carbohydrates'];?>">
          </div>

          <div class="form-group">
            <label for="fat">Fats (g):</label>
            <input type="text" id="Fats" name="Fats" class="form-control" required  value="<?php echo $data['Fats']; ?>">
          </div>
          <div class="form-group">
            <label for="descreption">Descreption</label>
            <input type="text" id="Descreption" name="FoodDescription" class="form-control" required  value="<?php echo $data ['FoodDescription']; ?>">
            
          </div>
          <center><button type="submit" class="btn btn-success">update</button></center>
        </form>
      </div>
      
      <?php
      }

      else{
      echo "No Data Found";
      }

      }
      else{
        echo "ID not found";
        }
      ?>
    </div>
    </div>
      <?php include("footer.php"); ?>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="bootstrap.min.js"></script> 
</body>
</html>
