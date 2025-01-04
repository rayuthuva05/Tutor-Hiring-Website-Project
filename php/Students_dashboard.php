<?php
session_start();

$username = $_SESSION['user_name'];
$role=$_SESSION['role'];
$isLoggedIn = isset($_SESSION['user_name']);

header("Cache-Control: no-cache, no-store, must-revalidate"); 
header("Pragma: no-cache"); 
header("Expires: 0");

if (!isset($username) || !isset($_SESSION['role'])) {
    header('Location: ../signin.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($username); ?></title>
    <link rel="icon" href="../images/logo.png" type="image/x-icon" size="32x32">
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../sylesheets/animation.css">
    <link rel="stylesheet" href="../sylesheets/Sdashboard.css">
</head>
<body>
    <?php
    require_once 'dbconf.php';
    require_once 'functions/myfunc.php';
    ?>
    <nav class="navbar navbar-inverse bg-white">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="dropdown">
                    <img src="../images/triple line.png" class="mx-auto d-block" style="max-width: 50px;" data-bs-toggle="dropdown" aria-expanded="false">
                    <ul class="dropdown-menu settings-dropdown">
                        <li><a class="dropdown-item" href="../index.php">Home</a></li>
                        <li><a class="dropdown-item" href="../Contactus.php">Contact Us</a></li>
                        <li><a class="dropdown-item" href="../Policy.html">Policy</a></li>
                        <li><a class="dropdown-item" href="../About.html">About Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-end ms-auto">
                <input type="file" id="fileInput" accept="image/*" style="display: none;">
                <img id="profilePicNav" src="../images/teacher.png" alt="User" class="profile-pic" title="Click to upload a profile picture">
                <p style="font-size: 12px;" class="text-center text-black"><?php echo htmlspecialchars($username); ?></p>
                <div class="dropdown">
                    <img src="../images/icone-de-cloche-et-d-alerte-noir.png" class="mx-auto d-block" style="max-width: 40px;" data-bs-toggle="dropdown" aria-expanded="false">
                    <ul class="dropdown-menu settings-dropdown dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">See the notification</a></li><hr>
                        <li><a class="dropdown-item" href="#">You got the new event</a></li><hr>
                        <li><a class="dropdown-item" href="#">Notification</a></li><hr>
                        <li><a class="dropdown-item" href="#">You got a new Tutor</a></li><hr>
                    </ul>
                </div>
                <div class="dropdown">
                    <img src="../images/setting.png" class="mx-auto d-block" style="max-width: 50px;" data-bs-toggle="dropdown" aria-expanded="false">
                    <ul class="dropdown-menu notification-dropdown dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Account</a></li>
                        <li><a class="dropdown-item" href="#">Notification</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <div class="container-fluid p-4">
        <h1>Welcome, <?php echo htmlspecialchars($username); ?><br> Here you can find your tutors</h1>
        <h3 class="blinking" style="color: yellow;">Most Popular hired tutors...</h3>
        <div class="mb-3">
            <input type="text" id="searchInput" class="form-control d-flex" placeholder="Search for a tutor..." onkeyup="filterCards()">
        </div>
        <div class="row" id="cardContainer">
            <?php 
                require_once 'modal.php';
            ?>

            <div class="col-md-3 tutor-card">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../images/user.png" alt="Tutor" class="card-img-top">
                            <h5>Find more Tutors</h5>
                            <p>Click Here</p>
                        </div>
                        <div class="flip-card-back">
                            <a href="#" class="btn btn-primary">See More...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        require_once 'profliemodal.php';
    ?>
    
    <?php
        require_once 'footer.php';
    ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/fileupload.js"></script>
    <script src="../js/search.js"></script>
    

</body>
</html>
