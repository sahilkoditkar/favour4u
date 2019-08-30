<?php
session_start();
if (!isset($_SESSION['name'])) {
  echo '<script type="text/javascript">alert("Need to Login/Signup");window.location="login.html?ref=order";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>favour4u</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  <link href="css/form.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">favour4u</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <?php
          session_start();
          if (!isset($_SESSION['name'])) {
            echo '<li class="nav-item">' .
              '<a class="nav-link" href="login.html">Login</a>' .
              '</li>';
            echo '<li class="nav-item">' .
              '<a class="nav-link" href="signup.html">Signup</a>' .
              '</li>';
          } else {

            echo '<li class="nav-item">' .
              '<a class="nav-link" href="profile.php">Profile</a>' .
              '</li>';
            echo '<li class="nav-item">' .
              '<a class="nav-link" href="customerorderstrack.php">My Order</a>' .
              '</li>';
            echo '<li class="nav-item">' .
              '<a class="nav-link" href="logout.php">Logout</a>' .
              '</li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">OrderForm
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">OrderForm</li>
    </ol>

    <!-- Signup Form -->
    <div class="row">
      <div class="col-lg-8 mb-4">
        <form action="insertorder.php" method="POST">
          <div class="control-group form-group">
            <div class="controls">
              <label>Delivery Date:</label>
              <input type="date" class="form-control" id="date" name="date" placeholder="eg.YYYY-MM-DD" required data-validation-required-message="Please enter Delivery Date.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Delivery Time(In 24 clock):</label>
              <input type="time" class="form-control" id="timeslot" name="timeslot" placeholder="5pm to 6pm" required data-validation-required-message="Please enter Delivery Time in 24 formate">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Payment method:</label>
              <input type="text" class="form-control" id="payment_method" name="payment_method" placeholder="eg.Cash" required data-validation-required-message="Please enter your Payment Method.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Address:</label>
              <input type="text" class="form-control" id="service_address" name="service_address" placeholder="Enter address" required data-validation-required-message="Please enter your service_address.">
            </div>
          </div>

          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" id="loginButton">Submit</button>
        </form>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; favour4u 2018. Developed by (Aditya, Aakash, Sahil, Gaurav)</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>