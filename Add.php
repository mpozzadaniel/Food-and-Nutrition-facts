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
          <div class="row" style="border: 6px solid indianred; background-color: #4CAF50;">
              <?php include("nav2.php"); ?>
          </div>
          <div class="row" style="border: 4px solid grey; background-color: #bd809f;">
              <h2>Add Food Item</h2>

              <form action="process_add_food.php" method="post" class="mt-3">
                  <label for="food_name">Food Name:</label>
                  <input type="text" id="food_name" name="food_name" required><br>

                  <label for="calories">Calories:</label>
                  <input type="number" id="calories" name="calories" required><br>

                  <label for="protein">Protein (g):</label>
                  <input type="number" id="protein" name="protein" required><br>

                  <label for="carbs">Carbohydrates (g):</label>
                  <input type="number" id="carbs" name="carbs" required><br>

                  <label for="fat">Fat (g):</label>
                  <input type="number" id="fat" name="fat" required><br>

                  <input type="submit" value="Add Food Item" class="btn btn-primary">
              </form>

              <?php
                  // Check if the form is submitted
                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
                          echo "Food item added successfully";
                      } else {
                          echo "Error: " . $stmt->error;
                      }

                      // Close the prepared statement
                      $stmt->close();
                  }
              ?>

          </div>
          <div class="row" style="border:8px solid #bd809f ; background-color: brown;">
            <div>
              <footer class="by-dark text-light text-center py-3">
                <p>&copy:2023 CHUMEX THE KLEIN</p>
              </footer>
            </div>
          </div>
      </div>
  </body>
</html>
