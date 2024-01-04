<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food and Nutrition</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #212529;
        }

        .container-fluid {
            padding: 20px;
        }

        .card {
            background-color: #8A307F;
            color: #fff;
            margin-bottom: 20px;
        }

        .card-title {
            background-color: #6C217E;
            padding: 10px;
            border-radius: 5px;
        }

        .footer {
            border: 4px solid chocolate;
            background-color: brown;
            color: blueviolet;
            text-align: center;
            padding: 10px;
        }

        .marquee-text {
            white-space: nowrap;
            overflow: hidden;
            animation: marquee 20s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        img {
            object-fit: cover;
            border-radius: 50px;
            height: 100px;
        }

        table {
            width: 100%;
           
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            border: 14px solid grey;
            text-align: left;
        }

        th {
            background-color:  #9EAF50;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        h2{ background-color: #c8d29d;}
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row" style="border:6px solid #7aaf4c; background-color: #4CAF50;">
            <?php include("nav2.php"); ?>
        </div>

        <div class="row" style="border:4px solid grey background-color:#C9D496">
            <h2>Food Nutrients, their examples And the percentage required in a day</h2>
            
            <table style="background-color:#C9D496; border:4px solid  #9EAF50">
                            <tr>
                                <th>Food Nutrients</th>
                                <th>Their sources</th>
                                <th>Percentage</th>
                            </tr>
                            <tr >
                                <td>Proteins</td>
                                <td>
                                    <ol>
                                        <li>Eggs </li>
                                        <li>Milk </li>
                                        <li>Beans</li>
                                        <li>Meat </li>
                                        <li>G.nuts</li>
                                    </ol>
                                </td>
                                <td>60%</td>
                            </tr>
                        <tr>
                            <td>Fats</td>
                            <td>
                                <ol>
                                    <li>Butter</li>
                                    <li>Milk</li>
                                    <li>Yorgurt</li>
                                    <li>Meat</li>
                                    <li>Cooking oil</li>
                                </ol>    
                            </td>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <td>Carbohydrates</td>
                            <td>
                                <ol>
                                    <li>Wheat</li>
                                    <li>Millet</li>
                                    <li>Sorghum</li>
                                    <li>Honey</li>
                                    <li>Rice</li>
                                </ol>
                            </td>
                        <td>50%</td>
                    </tr>
                    <tr >
                        <td>Vitamins</td>
                        <td> 
                            <ol>
                                <li>Vegetables</li>
                                <li>Fish</li>
                                <li>Fruits</li>
                                <li>Morning sunshine</li>
                            </ol>    
                        </td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>Water</td>
                        <td>Water</td>
                        <td>40%</td>
                    </tr>
                    <tr>
                            <td>Minerals</td>
                        <td> 
                            <ol>
                                <li>Table salt</li>
                                <li>Vegetables</li>
                                 <li>Sea salt</li>
                                <li>All foods</li>
                            </ol>
                        </td>
                    <td>15%</td>
                            
                </tr>       
            </table><hr>
        </div>    
        <div class="row" style="background-color:#bcd1e4 " >
            <div class="col-lg-3">
                <div class="card" style="background-color:#5B84B1FF">
                    <div class="card-title"> 
                        <h3>Foods that rich in Calcium</h3> 
                    </div>
                    <ol>
                        <li>Nonfat and low-fat dairy</li>
                        <li>dairy substitutes</li>
                        <li>broccoli</li>
                        <li>dark leafy greens</li>
                        <li>sardines</li>
                        <li></li>
                        <li></li>
                        <li></li>
                  </ol>  
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card"  style="background-color:#5B84B1FF">
                    <div class="card-title">
                        <h3>Foods that rich in Potassium</h3>
                    </div>
                    <ol>
                        <li>Bananas</li>
                        <li>cantaloupe</li>
                        <li>raisins</li>
                        <li>nuts</li>
                        <li>fish</li>
                        <li>spinach </li>
                        <li> dark greens</li>
                        <li></li>
                                        
                    </ol>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="background-color:#5B84B1FF" >
                    <div class="card-title">
                      <h3>Foods that rich in fibres</h3>      
                        </div>
                        <ol>
                            <li>Legumes (dried beans and peas)</li>
                            <li>whole-grain foods and brans</li>
                            <li>seeds</li>
                            <li>apples</li>
                            <li>strawberries</li>
                            <li>carrots</li>
                            <li>raspberries</li>
                            <li>colorful fruit and vegetables</li>
                                    
                        </ol>
                                    
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="background-color:#5B84B1FF">
                        <div class="card-title">
                            <h3>Foods thst rich in Magnisium</h3>
                        </div>
                        <ol>
                            <li>Spinach</li>
                            <li> black beans</li>
                            <li>peas</li>
                            <li>almonds</li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ol>
                    </div>
                </div>
                      
            </div>
            <div class="row"style="background-color:#bcd1e4 ">
                <div class="col-lg-4">
                    <div class="card" style="background-color:#5B84B1FF" >
                        <div class="card-title">
                            <h3>Foods thst rich in Vitamin-A</h3>
                        </div>
                        <ol>
                            <li>Eggs</li>
                            <li>milk</li>
                            <li>carrots</li>
                            <li>sweet potatoes</li>
                            <li>cantaloupe</li>
                            <li></li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="background-color:#5B84B1FF">
                        <div class="card-title">
                            <h3>Foods that rich in Vitamin-C</h3>
                        </div>
                    <ol>
                        <li>Oranges</li>
                        <li>strawberries</li>
                        <li>tomatoes</li>
                        <li>kiwi</li>
                        <li>broccoli</li>
                        <li>red and green bell peppers</li>
                                        
                    </ol>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card"  style="background-color:#5B84B1FF">
                    <div class="card-title">
                        <h3>Foods that rich in Vitamin-E</h3>
                    </div>
                    <ol>
                        <li>nuts</li>
                        <li>Avocados</li>
                        <li>seeds</li>
                        <li> whole-grain foods</li>
                        <li>spinach</li>
                        <li> and other dark leafy greens</li>
                    </ol>
                </div>
           </div>
           <a href="display2.php">PAGE-UP</a>
            
        </div>
        <div class="row footer">
            <footer class="text-light text-center py-3">
                <p>&copy; 2023 CHUMEX THE KLEIN</p>
            </footer>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
</body>

</html>
