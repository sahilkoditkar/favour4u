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
            <a class="nav-link" href="contactsp.php">Contact</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <h1 class="mt-4 mb-3">Services</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="spbuttons.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Login-Signup</li>
    </ol>

    <?php
    include("connection.php");
    $query = "UPDATE `order_info` SET `flag` = '1' WHERE `order_info`.`oid` = " . $_GET['oid'];
    $result = mysqli_query($link, $query);
    if ($result) {
      echo '<ol>Order (Service Request) Successfully Completed!!</ol>';
    } else {
      echo "CANT GO DIRECTLY!!! AUTHENTICATION REQ!!";
    }
    ?>

    <div class="row">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <a href="showsporder.php" class="btn btn-primary">New Orders</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <a href="sporderstrack.php" class="btn btn-primary" role="button">Orders Completed</a>
        </div>
      </div>
    </div>

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