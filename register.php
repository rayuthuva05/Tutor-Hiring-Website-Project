<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon" size="32x32">
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="sylesheets/register.css">
</head>
<body>
<?php
    require_once 'php/navigation.php';
  ?>

  <div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-5 form-card">
                <div class="shadow p-3 mb-5 rounded card" style="background-image: url(images/gray-abstract-wireframe-technology-background_53876-101941.jpg);background-size: cover;">
                  <img src="images/logo.png" class="mx-auto d-block" style="max-width: 150px;">  
                  <h1 class="text-center text-uppercase fw-bold text-blue p-4">Sign Up</h1>
                    <form action="php/signup_step1.php" method="post" class="was-validated text-center" id="signup_form">
                        <div class="mb-3">
                            <input type="text" class="form-control text-center bg-body-tertiary rounded" id="user" placeholder="User Name" name="username" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control text-center bg-body-tertiary rounded" id="email" placeholder="Enter email" name="email" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control text-center bg-body-tertiary rounded" id="password" placeholder="Enter Password" name="password" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control text-center bg-body-tertiary rounded" id="cpassword" placeholder="Re-Enter Password" name="cpassword" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                            <div class="error_message" id="error_message">Passwords do not match!</div>
                        </div>
                        <div class="mb-3 d-flex justify-content-center">
                            <div class="form-check text-center">
                                <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
                                <label class="form-check-label" for="myCheck">I agree on e-Teacher.lk.</label>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Check this checkbox to continue.</div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg mb-3">Sign up</button>
                        <p class="text-center">Already have an account? <a href="signin.php">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
      </div>
      
   <br>
   <br>
   <?php
    require_once 'php/footer.php';
  ?>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
   <script src="js/password.js"></script>
</body>
</html>