
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<?php
 require_once("connect.php");
 $limit = 6;
$query = "SELECT * FROM fooditem LIMIT $limit";
$result = mysqli_query($con, $query);
if(!$result){
    die("error" .mysqli_error($con));
}

?>
<body>
    <div class="container-fluid">
        <div class="row" style="border: 6px solid #7aaf4c; background-color: #4CAF50;">
            <?php
            include("nav2.php");
            ?>
        </div>
        <div class="row" style="background-color:#00ced1;">
            <?php
           
           
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col-md-4">
                    <div class="card" style=" background: linear-gradient(to bottom, #008080, #00CED1);">
                        <div class="card-header" style="background-color:#add8e6">
                            <?php echo $row['FoodName']; ?>
                        </div>
                        <div class="card-body">
                            <p class="card-text">FoodName: <?php echo $row['FoodName']; ?></p>
                            <p class="card-text">Calories: <?php echo $row['Calories']; ?></p>
                            <p class="card-text">Protein: <?php echo $row['Protein']; ?></p>
                            <p class="card-text">Carbohydrates: <?php echo $row['Carbohydrates']; ?></p>
                            <p class="card-text">Fats: <?php echo $row['Fats']; ?></p>
                        </div>
                        <div class="card-footer">
                            <?php echo $row['FoodDescription']; ?>
                        </div>
                        <a href="update.php?id=<?php echo $row['ID']; ?>" class="btn btn-secondary">Edit</a>
                       
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    </div>
        <?php include("footer.php"); ?>
    </div>
    </div>
    <script src="bootstrap.min.js"></script> 
</body>
</html>