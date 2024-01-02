<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food and Nutrition</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Verdana', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        .container-fluid {
            padding: 20px;
        }

        h1 {
            color: #408EC6;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
        }

        h2 {
            color: #52489C;
            text-align: center;
            font-size: 36px;
            background-color: #F98866;
            padding: 15px;
            border: 2px solid #F98866;
            border-radius: 10px;
            margin-top: 20px;
        }

        h3 {
            color: #5dfdcb;
            text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.2);
        }

        p {
            font-family: 'Verdana', sans-serif;
            font-size: 18px;
            background-color: #A0522D;
            padding: 10px;
            border-radius: 8px;
            color: white;
        }

        img {
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 15px;
        }

        marquee {
            color: #4CAF50;
            font-size: 24px;
            font-weight: bold;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include("nav.php"); ?>
        </div>

        <div class="row">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-bs-ride="carousel"
                data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="bro.jpg" class="d-block w-50" alt="Image 1" height="450px">
                     <div class="carousel-caption d-none d-md-block">
                        <h1>LEAFY VEGETABLES</h1>
                        <h3> Support vision and skin health. </h3>
                     </div>
                    </div>
                    <div class="carousel-item">
                    <img src="carot.jpg" class="d-block w-50" alt="Image 2" height="450px">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>CARROTS</h1>
                        <h3>Have lower cholesterol levels and improves eye health.</h3>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="eggs.jpg" class="d-block w-50" alt="Image 3" height="450px">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>EGGS</h1>
                        <h3> It is a powerhouse of disease-fighting nutrients like lutein.</h3>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="fish.jpg" class="d-block w-50" alt="Image 4" height="450px">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>FRESH FOODS</h1>
                        <h3> They provide vitamins and minerals you need for optimal health</h3>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="juice.jpg" class="d-block w-50" alt="Image 5" height="450px">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>FRESH JUICE</h1>
                        <h3>The body absorb nutrients quickly, without having to digest fibers</h3>
                    </div>
                </div>
                    <div class="carousel-item">
                    <img src="meat.jpg" class="d-block w-50" alt="Image 6" height="450px">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>MEAT</h1>
                        <h3>It is important for growth and development</h3>
                    </div>
                 </div>
                    <div class="carousel-item">
                    <img src="milk.jpg" class="d-block w-50" alt="Image 7" height="450px">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>FREASH FOOD</h1>
                        <h3>Provides the body with all nutrients needed in the body</h3>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="nuts.jpg" class="d-block w-50" alt="Image 8" height="450px">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>GROUND NUTS</h1>
                        <h3>They boost the memory and skin glow</h3>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="ora.jpg" class="d-block w-50" alt="Image 9" height="450px">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>ORANGES</h1>
                        <h3>Boosts the body's immune system to protect against viruses and germs</h3>
                    </div>
                    </div>
                    
                    <div class="carousel-item">
                    <img src="raw.jpg" class="d-block w-50" alt="Image 10" height="450px">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>FRUITS</h1>
                        <h3>They contain vitamins and minerals</h3>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="veg.jpg" class="d-block w-50" alt="Image 11" height="450px">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>VEGETABLES</h1>
                        <h3>Reduces the risk of diabetes and improves skin health</h3>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="water.jpg" class="d-block w-50" alt="Image 12"height="450px">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>WATER</h1>
                        <h3>It flushes body waste</h3>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="yog.jpg" class="d-block w-50" alt="Image 13" height="450px">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>YOGURT</h1>
                        <h3>It provides protein and calcium to the body</h3>
                    </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <h2><marquee>Feeding is an essential part of your health</marquee></h2>
            <?php
            $d = date('D');
            if ($d == "Sun" || $d == "Sat") {
                echo "<h2><marquee>Enjoy a wonderful weekend with nutritious meals</marquee></h2>";
            } elseif ($d == "Mon") {
                echo "<h2><marquee>Start your week with a meal that boosts your immunity</marquee></h2>";
            } else {
                echo "<h2><marquee>Have a great day with wholesome and delicious food</marquee></h2>";
            }
            ?>
        </div>

        <div class="row">
            <footer>
                <p>&copy; 2023 CHUMEX THE KLEIN</p>
            </footer>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>
