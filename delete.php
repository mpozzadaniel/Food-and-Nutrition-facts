<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beautiful Card</title>
  <style>
    body {
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background: linear-gradient(to bottom, #008080, #00CED1);
      font-family: 'Arial', sans-serif;
      color: white;
    }

    .card {
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      width: 300px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-header {
      background: #FF6F61;
      padding: 20px;
    }

    .card-body {
      padding: 20px;
      text-align: center;
    }

    .floral-image {
      width: 100%;
      height: auto;
    }

    .back {
      background: lavender;
      color: gold;
      text-align: center;
      padding: 20px;
    }

    .geometric-pattern {
      width: 100%;
      height: auto;
    }
  </style>
</head>
<body>
  <div class="card">
    <div class="card-header">Front of the Card</div>
    <div class="card-body">
      <img class="floral-image" src="floral.jpg" alt="Floral Illustration">
      <p>This is some text on the front of the card.</p>
    </div>
  </div>

  <div class="card back">
    <img class="geometric-pattern" src="geometric.jpg" alt="Geometric Pattern">
    <p>This is some text on the back of the card.</p>
  </div>
</body>
</html>
