<?php
 require_once("connect.php");
$query = "SELECT * FROM fooditem ";
$result = mysqli_query($con, $query);
if(!$result){
    die("" .mysqli_error($con));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row" style="border: 6px solid #7aaf4c; background-color: #4CAF50;">
            <?php
            include("nav2.php");
            ?>
        </div>
        <div class="row">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <?php echo $row['FoodName']; ?>
                        </div>
                        <div class="card-body">
                            <p class="card-text">ID: <?php echo $row['ID']; ?></p>
                            <p class="card-text">Calories: <?php echo $row['Calories']; ?></p>
                            <p class="card-text">Protein: <?php echo $row['Protein']; ?></p>
                            <p class="card-text">Carbohydrates: <?php echo $row['Carbohydrates']; ?></p>
                            <p class="card-text">Fats: <?php echo $row['Fats']; ?></p>
                        </div>
                        <div class="card-footer">
                            <?php echo $row['FoodDescription']; ?>
                        </div>
                        <a href="update.php?id=<?php echo $row['ID']; ?>" class="btn btn-success">Edit</a>
                        <a href="delete.php?id=<?php echo $row['ID']; ?> "class="btn btn-danger">Delete</a> 
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <div class="row" style="border: 4px sold chocolate; background-color: brown; text-decoration-color: blueviolet;">
        <footer class="by-dark text-light text-center py-3">
            <p>&copy:2023 CHUMEX THE KLEIN</p> 
        </footer>
    </div>
    </div>
    <script src="bootstrap.min.js"></script> 
</body>
</html>