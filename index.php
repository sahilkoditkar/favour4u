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

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('images/MSP3.jpg'); background-size: 100% 100%;">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/MSP2.jpg'); background-size: 100% 100%;">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/MSP1.jpg'); background-size: 100% 100%;">
          <div class="carousel-caption d-none d-md-block">

          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h2 class="my-4">Welcome to favour4u The Service Expert</h2>

    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="/services.php?input=Home_Maintenance"><img class="card-img-top" src="images/sp1_home.jpg" alt="" width="300" height="200"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="/services.php?input=Home_Maintenance">Home Maintenance</a>
            </h4>
            <p class="card-text"></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="/services.php?input=Electronics_Appliances"><img class="card-img-top" src="images/sp2_elec.jpg" alt="" width="300" height="200"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="/services.php?input=Electronics_Appliances">Electronics and Appliances</a>
            </h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="/services.php?input=Cleaning_Services"><img class="card-img-top" src="images/sp3_clean.jpg" alt="" width="300" height="200"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="/services.php?input=Cleaning_Services">Cleaning Services</a>
            </h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="/services.php?input=Automobile_Services"><img class="card-img-top" src="images/sp4_auto.jpg" alt="" width="300" height="200"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="/services.php?input=Automobile_Services">Automobile Services</a>
            </h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="/services.php?input=Events_Occasions"><img class="card-img-top" src="images/sp5_event.jpg" alt="" width="300" height="200"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="/services.php?input=Events_Occasions">Events and Occasions</a>
            </h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="/services.php?input=Health_Services"><img class="card-img-top" src="images/sp6_health.jpg" alt="" width="300" height="200"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="/services.php?input=Health_Services">Health Services</a>
            </h4>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>Why to choose favour4u ?</h2>
        <p>The favour4u includes:</p>
        <ul>
          <li>Hire the professional of your choice.</li>
          <li>Background verified, Experienced professionals at your service.</li>
          <li>Working contact form with validation</li>
        </ul>
        <p>Fast, efficient, and honest, favour4u has become a reputable and well-known service provider. Our team is up for every job, managing projects with the skill and experience our clients have come to expect. We want our customers to be satisfied with our work, which is why we provide open communication channels throughout the duration of each project.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="images/sp.png" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p>Become a Service Provider at favour4u today.</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="serviceprovider.html">become a Service Provider</a>
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