<?php
session_start();
if (array_key_exists('feedback', $_POST) or array_key_exists('ratings', $_POST)) {

  include("connection.php");
  
  //$query = "UPDATE `order_info` SET feedback = ".mysqli_real_escape_string($link, $_POST['feedback'])." , ratings = ".mysqli_real_escape_string($link, $_POST['ratings'])." where oid= ".mysqli_real_escape_string($link, $_SESSION['oid'])." ";    
  $query = "UPDATE `order_info` SET feedback = '" . mysqli_real_escape_string($link, $_POST['feedback']) . "' , ratings = '" . mysqli_real_escape_string($link, $_POST['ratings']) . "' where oid= '" . mysqli_real_escape_string($link, $_SESSION['oid']) . "' ";

  if (mysqli_query($link, $query)) {
    echo '<script>alert("Feedback submited!!!");window.location="customerorderstrack.php"</script>';
    // echo "subitted";
  } else {
    //  echo "not";
    echo '<script>alert("Feedback not submited!!!");window.location="customerorderstrack.php"</script>';
  }
}
?>