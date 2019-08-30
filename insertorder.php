<?php
session_start();
if (array_key_exists('date', $_POST) or array_key_exists('timeslot', $_POST) or array_key_exists('service_address', $_POST) or array_key_exists('payment_method', $_POST)) {

    include("connection.php");
    $query = "INSERT INTO `order_info` (`date`, `timeslot`,`service_address`,`payment_method`,`cid`,`spid`,`sid`) VALUES ('" . mysqli_real_escape_string($link, $_POST['date']) . "', '" . mysqli_real_escape_string($link, $_POST['timeslot']) . "','" . mysqli_real_escape_string($link, $_POST['service_address']) . "','" . mysqli_real_escape_string($link, $_POST['payment_method']) . "','" . mysqli_real_escape_string($link, $_SESSION['cid']) . "','" . mysqli_real_escape_string($link, $_SESSION['spid']) . "','" . mysqli_real_escape_string($link, $_SESSION['sid']) . "')";

    if (mysqli_query($link, $query)) {

        header("location: ordersuccess.php");
    } else {
        echo "<p>There was a problem signing you up - please try again later.</p>";
    }
}
?>