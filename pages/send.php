<?php
$host = "localhost";
$user = "root";
$pass = "";
$db =  "form";



    $con = new mysqli($host,$user,$pass,$db);
    if(!$con) {
        echo "There are some problem while connectin the database";
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $qry = "INSERT INTO `table1`( `name`, `email`, `message`) VALUES ('$name','$email','$message')";

    $insert = mysqli_query($con, $qry);

    if(!$insert) {
        echo "There are some problem while inserting data";
    }
    else {
        echo "Data Inserted";
    }

?>