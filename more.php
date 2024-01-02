<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            
       
        img {
            float: right;
            width: 325px; height:325px border-radius: 50px; float:"right"; object-fit: "cover";

        }
    </style>
            body{padding: 100px;}
        </style>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body >
        <div class="container-fluid">
            <div class="row" style="border:6px solid indianred; background-color: #4CAF50;">
                <?php 
                    include("nav2.php")
                ?>  
            </div>
            <div class="row" style="background-color: #E6E6F5; border: 6px solid #bc8759;">   
                    <h2>Food nutrients along with their key information:</h2>
                    <h3> Protein:</h3>

                    <ul style="padding: 50px;" >
                        <li><h4>Function:</h4> Building and repairing tissues, enzymes, hormones.</li> 
                        <li><h4>Example: </h4>Grilled Chicken Breast (3 oz)</li> 
                        <li><h4>Protein:</h4> 26g</li>
                        <li><h4>Calories:</h4>142</li>
                    </ul>
                    <hr>
                    <h3>Carbohydrates:</h3>
                    <ul style="padding: 50px;">
                        <li><h4>Function:</h4> Main energy source for the body.</li>
                        <li><h4>Example:</h4> Brown Rice (1 cup, cooked)</li>
                        <li><h4>Carbohydrates:</h4> 45g</li>
                        <li><h4>Calories:</h4> 215</li>
                    </ul>
                    <hr>
                    <h3>Fiber:</h3>
                    <ul style="padding: 50px;">
                        <li><h4>Function:</h4> Supports digestion, helps prevent constipation.</li>
                        <li><h4>Example:</h4> Broccoli (1 cup, chopped)</li> 
                        <li><h4>Fiber:</h4> 5.1g</li>
                        <li><h4>Calories:</h4> 55</li>
                    </ul>
                    <hr>
                    <h3>Fats:</h3>
                    <ul style="padding: 50px;">
                        <li><h4>Function:</h4> Energy storage, cell structure, absorption of fat-soluble vitamins.</li>
                        <li><h4>Example:</h4> Almonds (1 oz)</li>
                        <li><h4>Total Fat:</h4> 14g</li>
                        <li><h4>Calories:</h4> 160</li>
                    </ul>
                    <hr>
                    <h3>Vitamins (Vitamin C):</h3> 
                    <ul style="padding: 50px;">
                        <li><h4>Function:</h4>Supports immune system, wound healing, and collagen formation.</li> 
                        <li><h4>Example:</h4> Oranges (1 medium)</li>
                        <li><h4>Vitamin C: </h4>70mg (117% DV)</li>
                        <li><h4>Calories:</h4> 62</li>
                    </ul>
                    <hr>
                    <h3>Minerals (Iron):</h3>
                    <ul style="padding: 50px;">
                        <li><h4>Function:</h4> Oxygen transport in the blood.</li>
                        <li><h4>Example: </h4>Spinach (1 cup, cooked)</li>
                        <li><h4>Iron:</h4> 6.4mg (36% DV)</li>
                        <li><h4>Calories:</h4>41</li> 
                    </ul>
                    <hr>
                    <h3> Calcium:</h3>
                    <ul style="padding: 50px;">
                        <li><h4>Function:</h4> Building and maintaining strong bones and teeth.</li>
                        <li><h4>Example:</h4> Yogurt (1 cup, plain, non-fat)</li>
                        <li><h4>Calcium:</h4> 200mg (20% DV)</li>
                        <li><h4>Calories:</h4> 100</li>
                    </ul>
                    <hr>
                    <h3>Omega-3 Fatty Acids:</h3>
                    <ul style="padding: 50px;">
                        <li><h4>Function:</h4> Supports heart health, brain function.</li>
                        <li><h4>Example:</h4> Salmon (3 oz, cooked)</li>
                        <li><h4>Omega-3 Fatty Acids:</h4>  1.1g</li>
                        <li><h4>Calories:</h4> 175</li>
                    </ul>
                    <hr>
                    <h3>Antioxidants (Vitamin E):</h3>
                    <ul style="padding: 50px;">
                        <li><h4>Function:</h4> Neutralize free radicals.</li>
                        <li><h4>Example:</h4>  Almonds (1 oz)</li>
                        <li><h4>Vitamin E:</h4> 7.3mg (37% DV)</li>
                        <li><h4>Calories:</h4> 160</li>
                    </ul>
                    <hr>
                    <h3>Water:</h3>

                    <ul style="padding: 50px;">
                        <li><h4>Function:</h4> Essential for hydration, nutrient transport, and temperature regulation.</li>
                        <li><h4> Example:</h4> Watermelon (1 cup, diced)</li>
                        <li><h4>Water Content:</h4> Approximately 92%</li>
                        <li><h4>Calories:</h4> 46</li>
                    </ul>
                    <a href="more.php">PAGE UP</a>
            </div>  
            <hr>
            <center>
            <h5>These values are approximate and can vary based on specific brands and preparation methods.</h5> 
            <h5>Always check food labels for accurate nutritional information.</h5>
            </center>
            <div class="row" style="border: 4px sold chocolate; background-color: brown; text-decoration-color: blueviolet;">
                <footer class="by-dark text-light text-center py-3">
                    <marquee><p>&copy:2023 CHUMEX THE KLEIN</p></marquee> 
                </footer>
            </div>
           
        </div>
  
     <script src="bootstrap.min.js"></script>    
    </body>
</html>