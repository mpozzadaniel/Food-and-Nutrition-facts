<html>
  <head>
    <title>Home</title>
    <style>
      h3{text-shadow: 6px 6px 8px #005844; color: #5dfdcb;}
      h1{color: #408EC6 ;text-align: center; text-shadow: 4px 4px 6px black;}
      p{font-family: verdana;font-size:20px; background-color: brown;}
      img{object-fit: cover; border-radius: 50px;}
      h2{color: goldenrod ; text-size-adjust: 62px; background-color:#b5dfcc; text-align: center; border:#F98866 ;}
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <div class="container-fluid"> 
      <div class="row" style="border:6px solid #7aaf4c; background-color: #4CAF50; position:up" >
        <?php 
         include("nav2.php")
       ?>
      </div><CEnter>
      <div class="row" style="border:8px solid #c5c880 ; background-color: #7aaf4c">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-bs-ride="carousel" data-bs-interval="3000">
          <div class="carousel-inner">
         <div class="carousel-item active">
          <img src="bro.jpg" class="d-block w-50" alt="Image 1" height="350px">
          <div class="carousel-caption d-none d-md-block">
            <h1>LEAFY VEGETABLES</h1>
            <h3> Support vision and skin health. </h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="carot.jpg" class="d-block w-50" alt="Image 2" height="350px">
          <div class="carousel-caption d-none d-md-block">
            <h1>CARROTS</h1>
            <h3>Have lower cholesterol levels and improves eye health.</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="eggs.jpg" class="d-block w-50" alt="Image 3" height="350px">
          <div class="carousel-caption d-none d-md-block">
            <h1>EGGS</h1>
            <h3> It is a powerhouse of disease-fighting nutrients like lutein.</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="fish.jpg" class="d-block w-50" alt="Image 4" height="350px">
          <div class="carousel-caption d-none d-md-block">
            <h1>FRESH FOODS</h1>
            <h3> They provide vitamins and minerals you need for optimal health</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="juice.jpg" class="d-block w-50" alt="Image 5" height="350px">
          <div class="carousel-caption d-none d-md-block">
            <h1>FRESH JUICE</h1>
            <h3>The body absorb nutrients quickly, without having to digest fibers</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="meat.jpg" class="d-block w-50" alt="Image 6" height="350px">
          <div class="carousel-caption d-none d-md-block">
            <h1>MEAT</h1>
            <h3>It is important for growth and development</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="milk.jpg" class="d-block w-50" alt="Image 7" height="350px">
          <div class="carousel-caption d-none d-md-block">
            <h1>FRESH FOOD</h1>
            <h3>Provides the body with all nutrients needed in the body</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="nuts.jpg" class="d-block w-50" alt="Image 8" height="350px">
          <div class="carousel-caption d-none d-md-block">
            <h1>GROUND NUTS</h1>
            <h3>They boost the memory and skin glow</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="ora.jpg" class="d-block w-50" alt="Image 9" height="350px">
          <div class="carousel-caption d-none d-md-block">
            <h1>ORANGES</h1>
            <h3>Boosts the body's immune system to protect against viruses and germs</h3>
          </div>
        </div>
        
        <div class="carousel-item">
          <img src="raw.jpg" class="d-block w-50" alt="Image 10" height="350px">
          <div class="carousel-caption d-none d-md-block">
            <h1>FRUITS</h1>
            <h3>They contain vitamins and minerals</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="veg.jpg" class="d-block w-50" alt="Image 11" height="350px">
          <div class="carousel-caption d-none d-md-block">
            <h1>VEGETABLES</h1>
            <h3>Reduces the risk of diabetes and improves skin health</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="water.jpg" class="d-block w-50" alt="Image 12"height="350px">
          <div class="carousel-caption d-none d-md-block">
            <h1>WATER</h1>
            <h3>It flushes body waste</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="yog.jpg" class="d-block w-50" alt="Image 13" height="350px">
          <div class="carousel-caption d-none d-md-block">
            <h1>YOGURT</h1>
            <h3>It provides protein and calcium to the body</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="dc.jpg" class="d-block w-50" alt="Image 13" height="350px">
          <div class="carousel-caption d-none d-md-block">
            <h1>Grilled Chicken</h1>
            <h3>Contains alot of proteins that are good for body building</h3>
          </div>
        </div>
        
        
      </div></CEnter>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>
        <h2><marquee>Feeding is an essential part of your health.Remember strong body is made up of good diet. When you eat a balanced diet in every meal you take, your your body will grow strong, energetic, and your white blood cells will not be defited by disease causing germs. Make sure before eating you first wash your hands with soap to kill the Germs  </marquee></h2>
        <?php
          $d = date('D');
          if ($d == "Sun" || $d == "Sat") {
              echo "<h2><marquee>Enjoy a wonderful weekend with nutritious meals</marquee></h2>";
          } elseif ($d == "Mon") {
              echo "<h2><marquee>Start your week with a meal that boosts your immunity.Your diet , Your Health</marquee></h2>";
          } else {
              echo "<h2><marquee>Have a great day with wholesome and delicious food</marquee></h2>";
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
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>