<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Profile - Berlin Cinema</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/icofont.css" />
  <style>
    body {
      margin: 0;
      padding: 0;
      background: url('assets/img/RogueOne.jpg') no-repeat center center fixed;
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

  <!-- Header -->
  <header class="header bg-dark py-3">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <a href="index.php"><img src="assets/img/logo.png" alt="logo" height="40" /></a>
      </div>
      <div class="d-flex align-items-center">
        <form class="me-3 d-flex">
          <select class="form-select me-2">
            <option>Title</option>
            <option>Category</option>
            <option>Genre</option>
          </select>
          <input type="text" class="form-control" placeholder="Search..." />
        </form>
        <a href="../../Auth/login.php" class="btn btn-outline-light">Login</a>
      </div>
    </div>
  </header>

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

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <img src="assets/img/logo.png" alt="logo" width="120" />
          <p>Mühlenstraße, 10243 Berlin, Germany</p>
          <h6><span>Call us: </span>(+20)1069930446</h6>
        </div>
        <div class="col-md-2">
          <h4>Our Company</h4>
          <ul class="list-unstyled">
            <li><a href="#">Our Brands</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Investors</a></li>
          </ul>
        </div>
        <div class="col-md-2">
          <h4>Movies</h4>
          <ul class="list-unstyled">
            <li><a href="#">Movies</a></li>
            <li><a href="#">Theatres</a></li>
            <li><a href="#">Ratings</a></li>
            <li><a href="#">IMAX</a></li>
          </ul>
        </div>
        <div class="col-md-2">
          <h4>Legal</h4>
          <ul class="list-unstyled">
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
          </ul>
        </div>
        <div class="col-md-2">
          <h4>Account</h4>
          <ul class="list-unstyled">
            <li><a href="#">My Account</a></li>
            <li><a href="#">Watchlist</a></li>
            <li><a href="#">Collections</a></li>
          </ul>
        </div>
        <div class="col-md-2">
          <h4>Newsletter</h4>
          <form>
            <input type="text" class="form-control mb-2" placeholder="Email..." />
            <button class="btn btn-sm btn-primary">Subscribe</button>
          </form>
        </div>
      </div>
      <hr class="bg-white" />
      <p class="text-center">&copy; 2025 Berlin Cinema. All rights reserved.</p>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
