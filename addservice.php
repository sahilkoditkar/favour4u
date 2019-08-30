<?php
session_start();
if (array_key_exists('name', $_POST) or array_key_exists('category', $_POST) or array_key_exists('mobile', $_POST) or array_key_exists('description', $_POST)) {

    include("connection.php");

    $query = "INSERT INTO `service` (`spid`, `name`,`category`,`price`,`description`) VALUES ('" . mysqli_real_escape_string($link, $_SESSION['spid']) . "', '" . mysqli_real_escape_string($link, $_POST['name']) . "','" . mysqli_real_escape_string($link, $_POST['category']) . "','" . mysqli_real_escape_string($link, $_POST['price']) . "','" . mysqli_real_escape_string($link, $_POST['description']) . "')";

    if (mysqli_query($link, $query)) {
        echo "<script>alert('You have succesfully Added');window.location='spbuttons.php';</script>";
    } else {

        echo "<script>alert('Try again');window.location='spbuttons.php';</script>";
    }
}
?>