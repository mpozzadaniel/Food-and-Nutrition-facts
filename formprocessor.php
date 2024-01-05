<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $secondname = $_POST['secondname'];
    $imail = $_POST['email'];

    include('connect.php');

    if ($con) {
        $sql = "INSERT INTO `data` (firstname, secondname, email) VALUES ('$firstname', '$secondname', '$imail')"; // Correct SQL syntax and variable names
        $result = mysqli_query($con, $sql);

        if ($result) {
            echo "Data inserted successfully";
        } else {
            die(mysqli_error($con));
        }
    } else {
        die(mysqli_error($con));
    }
}
?>
