<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Profile - Berlin Cinema</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/icofont.css" />
  <style>
    body {
      background: url('assets/img/bg-cinema.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Segoe UI', sans-serif;
      color: white;
    }

    .profile-container {
      max-width: 800px;
      margin: 80px auto;
      padding: 30px;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    }

    .profile-avatar {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid white;
      box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
      margin-bottom: 15px;
    }

    .form-control {
      background: rgba(255, 255, 255, 0.2);
      border: none;
      color: white;
    }

    .form-control::placeholder {
      color: rgba(255, 255, 255, 0.7);
    }

    .form-label {
      font-weight: bold;
    }

    .btn-primary {
      background-color: #ff3d00;
      border: none;
      transition: 0.3s ease-in-out;
    }

    .btn-primary:hover {
      background-color: #e63600;
    }
  </style>
</head>

<body>

  <div class="container profile-container text-center">
    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User Avatar" class="profile-avatar" />
    <h2 class="mb-3">John Doe</h2>

    <form>
      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">First Name</label>
          <input type="text" class="form-control" placeholder="First Name" value="John" readonly />
        </div>
        <div class="col-md-6">
          <label class="form-label">Last Name</label>
          <input type="text" class="form-control" placeholder="Last Name" value="Doe" readonly />
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Email" value="john.doe@example.com" readonly />
      </div>
      <div class="mb-3">
        <label class="form-label">Birthdate</label>
        <input type="date" class="form-control" value="1990-01-01" readonly />
      </div>
      <button type="button" class="btn btn-primary mt-3">Edit Profile</button>
    </form>
  </div>

  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
