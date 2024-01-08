<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrition-facts</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            padding: 0px;
            border-radius: 10;
           
        }

        .navbar {
            background-color: #4CAF50;
            color: white;
            border-radius: 30px;
        
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
        }

        .navbar-toggler-icon {
            background-color: white;
        }

        .navbar-nav .nav-link {
            color: white;
            margin-left: 100spx;
            font-weight: bold;
        }

        .navbar-nav .nav-link:hover {
            color: #fff;
            text-decoration: underline;
        }

        .form-control {
            border: none;
            border-radius: 0;
        }

        .btn-success {
            border-radius: 0;
        }
         .img {
            padding:0;
            border-radius: 50px;
        max-width: 110%;
        height: 90px;}
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="logo-container">
                        <img src="log.jpg" alt="Nutrition-facts" class="img">
                    </div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="About.php">Content</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="more.php">Nutrients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Display2.php">Display</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tin.php">B.M Index</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Add.php">Add-Food-item</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Contact.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Oring.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Oring.php">Data</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search Here" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>
