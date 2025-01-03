<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <link rel="stylesheet" href="sylesheets/login.css">
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
                    <h1 id="loginTitle" class="text-center text-uppercase fw-bold text-blue p-4">Login</h1>
                    <form action="php/login.php" class="was-validated text-center" method="POST">
                        <div id="error-message" class="alert alert-danger text-center" style="display: none;"></div>
                        <div class="mb-3">
                            <input type="text" class="form-control text-center bg-body-tertiary rounded" id="user" placeholder="User Name" name="user" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        
                        <div class="mb-3">
                            <input type="password" class="form-control text-center bg-body-tertiary rounded" id="password" placeholder="Enter Password" name="password" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                       

                        <button type="submit" class="btn btn-primary btn-lg mb-3" name="login">Login</button>
                        <p class="text-center">Forgot password? <a href="#">Click here</a></p>
                        <p class="text-center">Don't have an account <a href="register.php">Sign Up</a></p>
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
   <script>
    // JavaScript to show error message dynamically
    const urlParams = new URLSearchParams(window.location.search);
    const errorMessage = urlParams.get('error');
    if (errorMessage) {
        const errorDiv = document.getElementById('error-message');
        errorDiv.textContent = decodeURIComponent(errorMessage);
        errorDiv.style.display = 'block';
    }
</script>
</body>
</html>