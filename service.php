<?php
 require_once("connect.php");
$query = "select * from fooditem";
$result = mysqli_query($con, $query);

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
                                    <tr><?php echo $row['ID']; ?> </tr>
                                    <tr><?php echo $row['FoodName'];?> </tr>
                                    <tr><?php echo $row['Calories']; ?> </tr>
                                    <tr><?php echo $row['Carbohydrates']; ?> </tr>
                                    <tr><?php echo $row['Fats'];?> </tr>
                                    <tr><?php echo $row['Protein'];?> </tr>
                                    <tr><?php echo $row['FoodDescription'];?> </tr>
        
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
    </div>
    
</body>
</html>