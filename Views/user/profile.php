<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User Profile - Moviepoint</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="assets/img/favcion.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
    <!-- Slick nav CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css" media="all" />
    <!-- Iconfont CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all" />
    <!-- Owl carousel CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css" />
    <!-- Popup CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css" />
    <!-- Main style CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
</head>

<body>
    <!-- Page loader -->
    <div id="preloader"></div>
    <!-- header section start -->
    <header class="header">
        <div class="container">
            <div class="header-area d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="index.php"><img src="assets/img/logo.png" alt="logo" /></a>
                </div>
                <div class="header-right d-flex align-items-center">
                    <form class="d-flex me-3" action="#">
                        <select class="form-select me-2" style="width: 120px;">
                            <option value="Movies">Tittle</option>
                            <option value="Movies">Category</option>
                            <option value="Movies">Genre</option>
                        </select>
                        <input type="text" class="form-control me-2" placeholder="Search..." />
                        <button class="btn btn-primary"><i class="icofont icofont-search"></i></button>
                    </form>
                    <ul class="navbar-nav flex-row m-0 align-items-start" style="margin-top: -8px;">
                        <li class="nav-item"><a class="nav-link" href="../../Auth/login.php">Login</a></li>
                    </ul>
                </div>
                <div class="menu-area">
                    <div class="responsive-menu"></div>
                    <nav class="mainmenu navbar navbar-expand-lg p-0">
                        <div class="container-fluid p-0">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul id="primary-menu" class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                                    <!--  <li class="nav-item"><a class="nav-link" href="movies.php">Movies</a></li>-->
                                    <li class="nav-item"><a class="nav-link" href="celebrities.php">CelebritiesList</a></li>
                                    <li class="nav-item"><a class="nav-link" href="top-movies.php">Top Movies</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog.php">News</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                                        <li><a href="movies-details-2.php">Movie Details <i class="icofont icofont-simple-down"></i></a>
                                    </li>
                                    <li class="nav-item"><a class="btn btn-theme" href="#"><i class="icofont icofont-ticket"></i> Tickets</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header section end -->

    <!-- User Profile Section -->
    <section class="user-profile-section pt-60 pb-60">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h1><i class="icofont icofont-user"></i> User Profile</h1>
                <p>Manage your profile information</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card p-4 shadow-sm">
                        <div class="text-center mb-4">
                            <img src="assets/img/user-avatar.png" alt="User Avatar" class="rounded-circle" width="120" height="120" />
                        </div>
                        <form>
                            <div class="mb-3">
                                <label for="userName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="userName" value="John Doe" />
                            </div>
                            <div class="mb-3">
                                <label for="userEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="userEmail" value="john.doe@example.com" />
                            </div>
                            <div class="mb-3">
                                <label for="userPhone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="userPhone" value="+1234567890" />
                            </div>
                            <div class="mb-3">
                                <label for="userAddress" class="form-label">Address</label>
                                <textarea class="form-control" id="userAddress" rows="3">123 Main St, City, Country</textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </div>
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