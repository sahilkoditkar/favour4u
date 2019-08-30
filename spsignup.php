<?php
$errormail = "That email address  has already been taken";

$errormobile = "That mobile  has already been taken";
session_start();
if (array_key_exists('email', $_POST) or array_key_exists('password', $_POST) or array_key_exists('address', $_POST)  or array_key_exists('mobile', $_POST) or array_key_exists('name', $_POST) or array_key_exists('status', $_POST) or array_key_exists('work_experience', $_POST)) {

  include("connection.php");


  $query = "SELECT `spid` FROM `service_provider` WHERE email = '" . mysqli_real_escape_string($link, $_POST['email']) . "'";

  $result = mysqli_query($link, $query);


  $query1 = "SELECT `spid` FROM `service_provider` WHERE mobile = '" . mysqli_real_escape_string($link, $_POST['mobile']) . "'";

  $result1 = mysqli_query($link, $query1);


  if (mysqli_num_rows($result) > 0) {


    echo "<script type='text/javascript'>alert(\"$errormail\");</script>";

    header("location:serviceprovider.html");
  }

  if (mysqli_num_rows($result1) > 0) {


    echo "<script type='text/javascript'>alert(\"$errormobile\");</script>";
    header("location:serviceprovider.html");
  } else {
    $query = "INSERT INTO `service_provider` (`name`,`email`,`mobile`,`address`,`password`,`work_experience`) VALUES ('" . mysqli_real_escape_string($link, $_POST['name']) . "', '" . mysqli_real_escape_string($link, $_POST['email']) . "','" . mysqli_real_escape_string($link, $_POST['mobile']) . "','" . mysqli_real_escape_string($link, $_POST['address']) . "','" . mysqli_real_escape_string($link, $_POST['password']) . "','" . mysqli_real_escape_string($link, $_POST['work_experience']) . "')";


    if (mysqli_query($link, $query)) {
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['password'] = $_POST['password'];
      $_SESSION['address'] = $_POST['address'];
      $_SESSION['mobile'] = $_POST['mobile'];
      $_SESSION['name'] = $_POST['name'];
      header("location:spset.php");
    } else {

      echo "<p>There was a problem signing you up - please try again later.</p>";
    }
  }
}
