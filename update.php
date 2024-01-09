<?php
require_once ("connect.php" );
?>
<?
if(isset($_GET['id'])){
    $id = ($_GET['id']);
}
$query = "select * from fooditem";
$result = mysqli_query($con, $query);
if(!$result){
    die("" .mysqli_error($con));
}
else{
    $row = mysqli_fetch_assoc($result);
    print_r($row);
}


?>
<form action="">
          <div class="form-group">
            <label for="food_name">Food Name:</label>
            <input type="text" id="FoodName" name="FoodName" class="form-control" required value="<?php echo $row['FoodName'] ;?>">
          </div>

          <div class="form-group">
            <label for="calories">Calories:</label>
            <input type="number" id="Calories" name="Calories" class="form-control" required  value=" <?php  echo $row['Calories'];  ?>">
          </div>

          <div class="form-group">
            <label for="Protein">Protein (g):</label>
            <input type="number" id="Protein" name="Protein" class="form-control" required  value=" <?php echo $row['Protein'] ;?>">
          </div>

          <div class="form-group">
            <label for="carbs">Carbohydrates (g):</label>
            <input type="number" id="Carbohydrates" name="Carbohydrates" class="form-control" required  value="<?php echo$row['Carbohydrates']   ;  ?>">
          </div>

          <div class="form-group">
            <label for="fat">Fats (g):</label>
            <input type="number" id="Fats" name="Fats" class="form-control" required  value=" <?php echo$row['Fats']; ?>">
          </div>
          <div class="form-group">
            <label for="descreption"></label>Descreption</label>
            <input type="text" id="Descreption" name="FoodDescription" class="form-control" required  value="<?echo $row ['FoodDescription']; ?>">
          </div>
          </form>

