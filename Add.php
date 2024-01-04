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

        <form action="process_add_food.php" method="post" style="background-color: #B0E0B2;">
          <div class="form-group">
            <label for="food_name">Food Name:</label>
            <input type="text" id="food_name" name="food_name" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="calories">Calories:</label>
            <input type="number" id="calories" name="calories" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="protein">Protein (g):</label>
            <input type="number" id="protein" name="protein" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="carbs">Carbohydrates (g):</label>
            <input type="number" id="carbs" name="carbs" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="fat">Fat (g):</label>
            <input type="number" id="fat" name="fat" class="form-control" required>
          </div>

          <input type="submit" value="Add Food Item" class="btn btn-primary">
        </form>

        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Ensure you have a database connection established ($conn)
          // Retrieve form data
          $food_name = $conn->real_escape_string($_POST["food_name"]);
          $calories = $conn->real_escape_string($_POST["calories"]);
          $protein = $conn->real_escape_string($_POST["protein"]);
          $carbs = $conn->real_escape_string($_POST["carbs"]);
          $fat = $conn->real_escape_string($_POST["fat"]);

          // Insert data into the database
          $stmt = $conn->prepare("INSERT INTO food_items (food_name, calories, protein, carbs, fat) VALUES (?, ?, ?, ?, ?)");
          $stmt->bind_param("siiii", $food_name, $calories, $protein, $carbs, $fat);

          if ($stmt->execute()) {
            echo '<div class="alert alert-success mt-3" role="alert">Food item added successfully</div>';
          } else {
            echo '<div class="alert alert-danger mt-3" role="alert">Error: ' . $stmt->error . '</div>';
          }

          // Close the prepared statement
          $stmt->close();
        }
        ?>
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
