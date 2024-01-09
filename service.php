<?php
 require_once("connect.php");
$query = "select * from fooditem";
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
            <div class="row" style="border:6px solid #7aaf4c; background-color: #4CAF50;">
                <?php 
                    include("nav2.php")
                ?>  
            </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2></h2>
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr>
                                    <td>ID</td>
                                    <td>FoodName </td>
                                    <td>Calories</td>
                                    <td>Protein</td>
                                    <td>Carbohydrates</td>
                                    <td>Fats</td>
                                    <td>FoodDescription</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>
                                <tr>
                                <?php
                                    while ($row =mysqli_fetch_assoc($result))
                                     {
                                            
                                ?>
                                    <td><?php echo $row['ID']; ?> </td>
                                    <td><?php echo $row['FoodName'];?> </td>
                                    <td><?php echo $row['Calories']; ?> </td>
                                    <td><?php echo $row['Carbohydrates']; ?> </td>
                                    <td><?php echo $row['Fats'];?> </td>
                                    <td><?php echo $row['Protein'];?> </td>
                                    <td><?php echo $row['FoodDescription'];?> </td>
                                    <td><a href="update.php?id=<?php echo $row['ID']; ?>" class="btn btn-success">Edit</a></td>
                                    <td><a href="delete.php?<?php echo $row['ID']; ?> "class="btn btn-danger">Delete</a> </td>
                                </tr>
                                <?php
                                     }
                                ?>
                                
                            </table>
                        </div>
                    </div>
                </div>
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