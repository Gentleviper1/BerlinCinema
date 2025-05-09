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
    <!-- Iconfont CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all" />
    <!-- Main style CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-area d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="index.php"><img src="assets/img/logo.png" alt="logo" /></a>
                </div>
                <div class="header-right d-flex align-items-center">
                    <form class="d-flex me-3" action="#">
                        <select class="form-select me-2" style="width: 120px;">
                            <option value="Movies">Title</option>
                            <option value="Category">Category</option>
                            <option value="Genre">Genre</option>
                        </select>
                        <input type="text" class="form-control me-2" placeholder="Search..." />
                        <button class="btn btn-primary"><i class="icofont icofont-search"></i></button>
                    </form>
                    <ul class="navbar-nav flex-row m-0 align-items-start">
                        <li class="nav-item"><a class="nav-link" href="../../Auth/login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- User Profile Section -->
    <section class="user-profile-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="profile-card card">
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
                        </div>

                        <div class="tab-content profile-tab-content">
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
                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="button" class="btn btn-outline-primary me-2" id="editProfileBtn">
                                            <i class="icofont icofont-edit"></i> Edit Profile
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>© 2025 Berlin Cinema. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#editProfileBtn').click(function() {
                $('#info').removeClass('view-mode').addClass('edit-mode');
                $('#info .form-control').prop('readonly', false);
                $('#avatarUploadBtn').removeClass('d-none');
            });
        });
    </script>
</body>

</html>                            <p><a target="_blank" href="index.php">Berlin Cinema</a></p>
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