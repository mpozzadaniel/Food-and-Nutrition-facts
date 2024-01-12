<?php
   require_once("connect.php");

   $fn = $_POST["Firstname"];
   $sn = $_POST["Secondname"];
   $tel = $_POST["TelphoneNumber"];
   $mail = $_POST["Email"];
   $gen = $_POST["Gender"];
   $cit = $_POST["Citizen"];
   

   $query = "INSERT INTO contact(Firstname,Secondname,TelphoneNumber,Email,Gender, Citizen)VALUES(?,?,?,?,?,?)";
    $statement=mysqli_prepare($con, $query);

    mysqli_stmt_bind_param($statement, "ssssss",$fn, $sn, $tel,$mail, $gen, $cit );

    mysqli_stmt_execute($statement);
    //echo"data submitteted successfully";
    header("Location: contact.php");
    exit();
?>



