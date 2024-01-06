<?php
   require_once("connect.php");

   $fn = $_POST["Firstname"];
   $sn = $_POST["Secondname"];
   $tel = $_POST["TelphoneNumber"];
   $mail = $_POST["Email"];
   $gen = $_POST["Gender"];
   

   $query = "INSERT INTO contact (Firstname,Secondname,TelphoneNumber,Email,Gender)VALUES(?,?,?,?,?)";
    $statement=mysqli_prepare($con, $query);

    mysqli_stmt_bind_param($statement, "ssssi",$fn, $sn, $tel,$mail, $gen, );

    mysqli_stmt_execute($statement);
    echo"data submitteted successfully";
?>



