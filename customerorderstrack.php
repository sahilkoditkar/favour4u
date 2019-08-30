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
    <h1 class="mt-4 mb-3">My Order</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">My Order</li>
    </ol>


    <table class="table table-bordered ">
      <tr>
        <th>Service-Name</th>
        <th>Date</th>
        <th>Timeslot</th>
        <th>Service-Address</th>
        <th>Payment-Method</th>
        <th>Status</th>
      </tr>
      <?php
      session_start();
      include("connection.php");

      $query1 = "SELECT * from `order_info` natural join `service` where `order_info`.`cid`='" . mysqli_real_escape_string($link, $_SESSION['cid']) . "' order by date desc";

      if ($result = mysqli_query($link, $query1)) {
        while ($row = mysqli_fetch_array($result)) {
          if ($row['flag'] == 1) {
            if ($row['ratings'] == NULL) {
              $r = $row['oid'];
              $index = "/feedbackfill.php?oid=$r";
              echo "<tr>";
              echo "<td>" . $row['name'] . "</td>" . "<td>" . $row['date'] . "</td>" . "<td>" . $row['timeslot'] . "</td>" . "<td>" . $row['service_address'] . "</td>" . "<td>" . $row['payment_method'] . "</td>" . "<td><a href=$index >Add Feedback</a></td>";
              echo "<tr>";
            } else {

              echo "<tr>";
              echo "<td>" . $row['name'] . "</td>" . "<td>" . $row['date'] . "</td>" . "<td>" . $row['timeslot'] . "</td>" . "<td>" . $row['service_address'] . "</td>" . "<td>" . $row['payment_method'] . "</td>" . "<td> <a>Previous Order</a></td>";
              echo "<tr>";
            }
          } else {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>" . "<td>" . $row['date'] . "</td>" . "<td>" . $row['timeslot'] . "</td>" . "<td>" . $row['service_address'] . "</td>" . "<td>" . $row['payment_method'] . "</td>" . '<td><a> <font color="green">Upcoming Order</font></a></td>';
            echo "<tr>";
          }
        }
      }
      ?>

    </table>

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