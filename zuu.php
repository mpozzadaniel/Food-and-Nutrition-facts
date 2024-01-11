<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Your Page Title</title>
</head>
<body>

<div class="container-fluid">
    <div class="row" style="border: 6px solid #7aaf4c; background-color: #4CAF50;">
        <?php
        include("nav2.php");
        ?>
    </div>
  <div class="row"><center>
    <div class="col-12">
      <!-- Carousel -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="sun.jpg" class="d-block w-50" alt="Image 1">
            <div class="carousel-caption d-none d-md-block">
              <h1>First Slide</h1>
              <p>This is the first slide with an image and some text content.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="raw.jpg" class="d-block w-50" alt="Image 2">
            <div class="carousel-caption d-none d-md-block">
              <h1>Second Slide</h1>
              <p>This is the second slide with a different image and text content.</p>
            </div>
          </div>
          <!-- Add more carousel items as needed -->
        </div></center>

        <!-- Navigation Arrows -->
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
  </div>

  <!-- Footer -->
  <div class="row">
    <div class="col-12">
      <footer class="bg-dark text-light text-center p-3">
        <p>&copy; 2024 Your Website</p>
      </footer>
    </div>
  </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
