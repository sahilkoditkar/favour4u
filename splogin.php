<?php
session_start();
if (array_key_exists('email', $_POST) or array_key_exists('password', $_POST)) {

    include("connection.php");

    if ($_POST['email'] == '') {

        echo "<p>Email address is required.</p>";
    } else if ($_POST['password'] == '') {

        echo "<p>Password is required.</p>";
    } else {

        $query = "SELECT `spid` FROM `service_provider` WHERE email = '" . mysqli_real_escape_string($link, $_POST['email']) . "'";

        $result = mysqli_query($link, $query);



        if (mysqli_num_rows($result) > 0) {

            $query1 = "SELECT `spid` FROM `service_provider` WHERE email = '" . mysqli_real_escape_string($link, $_POST['email']) . "' && `password` = '" . mysqli_real_escape_string($link, $_POST['password']) . "'";

            $result1 = mysqli_query($link, $query1);
            if (mysqli_num_rows($result1) > 0) {
                $query2 = "SELECT * FROM `service_provider` WHERE email = '" . mysqli_real_escape_string($link, $_POST['email']) . "' && `password` = '" . mysqli_real_escape_string($link, $_POST['password']) . "'";
                $result2 = mysqli_query($link, $query2);
                $row = mysqli_fetch_array($result2);
                if (array_key_exists("name", $row)) {
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['spid'] = $row['spid'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['password'] = $row['password'];
                    header("location:spset.php");
                }
            } else {
                echo '<script>alert("Password is Wrong Try Again!");window.location="serviceprovider.html";</script>';
            }
        } else {

            echo '<script>alert("EmailId is Wrong Try Again Or Signup");window.location="serviceprovider.html";</script>';
        }
    }
}
?>