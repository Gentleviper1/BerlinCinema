<?php
session_start();
require_once '../../Control/MovieController.php';

// Get movies based on category
$category = isset($_GET['category']) ? $_GET['category'] : 'all';
switch($category) {
	case 'latest':
		$movies = getLatestMovies();
		break;
	case 'coming-soon':
		$movies = getComingSoonMovies();
		break;
	case 'top-rated':
		$movies = getTopRatedMovies();
		break;
	case 'released':
		$movies = getRecentlyReleasedMovies();
		break;
	default:
		$movies = getAllMovies();
		break;
}
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Moviepoint - Online Movie, Video and TV Show php Template</title>
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
	<style>
		/* Page Background */
		body {
			background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
			position: relative;
		}

		body::before {
			content: '';
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: url('https://images.unsplash.com/photo-1536440136628-849c177e76a1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
			opacity: 0.1;
			z-index: -1;
		}

		/* Rating Badge Styles */
		.rating-badge {
			position: absolute;
			top: 15px;
			right: 15px;
			width: 30px;
			height: 30px;
			background: rgba(0, 0, 0, 0.7);
			color: #fff;
			border-radius: 4px;
			display: flex;
			align-items: center;
			justify-content: center;
			font-weight: bold;
			font-size: 14px;
			border: 2px solid #fff;
			z-index: 2;
			text-shadow: 0 1px 1px rgba(0, 0, 0, 0.3);
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
		}

		/* Different colors for different ratings */
		.rating-badge {
			background: #e50914;
			/* Netflix red for R ratings */
			border-color: #e50914;
		}

		.rating-badge[data-rating="PG-13"] {
			background: linear-gradient(135deg, #f5c518 0%, #e6a905 100%);
			border-color: #d4a000;
			color: #000;
			text-shadow: 0 1px 1px rgba(255, 255, 255, 0.3);
			font-weight: 800;
			width: 34px;
			font-size: 12px;
			letter-spacing: -0.5px;
		}

		.rating-badge[data-rating="PG"] {
			background: #00a878;
			border-color: #00a878;
		}

		.rating-badge[data-rating="G"] {
			background: #0096ff;
			border-color: #0096ff;
		}

		/* Movie Meta Information Styles */
		.movie-meta {
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			background: rgba(0, 0, 0, 0.7);
			padding: 10px;
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			color: #fff;
			font-size: 12px;
			transition: all 0.3s ease;
		}

		.single-portfolio:hover .movie-meta {
			background: rgba(0, 0, 0, 0.9);
		}

		.movie-meta span {
			display: inline-flex;
			align-items: center;
			margin: 2px 0;
			padding: 2px 5px;
			border-radius: 3px;
			background: rgba(255, 255, 255, 0.1);
		}

		.movie-meta i {
			margin-right: 5px;
			color: #e4d804;
		}

		.duration {
			color: #fff;
		}

		.genre {
			color: #e4d804;
			font-weight: 500;
		}

		.release-date {
			background: #e4d804 !important;
			color: #000;
			font-weight: bold;
		}

		/* Ticket Button Styles */
		.ticket-btn {
			display: block;
			width: 100%;
			text-align: center;
			margin: 15px auto 0;
			padding: 8px 15px;
			font-size: 14px;
			background: #e4d804;
			color: #000;
			border: none;
			transition: all 0.3s ease;
			border-radius: 4px;
		}

		.ticket-btn:hover {
			background: #f5e642;
			color: #000;
			transform: translateY(-2px);
			box-shadow: 0 5px 15px rgba(228, 216, 4, 0.3);
		}

		.ticket-btn i {
			margin-right: 5px;
		}

		/* Center the button container */
		.portfolio-content {
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		/* Hover effect */
		.single-portfolio:hover .rating-badge {
			transform: scale(1.1);
			transition: transform 0.3s ease;
		}

		/* Responsive adjustments */
		@media (max-width: 767px) {
			.movie-meta {
				font-size: 10px;
				padding: 5px;
			}

			.movie-meta span {
				padding: 1px 3px;
			}

			.ticket-btn {
				padding: 6px 10px;
				font-size: 12px;
			}
		}

		/* تحسينات إضافية للتصفية */
		.portfolio-item {
			transition: all 0.3s ease;
		}

		.portfolio-menu li {
			position: relative;
			overflow: hidden;
		}

		.portfolio-menu li::after {
			content: '';
			position: absolute;
			bottom: 0;
			left: 50%;
			width: 0;
			height: 2px;
			background: #e50914;
			transition: all 0.3s ease;
			transform: translateX(-50%);
		}

		.portfolio-menu li:hover::after,
		.portfolio-menu li.active::after {
			width: 100%;
		}

		/* تحسين تأثيرات الانتقال */
		.movie-card {
			transition: all 0.4s ease;
		}

		/* إزالة تأثيرات الاختفاء */
		.portfolio-item.hidden {
			display: none;
		}

		/* Movie Grid Layout */
		.portfolio-item {
			display: grid;
			grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
			gap: 30px;
			padding: 20px 0;
		}

		.movie-card {
			background: rgba(26, 26, 26, 0.95);
			border-radius: 10px;
			overflow: hidden;
			box-shadow: 0 5px 15px rgba(0,0,0,0.3);
			transition: all 0.3s ease;
			height: 100%;
			display: flex;
			flex-direction: column;
			position: relative;
			backdrop-filter: blur(5px);
		}

		.movie-card:hover {
			transform: translateY(-5px);
		}

		.movie-poster {
			position: relative;
			width: 100%;
			height: 400px;
			overflow: hidden;
		}

		.movie-poster img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			transition: transform 0.3s ease;
		}

		.movie-card:hover .movie-poster img {
			transform: scale(1.05);
		}

		.movie-info {
			padding: 20px;
			flex-grow: 1;
			display: flex;
			flex-direction: column;
		}

		.movie-title {
			font-size: 20px;
			color: #fff;
			margin-bottom: 10px;
			font-weight: 600;
		}

		.movie-description {
			color: #ccc;
			font-size: 14px;
			margin-bottom: 15px;
			flex-grow: 1;
		}

		.movie-meta {
			background: rgba(0,0,0,0.8);
			padding: 10px;
			margin-bottom: 15px;
			border-radius: 5px;
		}

		.movie-price {
			font-size: 24px;
			color: #9B6B9E;
			font-weight: bold;
			margin-bottom: 15px;
		}

		.movie-actions {
			margin-top: auto;
		}

		.btn-success {
			background: #e4d804;
			color: #000;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			font-weight: 600;
			width: 100%;
			text-align: center;
			transition: all 0.3s ease;
		}

		.btn-success:hover {
			background: #f5e642;
			transform: translateY(-2px);
		}

		/* Portfolio Section */
		.portfolio-area {
			padding: 60px 0;
			background: transparent;
			position: relative;
			min-height: calc(100vh - 400px); /* Adjust based on your header/footer height */
		}

		.portfolio-menu {
			margin-bottom: 20px;
		}

		.portfolio-menu ul {
			display: flex;
			justify-content: center;
			gap: 10px;
			flex-wrap: nowrap;
			padding: 0;
			margin: 0;
		}

		.portfolio-menu li {
			padding: 6px 12px;
			background: #6B4E71;
			border-radius: 5px;
			cursor: pointer;
			transition: all 0.3s ease;
			font-size: 13px;
			white-space: nowrap;
		}

		.portfolio-menu li a {
			color: #fff;
			text-decoration: none;
			display: block;
		}

		.portfolio-menu li.active,
		.portfolio-menu li:hover {
			background: #9B6B9E;
		}

		/* Section Title Adjustments */
		.section-title {
			margin-bottom: 0;
		}

		.section-title h1 {
			font-size: 20px;
			margin: 0;
			color: #9B6B9E;
		}

		/* Row Adjustments */
		.row.flexbox-center {
			align-items: center;
			margin-bottom: 15px;
		}

		/* Responsive Adjustments */
		@media (max-width: 768px) {
			.portfolio-menu ul {
				gap: 5px;
			}

			.portfolio-menu li {
				padding: 4px 8px;
				font-size: 12px;
			}

			.section-title h1 {
				font-size: 18px;
			}
		}

		/* Fix Footer Issue */
		.footer {
			position: relative;
			margin-top: 60px;
			background: #0a0a0a;
			padding-top: 60px;
		}

		/* Book Now Button Styles */
		.book-now-btn {
			display: inline-block;
			width: 80%;
			padding: 8px 15px;
			background: linear-gradient(45deg, #6B4E71, #9B6B9E);
			color: #fff;
			text-decoration: none;
			border-radius: 5px;
			font-weight: 600;
			text-align: center;
			transition: all 0.3s ease;
			border: none;
			cursor: pointer;
			position: relative;
			overflow: hidden;
			margin: 10px auto;
			font-size: 14px;
		}

		.book-now-btn i {
			margin-right: 5px;
			font-size: 14px;
		}

		.book-now-btn:hover {
			transform: translateY(-2px);
			box-shadow: 0 3px 10px rgba(107, 78, 113, 0.3);
			background: linear-gradient(45deg, #9B6B9E, #6B4E71);
		}

		/* Movie Genre Styles */
		.movie-genre {
			text-align: center;
			color: #9B6B9E;
			font-size: 13px;
			margin-top: 5px;
			padding: 5px 10px;
			background: rgba(107, 78, 113, 0.1);
			border-radius: 3px;
			display: inline-block;
			width: 80%;
			margin: 5px auto;
		}

		.movie-actions {
			margin-top: auto;
			padding: 10px 0;
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		/* Portfolio Menu Styles */
		.portfolio-menu li.active,
		.portfolio-menu li:hover {
			background: #9B6B9E;
			color: #fff;
		}

		/* Responsive Adjustments */
		@media (max-width: 768px) {
			.book-now-btn {
				width: 90%;
				padding: 6px 12px;
				font-size: 13px;
			}

			.movie-genre {
				font-size: 12px;
				width: 90%;
			}
		}

		/* Breadcrumb Area */
		.breadcrumb-area {
			background: rgba(26, 26, 26, 0.95);
			backdrop-filter: blur(5px);
		}

		.breadcrumb-area-content h1 {
			color: #9B6B9E;
		}

		/* Screen Styles */
		.screen {
			position: relative;
			width: 100%;
			height: 100px;
			background: linear-gradient(45deg, #1a1a1a, #2d2d2d);
			border-radius: 50% / 10%;
			margin: 30px 0;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
			overflow: hidden;
		}

		.screen::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: linear-gradient(
				to bottom,
				rgba(255, 255, 255, 0.1) 0%,
				rgba(255, 255, 255, 0.05) 50%,
				rgba(255, 255, 255, 0) 100%
			);
			pointer-events: none;
		}

		.screen::after {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: radial-gradient(
				circle at center,
				rgba(255, 255, 255, 0.1) 0%,
				rgba(255, 255, 255, 0) 70%
			);
			pointer-events: none;
		}

		.screen-content {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 90%;
			height: 80%;
			background: rgba(0, 0, 0, 0.3);
			border-radius: 5px;
			display: flex;
			align-items: center;
			justify-content: center;
			color: #9B6B9E;
			font-size: 24px;
			font-weight: bold;
			text-shadow: 0 0 10px rgba(155, 107, 158, 0.5);
			letter-spacing: 2px;
		}

		.screen-content::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: linear-gradient(
				45deg,
				rgba(155, 107, 158, 0.1) 0%,
				rgba(155, 107, 158, 0) 100%
			);
			animation: screenGlow 3s infinite;
		}

		@keyframes screenGlow {
			0% {
				opacity: 0.5;
			}
			50% {
				opacity: 0.8;
			}
			100% {
				opacity: 0.5;
			}
		}

		/* Add screen to the portfolio section */
		.portfolio-area {
			position: relative;
		}

		.portfolio-area::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			height: 200px;
			background: linear-gradient(
				to bottom,
				rgba(26, 26, 26, 0.95) 0%,
				rgba(26, 26, 26, 0) 100%
			);
			pointer-events: none;
			z-index: 1;
		}
	</style>
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
						<li><a class="" href="index.php">Logout</a></li>
					</ul>
				</div>
				<div class="menu-area">
					<div class="responsive-menu"></div>
					<div class="mainmenu">
						<ul id="primary-menu">
							<li><a href="index-2.php">Home</a></li>
							<li><a class="active" href="movies.php">Movies</a></li>
							<li><a href="showtimes.php">showtimes</a></li>
							<li><a href="profile.php">profile</a></li>
							<li><a href="blog-2.php">News</a></li>
							<li><a href="movies-details-2.php">Movie Details <i class="icofont icofont-simple-down"></i></a>
							</li>
							<a class="theme-btn" href="tickets.php"><i class="icofont icofont-ticket"></i> Tickets</a>
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
						<h1>Welcome to Berlin Cinema</h1>
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
							<li class="<?php echo $category === 'all' ? 'active' : ''; ?>">
								<a href="?category=all">All Movies</a>
							</li>
							<li class="<?php echo $category === 'latest' ? 'active' : ''; ?>">
								<a href="?category=latest">Latest</a>
							</li>
							<li class="<?php echo $category === 'coming-soon' ? 'active' : ''; ?>">
								<a href="?category=coming-soon">Coming Soon</a>
							</li>
							<li class="<?php echo $category === 'top-rated' ? 'active' : ''; ?>">
								<a href="?category=top-rated">Top Rated</a>
							</li>
							<li class="<?php echo $category === 'released' ? 'active' : ''; ?>">
								<a href="?category=released">Released</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<hr />
			<div class="row portfolio-item">
				<?php if ($movies && count($movies) > 0): ?>
					<?php foreach ($movies as $movie): ?>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="movie-card">
								<div class="movie-poster">
									<img src="<?php echo htmlspecialchars($movie['poster_url']); ?>" 
										 alt="<?php echo htmlspecialchars($movie['title']); ?>">
								</div>
								<div class="movie-info">
									<h3 class="movie-title"><?php echo htmlspecialchars($movie['title']); ?></h3>
									<p class="movie-description"><?php echo htmlspecialchars($movie['description']); ?></p>
									<div class="movie-meta">
										<span class="movie-duration">
											<i class="icofont icofont-clock-time"></i>
											<?php echo htmlspecialchars($movie['duration']); ?> min
										</span>
									</div>
									<div class="movie-price">
										$<?php echo htmlspecialchars($movie['price']); ?>
									</div>
									<div class="movie-actions">
										<a href="book-ticket.php?id=<?php echo $movie['movie_id']; ?>" 
										   class="book-now-btn">
											<i class="icofont icofont-ticket"></i>
											Book Now
										</a>
										<div class="movie-genre">
											<?php echo htmlspecialchars($movie['genre']); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php else: ?>
					<div class="col-12">
						<div class="alert alert-info">
							<i class="icofont icofont-info-circle"></i>
							No movies available at the moment.
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section><!-- portfolio section end -->

	<!-- Add screen div after the portfolio menu -->
	<div class="screen">
		<div class="screen-content">
			BERLIN CINEMA
		</div>
	</div>

	<!-- footer section start -->
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