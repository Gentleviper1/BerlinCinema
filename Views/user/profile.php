<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User Profile - Berlin Cinema</title>
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
    <!-- Custom Profile CSS -->
    <style>
        :root {
            --primary-color: #e4d804;
            --primary-dark: #d1c500;
            --dark-color: #1a1a1a;
            --light-color: #f8f9fa;
            --gray-color: #6c757d;
        }
        
        .user-profile-section {
            background-color: #f5f5f5;
            min-height: calc(100vh - 150px);
            padding: 60px 0;
        }
        
        .profile-card {
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border: none;
            background: #fff;
        }
        
        .profile-header {
            background: linear-gradient(to right, #1a1a1a, #2a2a2a);
            color: white;
            padding: 2rem 0;
            text-align: center;
            position: relative;
        }
        
        .avatar-container {
            position: relative;
            display: inline-block;
            margin-bottom: 1rem;
        }
        
        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--primary-color);
        }
        
        .avatar-upload {
            position: absolute;
            bottom: 5px;
            right: 5px;
            background: var(--primary-color);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }
        
        .avatar-upload:hover {
            background: var(--primary-dark);
        }
        
        .profile-name {
            font-weight: 700;
            margin-bottom: 0.5rem;
            font-size: 1.5rem;
        }
        
        .profile-meta {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
        }
        
        .profile-badge {
            display: inline-block;
            background: var(--primary-color);
            color: var(--dark-color);
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-top: 0.5rem;
        }
        
        .nav-tabs {
            border-bottom: 1px solid #dee2e6;
            background: #f8f9fa;
        }
        
        .nav-tabs .nav-link {
            color: var(--gray-color);
            font-weight: 600;
            border: none;
            padding: 1rem 1.5rem;
            border-bottom: 3px solid transparent;
        }
        
        .nav-tabs .nav-link.active {
            color: var(--primary-color);
            background: transparent;
            border-bottom: 3px solid var(--primary-color);
        }
        
        .profile-tab-content {
            padding: 2rem;
            background: #fff;
        }
        
        .form-label {
            font-weight: 600;
            color: var(--dark-color);
        }
        
        .form-control, .form-select {
            border-radius: 3px;
            padding: 0.75rem 1rem;
            border: 1px solid #ced4da;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(228, 216, 4, 0.25);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: var(--dark-color);
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border-radius: 3px;
        }
        
        .btn-primary:hover, .btn-primary:focus {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            color: var(--dark-color);
        }
        
        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
            font-weight: 600;
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            color: var(--dark-color);
        }
        
        .genre-tag {
            display: inline-block;
            background-color: #f0f0f0;
            padding: 0.5rem 1rem;
            border-radius: 3px;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            cursor: pointer;
        }
        
        .genre-tag.selected {
            background-color: var(--primary-color);
            color: var(--dark-color);
            font-weight: 600;
        }
        
        .movie-card {
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
            background: #fff;
        }
        
        .movie-poster {
            height: 120px;
            object-fit: cover;
            width: 100%;
        }
        
        .movie-title {
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }
        
        .movie-meta {
            font-size: 0.8rem;
            color: var(--gray-color);
        }
        
        .rating-stars {
            color: var(--primary-color);
            font-size: 0.9rem;
        }
        
        .edit-mode .form-control, .edit-mode .form-select {
            background-color: #fff;
        }
        
        .view-mode .form-control, .view-mode .form-select {
            background-color: #f8f9fa;
            border-color: transparent;
            cursor: default;
        }
        
        @media (max-width: 768px) {
            .profile-avatar {
                width: 80px;
                height: 80px;
            }
            
            .profile-header {
                padding: 1.5rem 0;
            }
            
            .nav-tabs .nav-link {
                padding: 0.75rem;
                font-size: 0.9rem;
            }
            
            .profile-tab-content {
                padding: 1.5rem;
            }
        }
    </style>
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
    <section class="user-profile-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="profile-card card">
                        <!-- Profile Header -->
                        <div class="profile-header">
                            <div class="avatar-container">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User Avatar" class="profile-avatar" id="profileAvatar">
                                <div class="avatar-upload d-none" id="avatarUploadBtn">
                                    <i class="icofont icofont-camera"></i>
                                    <input type="file" id="avatarInput" accept="image/*" class="d-none">
                                </div>
                            </div>
                            <h3 class="profile-name" id="profileNameDisplay">John Doe</h3>
                            <div class="profile-meta">
                                <span>Member since: Jan 2022</span>
                                <span class="mx-2">•</span>
                                <span>Premium Member</span>
                            </div>
                            <div class="profile-badge">
                                <i class="icofont icofont-star"></i> Movie Buff
                            </div>
                        </div>
                        
                        <!-- Profile Tabs -->
                        <ul class="nav nav-tabs" id="profileTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab">Profile Info</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preferences-tab" data-bs-toggle="tab" data-bs-target="#preferences" type="button" role="tab">Preferences</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="activity-tab" data-bs-toggle="tab" data-bs-target="#activity" type="button" role="tab">Activity</button>
                            </li>
                        </ul>
                        
                        <!-- Tab Content -->
                        <div class="tab-content profile-tab-content">
                            <!-- Profile Info Tab -->
                            <div class="tab-pane fade show active view-mode" id="info" role="tabpanel">
                                <form id="profileForm">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="firstName" value="John" readonly>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="lastName" value="Doe" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" value="john.doe@example.com" readonly>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="phone" class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" id="phone" value="+1234567890" readonly>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="birthdate" class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control" id="birthdate" value="1990-05-15" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea class="form-control" id="address" rows="2" readonly>123 Main St, Berlin, Germany</textarea>
                                    </div>
                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="button" class="btn btn-outline-primary me-2" id="editProfileBtn">
                                            <i class="icofont icofont-edit"></i> Edit Profile
                                        </button>
                                    </div>
                                </form>
                            </div>
                            
                            <!-- Preferences Tab -->
                            <div class="tab-pane fade" id="preferences" role="tabpanel">
                                <h5 class="mb-4">Favorite Genres</h5>
                                <div class="mb-4">
                                    <div class="genre-tags">
                                        <span class="genre-tag selected">Action</span>
                                        <span class="genre-tag">Adventure</span>
                                        <span class="genre-tag selected">Comedy</span>
                                        <span class="genre-tag">Drama</span>
                                        <span class="genre-tag">Horror</span>
                                        <span class="genre-tag">Sci-Fi</span>
                                        <span class="genre-tag selected">Thriller</span>
                                        <span class="genre-tag">Romance</span>
                                        <span class="genre-tag">Animation</span>
                                    </div>
                                </div>
                                
                                <h5 class="mb-4">Notification Preferences</h5>
                                <div class="mb-4">
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" id="newReleases" checked>
                                        <label class="form-check-label" for="newReleases">New Releases</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" id="recommendations" checked>
                                        <label class="form-check-label" for="recommendations">Personalized Recommendations</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" id="specialOffers">
                                        <label class="form-check-label" for="specialOffers">Special Offers</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" id="newsletter" checked>
                                        <label class="form-check-label" for="newsletter">Monthly Newsletter</label>
                                    </div>
                                </div>
                                
                                <h5 class="mb-4">Account Settings</h5>
                                <div class="mb-3">
                                    <label for="language" class="form-label">Preferred Language</label>
                                    <select class="form-select" id="language">
                                        <option selected>English</option>
                                        <option>German</option>
                                        <option>French</option>
                                        <option>Spanish</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="region" class="form-label">Region</label>
                                    <select class="form-select" id="region">
                                        <option selected>Germany</option>
                                        <option>United States</option>
                                        <option>United Kingdom</option>
                                        <option>France</option>
                                    </select>
                                </div>
                                
                                <div class="d-flex justify-content-end mt-4">
                                    <button type="button" class="btn btn-primary">
                                        <i class="icofont icofont-save"></i> Save Preferences
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Activity Tab -->
                            <div class="tab-pane fade" id="activity" role="tabpanel">
                                <h5 class="mb-4">Recently Viewed</h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="movie-card">
                                            <img src="https://via.placeholder.com/300x450" alt="Movie Poster" class="movie-poster">
                                            <div class="p-3">
                                                <h6 class="movie-title">The Dark Knight</h6>
                                                <div class="movie-meta">2022-05-10</div>
                                                <div class="rating-stars">
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="movie-card">
                                            <img src="https://via.placeholder.com/300x450" alt="Movie Poster" class="movie-poster">
                                            <div class="p-3">
                                                <h6 class="movie-title">Inception</h6>
                                                <div class="movie-meta">2022-05-08</div>
                                                <div class="rating-stars">
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star-half"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="movie-card">
                                            <img src="https://via.placeholder.com/300x450" alt="Movie Poster" class="movie-poster">
                                            <div class="p-3">
                                                <h6 class="movie-title">Interstellar</h6>
                                                <div class="movie-meta">2022-05-05</div>
                                                <div class="rating-stars">
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <h5 class="mt-5 mb-4">Your Reviews</h5>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-2">
                                            <h6 class="mb-0">The Dark Knight</h6>
                                            <div class="rating-stars">
                                                <i class="icofont icofont-star"></i>
                                                <i class="icofont icofont-star"></i>
                                                <i class="icofont icofont-star"></i>
                                                <i class="icofont icofont-star"></i>
                                                <i class="icofont icofont-star"></i>
                                            </div>
                                        </div>
                                        <p class="mb-2">One of the best superhero movies ever made. Heath Ledger's performance as the Joker is legendary.</p>
                                        <small class="text-muted">Posted on May 10, 2022</small>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-2">
                                            <h6 class="mb-0">Inception</h6>
                                            <div class="rating-stars">
                                                <i class="icofont icofont-star"></i>
                                                <i class="icofont icofont-star"></i>
                                                <i class="icofont icofont-star"></i>
                                                <i class="icofont icofont-star"></i>
                                                <i class="icofont icofont-star-half"></i>
                                            </div>
                                        </div>
                                        <p class="mb-2">Mind-bending and visually stunning. Christopher Nolan at his best.</p>
                                        <small class="text-muted">Posted on May 8, 2022</small>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <li><a href="#">Berlin Cinema Investor Connect</a></li>
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
                            <li><a href="#">IMAX at Berlin Cinema</a></li>
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
    <!-- Owl carousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Popup JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Isotope JS -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- main JS -->
    <script src="assets/js/main.js"></script>
    
    <!-- Custom Profile JS -->
    <script>
        $(document).ready(function() {
            // Toggle edit mode
            $('#editProfileBtn').click(function() {
                $('#info').removeClass('view-mode').addClass('edit-mode');
                $('#info .form-control').prop('readonly', false);
                $('#avatarUploadBtn').removeClass('d-none');
                
                $(this).replaceWith(`
                    <button type="button" class="btn btn-primary me-2" id="saveProfileBtn">
                        <i class="icofont icofont-save"></i> Save Changes
                    </button>
                    <button type="button" class="btn btn-secondary" id="cancelEditBtn">
                        <i class="icofont icofont-close"></i> Cancel
                    </button>
                `);
            });
            
            // Handle save/cancel buttons (delegated event)
            $(document).on('click', '#saveProfileBtn', function() {
                // Update displayed name
                const firstName = $('#firstName').val();
                const lastName = $('#lastName').val();
                $('#profileNameDisplay').text(`${firstName} ${lastName}`);
                
                // Switch back to view mode
                $('#info').removeClass('edit-mode').addClass('view-mode');
                $('#info .form-control').prop('readonly', true);
                $('#avatarUploadBtn').addClass('d-none');
                
                // Show success message
                alert('Profile updated successfully!');
                
                // Restore edit button
                $('#saveProfileBtn, #cancelEditBtn').replaceWith(`
                    <button type="button" class="btn btn-outline-primary me-2" id="editProfileBtn">
                        <i class="icofont icofont-edit"></i> Edit Profile
                    </button>
                `);
            });
            
            $(document).on('click', '#cancelEditBtn', function() {
                // Reset form values
                $('#firstName').val('John');
                $('#lastName').val('Doe');
                $('#email').val('john.doe@example.com');
                $('#phone').val('+1234567890');
                $('#birthdate').val('1990-05-15');
                $('#address').val('123 Main St, Berlin, Germany');
                
                // Switch back to view mode
                $('#info').removeClass('edit-mode').addClass('view-mode');
                $('#info .form-control').prop('readonly', true);
                $('#avatarUploadBtn').addClass('d-none');
                
                // Restore edit button
                $('#saveProfileBtn, #cancelEditBtn').replaceWith(`
                    <button type="button" class="btn btn-outline-primary me-2" id="editProfileBtn">
                        <i class="icofont icofont-edit"></i> Edit Profile
                    </button>
                `);
            });
            
            // Genre tag selection
            $('.genre-tag').click(function() {
                $(this).toggleClass('selected');
            });
            
            // Avatar upload
            $('#avatarUploadBtn').click(function() {
                $('#avatarInput').click();
            });
            
            $('#avatarInput').change(function(e) {
                if (e.target.files && e.target.files[0]) {
                    const reader = new FileReader();
                    
                    reader.onload = function(event) {
                        $('#profileAvatar').attr('src', event.target.result);
                    }
                    
                    reader.readAsDataURL(e.target.files[0]);
                }
            });
        });
    </script>
</body>

</html>