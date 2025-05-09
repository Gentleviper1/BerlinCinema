<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                            <li><a href="#">Pages <i class="icofont icofont-simple-down"></i></a>
                                <ul>
                                    <li><a href="blog-details-2.php">Blog Details</a></li>
                                    <li><a href="movies-details-2.php">Movie Details</a></li>
                                </ul>
                            </li>
                            <a class="theme-btn " href="tickets.php"><i class="icofont icofont-ticket"></i> Book Now</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- header section end -->
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-content">
                        <!-- Main content -->
                        <section class="">
                            <div class="container">
                                <div class="section-title text-center mb-4">
                                    <h1><i class="icofont icofont-calendar"></i> Showtimes</h1>
                                    
                                        <h2>Check out the latest movie showtimes below</h2>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered text-center align-middle">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>Movie</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Screen</th>
                                                <th>Availability</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>DogMan</td>
                                                <td>2024-06-15</td>
                                                <td>12:00 PM (Noon)</td>
                                                <td>Screen 1</td>
                                                <td><span class="badge bg-success">Available</span></td>
                                            </tr>
                                            <tr>
                                                <td>The Wolverine</td>
                                                <td>2024-06-15</td>
                                                <td>12:00 AM (Midnight)</td>
                                                <td>Screen 2</td>
                                                <td><span class="badge bg-danger">Sold Out</span></td>
                                            </tr>
                                            <tr>
                                                <td>Se7en</td>
                                                <td>2024-06-16</td>
                                                <td>03:00 PM</td>
                                                <td>Screen 3</td>
                                                <td><span class="badge bg-success">Available</span></td>
                                            </tr>
                                            <tr>
                                                <td>The Brutalist</td>
                                                <td>2024-06-16</td>
                                                <td>06:00 PM</td>
                                                <td>Screen 4</td>
                                                <td><span class="badge bg-warning text-dark">Limited</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- breadcrumb area end -->

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