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
  <div class="row" style="border:6px solid #7aaf4c; background-color: #4CAF50;">
    <?php 
      include("nav2.php")
    ?>  
  </div><?
  if(isset($_GET['id'])){
    $id = ($_GET['id']);
}
$query = "SELECT * FROM fooditem WHERE id = ?";
$stmt = mysqli_prepare($con, $query);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($result);
if ($data){?>
  <form action="">
          <div class="form-group">
            <label for="ID">ID:</label>
            <input type="hidden"  name="ID" class="form-control" required value="<?php echo $data['ID'] ;?>">
          </div>

  
          <div class="form-group">
            <label for="food_name">Food Name:</label>
            <input type="hidden" name="FoodName" class="form-control" required value="<?php echo $data['FoodName'] ;?>">
          </div>

          <div class="form-group">
            <label for="calories">Calories:</label>
            <input type="number" id="Calories" name="Calories" class="form-control" required  value=" <?php  echo $data['Calories'];  ?>">
          </div>

          <div class="form-group">
            <label for="Protein">Protein (g):</label>
            <input type="number" id="Protein" name="Protein" class="form-control" required  value=" <?php echo $data['Protein'] ;?>">
          </div>

          <div class="form-group">
            <label for="carbs">Carbohydrates (g):</label>
            <input type="number" id="Carbohydrates" name="Carbohydrates" class="form-control" required  value="<?php echo$data['Carbohydrates']   ;  ?>">
          </div>

          <div class="form-group">
            <label for="fat">Fats (g):</label>
            <input type="number" id="Fats" name="Fats" class="form-control" required  value=" <?php echo$data['Fats']; ?>">
          </div>
          <div class="form-group">
            <label for="descreption"></label>Descreption</label>
            <input type="text" id="Descreption" name="FoodDescription" class="form-control" required  value="<?php echo $data ['FoodDescription']; ?>">
          </div>
          </form>
<?}?>
          <div class="row" style="border: 4px sold chocolate; background-color: brown; text-decoration-color: blueviolet;">
            <footer class="by-dark text-light text-center py-3">
                <p>&copy:2023 CHUMEX THE KLEIN</p> 
            </footer>
        </div>
        <script src="bootstrap.min.js"></script> 
</body>
</html>
