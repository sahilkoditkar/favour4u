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
            if(!isset($_SESSION['name']))
            {
              echo '<li class="nav-item">'. 
                            '<a class="nav-link" href="login.html">Login</a>'.
                          '</li>';
              echo '<li class="nav-item">'. 
                            '<a class="nav-link" href="signup.html">Signup</a>'.
                          '</li>';
            }
            else
            {
                
              echo '<li class="nav-item">'. 
                            '<a class="nav-link" href="profile.php">Profile</a>'.
                          '</li>';
              echo '<li class="nav-item">'. 
                            '<a class="nav-link" href="customerorderstrack.php">My Order</a>'.
                          '</li>';
                echo '<li class="nav-item">'. 
                            '<a class="nav-link" href="logout.php">Logout</a>'.
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
      <h1 class="mt-4 mb-3">Contact</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>
      
      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJOxIRQX7AwjsRAIRcLlwzkj8&key=..."></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Contact Details</h3>
          <p>
            PES's MCOE, IT Dept,
            <br>Shivajinagar, Pune-05.
            <br>
          </p>
          <p>
            <abbr title="Phone">P</abbr>: 020-957988
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:favour4u@gmail.com">favour4u@gmail.com
            </a>
          </p>
          <p>
            <abbr title="Hours">H</abbr>: Monday - Friday
          </p>
        </div>
      </div>
      <!-- /.row -->
     
	  <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="images/sp.png" alt="">
        </div>
        <div class="col-lg-6">
          <h2>About Favour4u</h2>
          <p>Favour4u is a system which provides all services at doorstep of user that are included in daily needs. I.e. a Doctor, an Engineer, an Electrician, a plumber, a cobbler, a barber, a tailor, a key maker and many more.</p>
          <p>Our general observation is that, when people don’t get the services quickly they are looking for, they get frustrated. Our aim is to provide them these services ASAP and at the cheapest rate in the market. </p>
          <p>By providing these services we are reducing the frustration of people and helping them to save their money. </p>
          
        </div>
      </div>
      <!-- /.row -->
        
      <!-- Team Members -->
      <h2>Our Team</h2>

      <div class="row">
        
        <div class="col-lg-4 mb-4" style="max-width: 17rem;">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="images//aditya.jpg" alt="Aditya" width="750" height="450">
            <div class="card-body">
              <h4 class="card-title">Team Member</h4>
              <h6 class="card-subtitle mb-2 text-muted">Owner</h6>
              <p class="card-text">Aditya Choudhari</p>
            </div>
            <div class="card-footer">
              <a href="#">imadityac@gmail.com</a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 mb-4" style="max-width: 17rem;">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="images//aakash.jpg" alt="Aakash" width="750" height="450">
            <div class="card-body">
              <h4 class="card-title">Team Member</h4>
              <h6 class="card-subtitle mb-2 text-muted">Owner</h6>
              <p class="card-text">Aakash Kalore</p>
            </div>
            <div class="card-footer">
              <a href="#">aakashb.kalore@gmail.com</a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 mb-4" style="max-width: 18rem;">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="images//Sahil.jpg" alt="Sahil" width="750" height="450">
            <div class="card-body">
              <h4 class="card-title">Team Member</h4>
              <h6 class="card-subtitle mb-2 text-muted">Owner</h6>
              <p class="card-text">Sahil Koditkar</p>
            </div>
            <div class="card-footer">
              <a href="#">sahilkoditkar@gmail.com</a>
            </div>
          </div>
        </div>
        
          <div class="col-lg-4 mb-4" style="max-width: 19rem;">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="images//gaurav.jpg" alt="Gaurav" width="750" height="450">
            <div class="card-body">
              <h4 class="card-title">Team Member</h4>
              <h6 class="card-subtitle mb-2 text-muted">Owner</h6>
              <p class="card-text">Gaurav Pandit</p>
            </div>
            <div class="card-footer">
              <a href="#">gauravpandit1998@gmail.com</a>
            </div>
          </div>
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
