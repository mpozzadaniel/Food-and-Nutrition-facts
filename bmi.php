<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color:aquamarine;
            text-decoration-color: ;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row" style="border:2px solid red; background-color: chartreuse;">
            <?php 
                include("nav2.php")
            ?>
        </div>
        <div class=row>
            <h2>BMI Calculator</h2>

            <form id="bmiForm">
                <label for="weight">Weight (kg):</label>
                <input type="number" id="weight" placeholder="Enter your weight" required>

                <label for="height">Height (cm):</label>
                <input type="number" id="height" placeholder="Enter your height" required>

                <button type="button" onclick="calculateBMI()">Calculate BMI</button>
            </form>

            <div id="result"></div>

            <script>
                function calculateBMI() {
                    var weight = document.getElementById('weight').value;
                    var height = document.getElementById('height').value;

                    // Check if the input values are valid
                    if (weight <= 0 || height <= 0) {
                        alert('Please enter valid values for weight and height.');
                        return;
                    }

                    // Convert height to meters
                    var heightInMeters = height / 100;

                    // Calculate BMI
                    var bmi = weight / (heightInMeters * heightInMeters);

                    // Display the result
                    var resultDiv = document.getElementById('result');
                    resultDiv.innerHTML = 'Your BMI is: ' + bmi.toFixed(2);
                }
            </script>
        </div>
        <div class="row" style="border:8px solid #bd809f ; background-color: brown;">
         <div>
            <footer class="by-dark text-light text-center py-3">
                <p>&copy:2023 CHUMEX THE KLEIN</p>
            </footer>
         </div>
    </div>
    </div>
    
    
    
    <script src="bootstrap.min.js"></script>
</body>
</html>