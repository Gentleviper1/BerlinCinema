<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Book Tickets - Moviepoint</title>
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
    <!-- Tickets page CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/tickets.css" media="all" />
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
                                    <li class="nav-item"><a class="nav-link" href="movies.php">Movies</a></li>
                                    <li class="nav-item"><a class="nav-link" href="celebrities.php">Celebrities List</a></li>
                                    <li class="nav-item"><a class="nav-link" href="top-movies.php">Profile</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog.php">News</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                                        <li><a href="movies-details-2.php">Movie Details <i class="icofont icofont-simple-down"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header section end -->

    <!-- Ticket Booking Section -->
    <section class="tickets-section pt-60 pb-60">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h1><i class="icofont icofont-ticket"></i> Book Your Ticket</h1>
                <p>Select your movie, theatre hall, show time, seats, and number of tickets</p>
            </div>
            <form id="bookingForm" action="process_ticket.php" method="POST" class="row g-4 justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="mb-4">
                        <label for="movieSelect" class="form-label">Movie</label>
                        <select class="form-select theme-btn" id="movieSelect" name="movie" required>
                            <option value="" disabled selected>Select a movie</option>
                            <option value="DogMan">DogMan</option>
                            <option value="The Wolverine">The Wolverine</option>
                            <option value="Se7en">Se7en</option>
                            <option value="The Brutalist">The Brutalist</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="hallSelect" class="form-label">Theatre Hall</label>
                        <select class="form-select theme-btn" id="hallSelect" name="hall" required>
                            <option value="" disabled selected>Select a theatre hall</option>
                            <option value="Hall 1">Hall 1</option>
                            <option value="Hall 2">Hall 2</option>
                            <option value="Hall 3">Hall 3</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="showtimeSelect" class="form-label">Show Time</label>
                        <select class="form-select theme-btn" id="showtimeSelect" name="showtime" required>
                            <option value="" disabled selected>Select a show time</option>
                            <option value="10:00 AM">10:00 AM</option>
                            <option value="12:00 PM">12:00 PM</option>
                            <option value="4:00 PM">4:00 PM</option>
                            <option value="7:00 PM">7:00 PM</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Select Seats</label>
                        <div id="seatMap" aria-label="Seat selection map" role="region" tabindex="0">
                            <!-- Seat rows will be generated by JS -->
                        </div>
                        <input type="hidden" id="selectedSeats" name="selectedSeats" />
                    </div>
                    <div class="mb-4">
                        <label for="ticketCount" class="form-label">Number of Tickets</label>
                        <input type="number" class="form-control" id="ticketCount" name="ticketCount" min="1" value="1" required />
                    </div>
                    <div class="mb-4 d-flex justify-content-between align-items-center">
                        <div>
                            <label class="form-label mb-1">Price per Ticket</label>
                            <p id="ticketPrice" class="mb-0">$12.00</p>
                        </div>
                        <div>
                            <label class="form-label mb-1">Total Price</label>
                            <p id="totalPrice" class="mb-0">$12.00</p>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Proceed to Payment</button>
                    </div>
                </div>
            </form>
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