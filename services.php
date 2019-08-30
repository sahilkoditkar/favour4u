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
    <h1 class="mt-4 mb-3">Services
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Service</li>
    </ol>


    <form action="services.php">
      <label>Select category to browse services</label>
      <select name="input">
        <option value="">--select--</option>
        <option value="All">All</option>
        <option value="Home_Maintenance">Home_Maintenance</option>
        <option value="Electronics_Appliances">Electronics_Appliances</option>
        <option value="Cleaning_Services">Cleaning_Services</option>
        <option value="Automobile_Services">Automobile_Services</option>
        <option value="Events_Occasions">Events_Occasions</option>
        <option value="Health_Services">Health_Services</option>
      </select>
      <br><br>
      <input type="submit" value="search">
    </form>


    <table class="table table-bordered ">
      <tr>
        <th>NAME</th>
        <th>Category</th>
        <th>Price</th>
        <th>Description</th>
        <th>Order</th>
      </tr>


      <?php
      session_start();
      include("connection.php");

      if ($_GET['input'] == "All")
        $query1 = "SELECT * FROM service";
      else
        $query1 = "SELECT * FROM service where category='" . mysqli_real_escape_string($link, $_GET['input']) . "'";

      if ($result = mysqli_query($link, $query1)) {
        while ($row = mysqli_fetch_array($result)) {
          if (SESSION)
            $index = "/order.php?sid=$row[1]";
          echo "<tr>";
          echo "<td>" . $row[2] . "</td>" . "<td>" . $row[3] . "</td>" . "<td>" . $row[4] . "</td>" . "<td>" . $row[5] . "</td>" . "<td><a href=$index >order</a></td>";
          echo "<tr>";
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