<?php
session_start();
if (array_key_exists('email', $_POST) or array_key_exists('password', $_POST)) {

    include("connection.php");

    $query = "SELECT `tid` FROM `customer` WHERE email = '" . mysqli_real_escape_string($link, $_POST['email']) . "'";

    $result = mysqli_query($link, $query);


    if (mysqli_num_rows($result) > 0) {

        $query1 = "SELECT `tid` FROM `customer` WHERE email = '" . mysqli_real_escape_string($link, $_POST['email']) . "' && `password` = '" . mysqli_real_escape_string($link, $_POST['password']) . "'";

        $result1 = mysqli_query($link, $query1);

        if (mysqli_num_rows($result1) > 0) {
            $query2 = "SELECT * FROM `customer` WHERE email = '" . mysqli_real_escape_string($link,  $_POST['email']) . "' && `password` = '" . mysqli_real_escape_string($link, $_POST['password']) . "'";
            $result2 = mysqli_query($link, $query2);
            $row = mysqli_fetch_array($result2);
            if (array_key_exists("name", $row)) {
                $_SESSION['name'] = $row['name'];

                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];

                if (mysqli_real_escape_string($link,  $_POST['ref']) == "order")
                    header("location:cidset.php?ref=order");
                else
                    header("location:cidset.php");
            }
        } else {
            echo '<script>alert("Password is Wrong Try Again!");window.location="login.html";</script>';
        }
    } else {
        echo '<script>alert("EmailId is Wrong Try Again Or Signup");window.location="signup.html";</script>';
    }
}
?>