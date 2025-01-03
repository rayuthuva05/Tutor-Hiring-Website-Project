<?php
session_start();

$isLoggedIn = isset($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e_Teacher.lk</title>
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
        <div class="col-md-5 user-profile">
            <div class="shadow p-3 mb-5 bg-body-tertiary rounded card">
                <img src="images/hand.png" class="mx-auto d-block" style="max-width: 250px;"><br>
                <div class="container mt-5">
                    <h1 class="text-center">Thank You for Visit <i>e_teacher.lk!</i></h1>
                    <p class="text-center">Our team will contact you soon... </p>
                
                    
                    <div class="text-center">
                        <a class="btn btn-primary" href="index.php">Home</a>
                    </div>
                </div>
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
    function openMail() {
        
        window.location.href = "mailto:";
    }
</script>
</body>
</html>