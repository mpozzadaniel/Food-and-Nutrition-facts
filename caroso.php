<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

form {
    max-width: 400px;
    margin: auto;
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
  </style>
</head>
<body>
      <h2>Add New Food Item</h2>
          <form action="process_add.php" method="post">
              <label for="food_name">Food Name:</label>
              <input type="text" id="food_name" name="food_name" required>

              <label for="calories">Calories:</label>
              <input type="number" id="calories" name="calories" required>

              <!-- Add other fields as needed -->

              <button type="submit">Add Food Item</button>
          </form>
          <?php
      // process_add.php

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Retrieve form data
          $food_name = $_POST["food_name"];
          $calories = $_POST["calories"];
          // Retrieve other fields as needed

          // TODO: Validate and sanitize input data

          // TODO: Insert data into the database
          // Example using MySQLi
          $conn = new mysqli("localhost", "username", "password", "database");

          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

          $sql = "INSERT INTO food_table (food_name, calories) VALUES ('$food_name', $calories)";
          // Add other fields to the SQL query as needed

          if ($conn->query($sql) === TRUE) {
              echo "Food item added successfully";
          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }

          $conn->close();
      }
      ?>
    <h2>Add New Food Item</h2>
    <form action="process_add.php" method="post">
        <label for="food_name">Food Name:</label>
        <input type="text" id="food_name" name="food_name" required>

        <label for="calories">Calories:</label>
        <input type="number" id="calories" name="calories" required>

        <label for="protein">Protein (g):</label>
        <input type="number" id="protein" name="protein" required>

        <label for="carbs">Carbohydrates (g):</label>
        <input type="number" id="carbs" name="carbs" required>

        <label for="fats">Fats (g):</label>
        <input type="number" id="fats" name="fats" required>

        <!-- Add other fields as needed -->

        <button type="submit">Add Food Item</button>
    </form>
</body>
</html>