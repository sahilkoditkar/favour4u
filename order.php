<?php
session_start();
//if(!isset($_SESSION['name']))
//{
//header("location: orderform.php");	
//}
if (array_key_exists('sid', $_GET)) {

    include("connection.php");

    $query = "SELECT `spid` FROM `service` WHERE sid = '" . mysqli_real_escape_string($link, $_GET['sid']) . "'";
    $_SESSION['sid'] = $_GET['sid'];
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    if (array_key_exists("spid", $row)) {

        $_SESSION['spid'] = $row['spid'];
        header("location: orderform.php");
    }
}
?>