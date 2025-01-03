<?php
session_start(); 

if (!isset($_SESSION['email'])) {
    die("No email found in the session. Please register again.");
}

$email = $_SESSION['email']; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-mail Confirmation</title>
    <link rel="icon" href="../images/logo.png" type="image/x-icon" size="32x32">
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../sylesheets/register.css">
</head>
<body>
  <nav class="navbar navbar-inverse bg-dark-blue">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand " href="index.php">e-Teacher.lk</a>
      </div>
      <div class="d-flex justify-content-end ms-auto">
        <a href="../index.php">Home</a>
        <a href="../Contactus.html">Contact Us</a>
        <a href="../register.php">Register</a>
        <a href="../signin.php">Login</a>
      </div>
    </div>
  </nav>

  
  <div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-5 user-profile">
            <div class="shadow p-3 mb-5 bg-body-tertiary rounded card">
                <img src="../images/email.png" class="mx-auto d-block" style="max-width: 250px;"><br>
                <div class="container mt-5">
                    <h1 class="text-center">Thank You for Registering!</h1>
                    <p class="text-center">Your registration was successful.</p>
                
                    <div class="alert alert-success text-center" role="alert">
                        A confirmation email has been sent to 
                        <strong><?php echo htmlspecialchars($email); ?></strong>. Please check your inbox and confirm your email to activate your account.
                    </div>
                
                    <div class="text-center">
                        <button class="btn btn-primary" onclick="openMail('<?php echo htmlspecialchars($email); ?>')">Check Mail</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   <br>
   <br>
   <footer class="footer text-center" style="opacity: 0.8;">
    <hr>
    <div class="container">
        <p>&copy; 2024 <a href="index.php"><i>e-Teacher.lk</i></a> All rights reserved.</p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
                <a href="#">Terms of Service</a>
            </li>
            <li class="list-inline-item">
                <a href="#">Contact Us</a>
            </li>
        </ul>
    </div>
</footer>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
   <script>
    function openMail(email) {
        
        window.location.href = "mailto:" + email;
    }
</script>
</body>
</html>