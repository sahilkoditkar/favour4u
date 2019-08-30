<?php
session_start();
if (array_key_exists('email', $_POST) or array_key_exists('password', $_POST) or array_key_exists('address', $_POST) or array_key_exists('dob', $_POST)  or array_key_exists('mobile', $_POST) or array_key_exists('name', $_POST)) {

    include("connection.php");

    $query = "SELECT `tid` FROM `customer` WHERE email = '" . mysqli_real_escape_string($link, $_POST['email']) . "'";

    $result = mysqli_query($link, $query);


    $query1 = "SELECT `tid` FROM `customer` WHERE mobile = '" . mysqli_real_escape_string($link, $_POST['mobile']) . "'";

    $result1 = mysqli_query($link, $query1);

    if (mysqli_num_rows($result) > 0) {

        echo "<script>alert('That email address  has already been taken.');window.location='signup.html';</script>";
    }
    if (mysqli_num_rows($result1) > 0) {

        echo "<script>alert('That Mobile number  has already been taken.');window.location='signup.html';</script>";
    } else {
        $query = "INSERT INTO `customer` (`email`, `password`,`address`,`dob`,`mobile`,`name`) VALUES ('" . mysqli_real_escape_string($link, $_POST['email']) . "', '" . mysqli_real_escape_string($link, $_POST['password']) . "','" . mysqli_real_escape_string($link, $_POST['address']) . "','" . mysqli_real_escape_string($link, $_POST['dob']) . "','" . mysqli_real_escape_string($link, $_POST['mobile']) . "','" . mysqli_real_escape_string($link, $_POST['name']) . "')";

        if (mysqli_query($link, $query)) {
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['mobile'] = $_POST['mobile'];
            $_SESSION['address'] = $_POST['address'];
            $_SESSION['dob'] = $_POST['dob'];
            $_SESSION['password'] = $_POST['password'];
            echo "<script>alert('You have succesfully Signup');window.location='cidset.php';</script>";
        } else {

            echo "<p>There was a problem signing you up - please try again later.</p>";
        }
    }
}
?>