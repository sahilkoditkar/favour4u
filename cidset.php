<?php
session_start();
include("connection.php");
$query = "SELECT * FROM `customer` WHERE email = '" . mysqli_real_escape_string($link, $_SESSION['email']) . "' && `password` = '" . mysqli_real_escape_string($link, $_SESSION['password']) . "'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
if (array_key_exists("name", $row)) {
	$_SESSION['cid'] = $row['tid'];

	if ($_GET['ref'] == "order")
		header("location:orderform.php");
	else
		header("location:index.php");
} else {
	echo "no";
}
?>