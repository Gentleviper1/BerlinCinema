<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
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
						<button><i class="icofont icofont-search"></i></button>
					</form>
					<ul>

						<li><a class="" href="../../Views/Auth/login.php">Login</a></li>
					</ul>
				</div>
				<div class="menu-area">
					<div class="responsive-menu"></div>
					<div class="mainmenu">
						<ul id="primary-menu">
							<li><a href="index.php">Home</a></li>
							<!--<li><a href="movies.php">Movies</a></li>-->
							<!-- <li><a href="celebrities.php">CelebritiesList</a></li> -->
							<li><a class="active" href="top-movies.php">Top Movies</a></li>
							<li><a href="blog.php">News</a></li>
							<li><a href="#">Pages <i class="icofont icofont-simple-down"></i></a>
							<li><a href="movies-details-2.php">Movie Details <i class="icofont icofont-simple-down"></i></a>
							</li>
							<a class="theme-btn" href="../../Views/Auth/login.php"><i class="icofont icofont-ticket"></i> Tickets</a>
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
						<h1>Top Movie Page</h1>
					</div>
				</div>
			</div>
		</div>
	</section><!-- breadcrumb area end -->
	<!-- portfolio section start -->
	<section class="portfolio-area pt-60">
		<div class="container">
			<div class="row flexbox-center">
				<div class="col-lg-6 text-center text-lg-left">
					<div class="section-title">
						<h1><i class="icofont icofont-movie"></i> Spotlight This Month</h1>
					</div>
				</div>
				<div class="col-lg-6 text-center text-lg-right">
					<div class="portfolio-menu">
						<ul>
							<li data-filter="*" class="active">Latest</li>
							<li data-filter=".soon">Comming Soon</li>
							<li data-filter=".top">Top Rated</li>
							<li data-filter=".released">Recently Released</li>
						</ul>
					</div>
				</div>
			</div>
			<hr />
			<div class="row portfolio-item">
				<!-- The Godfather -->
				<div class="col-lg-3 col-md-4 col-sm-6 soon released">
					<div class="single-portfolio">
						<div class="single-portfolio-img">
							<img src="assets/img/The God Father.jpg" alt="The Godfather" />
							<div class="rating-badge">R</div>
							<a href="https://www.youtube.com/watch?v=UaVTIH8mujA?si=Kl5I_WRov0m2JlcO" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
							<div class="movie-meta">
								<span class="duration"><i class="icofont icofont-clock-time"></i> 2h 55m</span>
								<span class="genre">Crime, Drama</span>
								<span class="release-date">1972</span>
							</div>
						</div>
						<div class="portfolio-content">
							<h4>The Godfather</h4>
							<div class="review">
								<div class="author-review">
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
								</div>
								<h4>180k voters</h4>
							</div>
							<!--  <a href="#" class="theme-btn "><i class="icofont icofont-ticket"></i> Get Ticket</a> -->
						</div>
					</div>
				</div>

				<!-- The Wolverine -->
				<div class="col-lg-3 col-md-4 col-sm-6 top">
					<div class="single-portfolio">
						<div class="single-portfolio-img">
							<img src="assets/img/the Wolverine.jpeg" alt="The Wolverine" />
							<div class="rating-badge">PG-13</div>
							<a href="https://www.youtube.com/watch?v=u1VCP3O8wG0?si=qzTF0VPLCyb6xNMK" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
							<div class="movie-meta">
								<span class="duration"><i class="icofont icofont-clock-time"></i> 2h 6m</span>
								<span class="genre">Action, Sci-Fi</span>
								<span class="release-date">2013</span>
							</div>
						</div>
						<div class="portfolio-content">
							<h4>The Wolverine</h4>
							<div class="review">
								<div class="author-review">
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
								</div>
								<h4>200k voters</h4>
							</div>
							<!--  <a href="#" class="theme-btn "><i class="icofont icofont-ticket"></i> Get Ticket</a> -->
						</div>
					</div>
				</div>

				<!-- Silence of the Lambs -->
				<div class="col-lg-3 col-md-4 col-sm-6 soon">
					<div class="single-portfolio">
						<div class="single-portfolio-img">
							<img src="assets/img/scilenceOfTheLambs.webp" alt="Silence of the Lambs" />
							<div class="rating-badge">R</div>
							<a href="https://www.youtube.com/watch?v=6iB21hsprAQ?si=9XixT2sz1OIQZqLc" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
							<div class="movie-meta">
								<span class="duration"><i class="icofont icofont-clock-time"></i> 1h 58m</span>
								<span class="genre">Crime, Thriller</span>
								<span class="release-date">1991</span>
							</div>
						</div>
						<div class="portfolio-content">
							<h4>Silence of the Lambs</h4>
							<div class="review">
								<div class="author-review">
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
								</div>
								<h4>130k voters</h4>
							</div>
							<!--  <a href="#" class="theme-btn "><i class="icofont icofont-ticket"></i> Get Ticket</a> -->
						</div>
					</div>
				</div>

				<!-- Until Dawn -->
				<div class="col-lg-3 col-md-4 col-sm-6 top released">
					<div class="single-portfolio">
						<div class="single-portfolio-img">
							<img src="assets/img/Until_dawn_movie.jpg" alt="Until Dawn" />
							<div class="rating-badge">R</div>
							<a href="https://www.youtube.com/watch?v=2b3vBaINZ7w?si=yfP26QMgMLAmWp6p" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
							<div class="movie-meta">
								<span class="duration"><i class="icofont icofont-clock-time"></i> 1h 45m</span>
								<span class="genre">Horror, Interactive</span>
								<span class="release-date">2024</span>
							</div>
						</div>
						<div class="portfolio-content">
							<h4>Until Dawn</h4>
							<div class="review">
								<div class="author-review">
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
								</div>
								<h4>236k voters</h4>
							</div>
							<!--  <a href="#" class="theme-btn "><i class="icofont icofont-ticket"></i> Get Ticket</a> -->
						</div>
					</div>
				</div>

				<!-- The Amateur -->
				<div class="col-lg-3 col-md-4 col-sm-6 released">
					<div class="single-portfolio">
						<div class="single-portfolio-img">
							<img src="assets/img/The amateur.jpg" alt="The Amateur" />
							<div class="rating-badge">PG-13</div>
							<a href="https://www.youtube.com/watch?v=DCWcK4c-F8Q?si=vRiyuZhyt7sHquEW" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
							<div class="movie-meta">
								<span class="duration"><i class="icofont icofont-clock-time"></i> 1h 52m</span>
								<span class="genre">Action, Thriller</span>
								<span class="release-date">2024</span>
							</div>
						</div>
						<div class="portfolio-content">
							<h4>The Amateur</h4>
							<div class="review">
								<div class="author-review">
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
								</div>
								<h4>335k voters</h4>
							</div>
							<!-- <a href="#" class="theme-btn "><i class="icofont icofont-ticket"></i> Get Ticket</a> -->
						</div>
					</div>
				</div>

				<!-- Lucy 2 -->
				<div class="col-lg-3 col-md-4 col-sm-6 soon top">
					<div class="single-portfolio">
						<div class="single-portfolio-img">
							<img src="assets/img/Lucy2.jpg" alt="Lucy 2" />
							<div class="rating-badge">R</div>
							<a href="https://www.youtube.com/watch?v=deMHi69NA1Q?si=trrN7Z-eQIhyZDSV" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
							<div class="movie-meta">
								<span class="duration"><i class="icofont icofont-clock-time"></i> 1h 49m</span>
								<span class="genre">Sci-Fi, Action</span>
								<span class="release-date">2024</span>
							</div>
						</div>
						<div class="portfolio-content">
							<h4>Lucy 2</h4>
							<div class="review">
								<div class="author-review">
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
								</div>
								<h4>270k voters</h4>
							</div>
							<!-- <a href="#" class="theme-btn "><i class="icofont icofont-ticket"></i> Get Ticket</a> -->
						</div>
					</div>
				</div>

				<!-- Unstoppable 2 -->
				<div class="col-lg-3 col-md-4 col-sm-6 soon">
					<div class="single-portfolio">
						<div class="single-portfolio-img">
							<img src="assets/img/unstoppable2.jpg" alt="Unstoppable 2" />
							<div class="rating-badge">PG-13</div>
							<a href="https://www.youtube.com/watch?v=fxEEdR2ZTDw?si=Yzde-LuKXvRqdtJR" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
							<div class="movie-meta">
								<span class="duration"><i class="icofont icofont-clock-time"></i> 1h 38m</span>
								<span class="genre">Action, Thriller</span>
								<span class="release-date">2024</span>
							</div>
						</div>
						<div class="portfolio-content">
							<h4>Unstoppable 2</h4>
							<div class="review">
								<div class="author-review">
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
								</div>
								<h4>360k voters</h4>
							</div>
							<!-- <a href="#" class="theme-btn "><i class="icofont icofont-ticket"></i> Get Ticket</a> -->
						</div>
					</div>
				</div>

				<!-- Extraction 3 -->
				<div class="col-lg-3 col-md-4 col-sm-6 top released">
					<div class="single-portfolio">
						<div class="single-portfolio-img">
							<img src="assets/img/Extraction 3.jpg" alt="Extraction 3" />
							<div class="rating-badge">R</div>
							<a href="https://www.youtube.com/watch?v=O_pCN2xPjSc?si=gNOMYJndooyysDxn" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
							<div class="movie-meta">
								<span class="duration"><i class="icofont icofont-clock-time"></i> 2h 7m</span>
								<span class="genre">Action, Thriller</span>
								<span class="release-date">2024</span>
							</div>
						</div>
						<div class="portfolio-content">
							<h4>Extraction 3</h4>
							<div class="review">
								<div class="author-review">
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
								</div>
								<h4>150k voters</h4>
							</div>
							<!-- <a href="#" class="theme-btn "><i class="icofont icofont-ticket"></i> Get Ticket</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- portfolio section end -->
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