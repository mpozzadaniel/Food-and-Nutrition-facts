<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f2f2f2;
      display: flex;
      justify-content: flex-end;
      align-items: flex-start;
      height: 100vh;
      margin: 0;
      padding: 20px;
    }

    .card {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-bottom: 20px;
      width: 300px;
      text-align: center;
    }

    .card img {
      width: 100%;
      height: auto;
      border-radius: 5px;
    }

    .name {
      font-size: 18px;
      font-weight: bold;
      margin-top: 10px;
    }

    .price {
      color: #e44d26;
      font-size: 16px;
      margin-top: 5px;
    }
  </style>
</head>
<body>
  <div class="card">
    <img src="sun.jpg" alt="Product Image">
    <div class="name">Product Name 1</div>
    <div class="price">$19.99</div>
  </div>

  <div class="card">
    <img src="juice.jpg" alt="Product Image">
    <div class="name">Product Name 2</div>
    <div class="price">$29.99</div>
  </div>
</body>
</html>
