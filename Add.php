<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Food Item</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <div class="container-fluid">
    <div class="row"  style="border: 6px solid #7aaf4c; background-color:#B0E0B2;">
      <?php include("nav2.php"); ?>
    </div>
    <div class="row mt-3" style="background-color: #B0E0B2; border 4px solid  #4CAF50; padding:10px;">
      <div class="col-md-6 offset-md-3 border rounded p-4 bg-light">
        <h2 class="text-center mb-4">Add Food Item</h2>

        <form action="process_add_food.php" method="POST" style="background-color: #B0E0B2;">
          <div class="form-group">
            <label for="food_name">Food Name:</label>
            <input type="text" id="FoodName" name="FoodName" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="calories">Calories:</label>
            <input type="number" id="Calories" name="Calories" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="Protein">Protein (g):</label>
            <input type="number" id="Protein" name="Protein" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="carbs">Carbohydrates (g):</label>
            <input type="number" id="Carbohydrates" name="Carbohydrates" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="fat">Fats (g):</label>
            <input type="number" id="Fats" name="Fats" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="descreption"></label>Descreption</label>
            <input type="text" id="Descreption" name="FoodDescription" class="form-control" required>
          </div>

          <input type="submit" value="Add Food Item" class="btn btn-primary">
        </form>

       
      </div>
    </div>
    <div class="row" style="border:8px solid #bd809f ; background-color: brown;">
        <div>
          <footer class="by-dark text-light text-center py-3">
            <p>&copy:2023 CHUMEX THE KLEIN</p>
          </footer>
        </div>
      </div>
  </div>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
