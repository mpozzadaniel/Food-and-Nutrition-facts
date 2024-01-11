<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 6px;
            padding: 10px;
        }

        /* Header Styles */
        header {
            background-color: #B0E0B2;
            padding: 10px;
            text-align: center;
            color: white;
        }

        /* Form Styles */
        form {
            background-color: ;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Input Styles */
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        /* Button Styles */
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        ul{padding: 20;}

        /* Result Styles */
        #result {
            margin-top: 20px;
            font-weight: bold;
            text-align: center;
        }

        /* Footer Styles */
        footer {
            
            color: white;
            text-align: center;
            padding: 10px;
           
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container-fluid"> 
        <div class="row" style="border:6px solid #7aaf4c; background-color: #4CAF50;">
            <?php 
                include "nav2.php" ;
            ?>
        </div>
        <div class="row" style="border:6px solid #4CAF50; background-color:#B0E0B2;">
            <div class="header">
               <center><h2>BMI Calculator</h2></center>
            </div>

            <form id="bmiForm">
                <label for="weight">Weight (kg):</label>
                <input type="number" id="weight" placeholder="Enter your weight" required>

                <label for="height">Height (cm):</label>
                <input type="number" id="height" placeholder="Enter your height" required>

                <button type="button" onclick="calculateBMI()">Calculate BMI</button>
            </form>

            <div id="result"></div>

        </div>
        
        <div class="row" style="background-color: #C696D4; border: 4px; solid #B457B0">
            <h4>BMI is categorized into different ranges to help assess an individual's weight status:</h4>
            <div class="col-lg-5" style="border: #B457B0">
                <ul style="padding: 10px;">
                    <li>
                        <h5>Underweight:</h5>
                        <h6>BMI less than 18.5</h6>
                    </li>
                    <li>
                        <h5>Normal weight:</h5>
                        <h6>BMI between 18.5 and 24.9</h6>
                    </li>
                    <li>
                        <h5>Overweight:</h5>
                        <h6>BMI between 25 and 29.9</h6>
                    </li>
                    <li>
                        <h5>Obesity:</h5>
                    <p>Obesity has three class as listed bellow</p>
                    </li>
                </ul>

                <dl>
                    <dt>
                        <h5>Class I (Moderate):</h5>
                    </dt>
                    <dd>
                        <h6>BMI between 30 and 34.9</h6>
                    </dd>

                    <dt>
                        <h5>Class II (Severe):</h5>
                    </dt>
                    <dd>
                        <h6>BMI between 35 and 39.9</h6>
                    </dd>

                    <dt>
                        <h5>Class III (Very severe or morbid obesity):</h5>
                    </dt>
                    <dd>
                        <h6>BMI of 40 and above</h6>
                    </dd>
                </dl>
            </div>
            
        </div>

       
    </div> 

    </div>
        <?php include("footer.php"); ?>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script>
        function calculateBMI() {
            var weight = document.getElementById('weight').value;
            var height = document.getElementById('height').value;

            if (weight <= 0 || height <= 0) {
                document.getElementById('result').innerHTML = 'Please enter valid values for weight and height.';
                return;
            }

            var heightInMeters = height / 100;
            var bmi = weight / (heightInMeters * heightInMeters);

            var resultDiv = document.getElementById('result');
            resultDiv.innerHTML = 'Your BMI is: ' + bmi.toFixed(2);
        }
    </script>
</body>

</html>
