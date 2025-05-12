<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Profile - Berlin Cinema</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/icofont.css" />



  <title>Moviepoint - Online Movie,Vedio and TV Show php Template</title>
  <!-- Favicon Icon -->
  <link rel="icon" type="image/png" href="assets/img/favcion.png" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
  <!-- Slick nav CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css" media="all" />
  <!-- Iconfont CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all" />
  <!-- Owl carousel CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
  <!-- Popup CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
  <!-- Main style CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
  <!-- Responsive CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
  <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/php5shiv/3.7.3/php5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  <style>
    body {
      margin: 0;
      padding: 0;
      background-size: cover;
      color: white;
      font-family: 'Segoe UI', sans-serif;
    }

    .profile-box {
      max-width: 800px;
      margin: 120px auto;
      padding: 30px;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
    }

    .profile-avatar {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid white;
      margin-bottom: 20px;
    }

    .form-control {
      background: rgba(255, 255, 255, 0.15);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: white;
    }

    .form-control::placeholder {
      color: rgba(255, 255, 255, 0.6);
    }

    .form-label {
      font-weight: bold;
    }

    .btn-primary {
      background-color: #ff3d00;
      border: none;
    }

    .btn-primary:hover {
      background-color: #e63600;
    }

    footer {
      margin-top: 100px;
      padding: 40px 0;
      background: rgba(0, 0, 0, 0.85);
      color: #ccc;
    }

    footer .widget h4 {
      color: white;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"] {
      color: white;
    }
  </style>
</head>

<body>

  <!-- Page loader -->
  <div id="preloader"></div>
  <!-- header section start -->
  <header class="header">
    <div class="container">
      <div class="header-area">
        <div class="logo">
          <a href="index.php"><img src="assets/img/logo.png" alt="logo" /></a>
        </div>
        <div class="header-right">
          <form action="#">
            <select>
              <option value="Movies">Tittle</option>
              <option value="Movies">Category</option>
              <option value="Movies">Genre</option>
            </select>

            <input type="text" />

          </form>
          <ul>

            <li><a class="" href="index.php">Logout</a></li>
          </ul>
        </div>
        <div class="menu-area">
          <div class="responsive-menu"></div>
          <div class="mainmenu">
            <ul id="primary-menu">
              <li><a class="active" href="index-2.php">Home</a></li>
              <li><a href="movies.php">Movies</a></li>
              <li><a href="showtimes.php">showtimes</a></li>
              <li><a href="profile.php">profile</a></li>
              <li><a href="blog-2.php">News</a></li>
              <li><a href="movies-details-2.php">Movie Details <i class="icofont icofont-simple-down"></i></a>

              </li>
              <a class="theme-btn " href="tickets.php"><i class="icofont icofont-ticket"></i> Book Now</a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  </div>
  </div>
  <!--header section end -->
  <section class="breadcrumb-area1">
    <div class="container">
      <div class="row">

        <!-- Profile Form -->
        <div class="container profile-box text-center">
          <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="User Avatar" class="profile-avatar" />
          <h2 class="mb-4">Edit Your Profile</h2>

          <form method="POST" action="#">
            <div class="row mb-3">
              <div class="col-md-6">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="first_name" placeholder="Enter your first name" required />
              </div>
              <div class="col-md-6">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" name="last_name" placeholder="Enter your last name" required />
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter your email" required />
            </div>
            <div class="mb-3">
              <label class="form-label">Birthdate</label>
              <input type="date" class="form-control" name="birthdate" required />
            </div>
            <button type="submit" class="btn btn-primary px-4">Save Profile</button>
          </form>
        </div>
      </div>
    </div>
    </div>

  </section>

  <!-- footer section start -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-sm-6">
          <div class="widget">
            <img src="assets/img/logo.png" alt="about" />
            <p> Mühlenstraße, 10243 Berlin, Germany</p>
            <h6><span>Call us: </span>(+20)1069930446</h6>
          </div>

        </div>
        <div class="col-lg-2 col-sm-6">
          <div class="widget">
            <h4>Our Company</h4>
            <ul>
              <li><a href="">Our Brands</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">FAQs</a></li>
              <li><a href="#">Berlin Cinema Investor Connect </a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-sm-6">
          <div class="widget">
            <h4>Movies</h4>
            <ul>
              <li><a href="">Movies</a></li>
              <li><a href="#">Theatres</a></li>
              <li><a href="#">Ratings Information</a></li>
              <li><a href="#">IMAX at Berlin Cinema </a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-sm-6">
          <div class="widget">
            <h4>Legal</h4>
            <ul>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-sm-6">
          <div class="widget">
            <h4>Account</h4>
            <ul>
              <li><a href="">My Account</a></li>
              <li><a href="#">Watchlist</a></li>
              <li><a href="#">Collections</a></li>
              <li><a href="#">User Guide</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-2 col-sm-6">
          <div class="widget">
            <h4>Newsletter</h4>
            <p>Subscribe to our newsletter system now to get latest news from us.</p>
            <form action="#">
              <input type="text" placeholder="Enter your email.." />
              <button>SUBSCRIBE NOW</button>
            </form>
          </div>
        </div>
      </div>
      <hr />
    </div>
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-center text-lg-left">
            <div class="copyright-content">
              <p><a target="_blank" href="index.php">Berlin Cinema</a></p>
            </div>
          </div>
          <div class="col-lg-6 text-center text-lg-right">
            <div class="copyright-content">
              <a href="#" class="scrollToTop">
                Back to top<i class="icofont icofont-arrow-up"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- footer section end -->
  <!-- jquery main JS -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- Slick nav JS -->
  <script src="assets/js/jquery.slicknav.min.js"></script>
  <!-- owl carousel JS -->
  <script src="assets/js/owl.carousel.min.js"></script>
  <!-- Popup JS -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Isotope JS -->
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <!-- main JS -->
  <script src="assets/js/main.js"></script>
</body>

</html>