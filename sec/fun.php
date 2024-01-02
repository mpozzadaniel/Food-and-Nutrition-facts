<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>writing PHP with parameters</title>
</head>
<body>
    <?php
    function sum($num2, $num3){
        echo The sum is $sum;

    } 
    sum(
        $sum="$num2 + $num3";
    )
    ?>
</body>
</html>
