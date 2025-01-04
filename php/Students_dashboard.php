<?php
session_start();

$username = $_SESSION['user_name'];
$role=$_SESSION['role'];
$isLoggedIn = isset($_SESSION['user_name']);

header("Cache-Control: no-cache, no-store, must-revalidate"); 
header("Pragma: no-cache"); 
header("Expires: 0");

if (!isset($username) || !isset($_SESSION['role'])) {
    // Redirect to login page if not logged in or not an admin
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
    
    <?php require_once 'user_navigation.php'; ?>


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

    <div class="modal fade" id="profilePicModal" tabindex="-1" aria-labelledby="profilePicModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="profilePicModalLabel">Profile Picture</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="largeProfilePic" src="images/default-profile.png" alt="Profile Picture" class="modal-img">
                </div>
                <div class="modal-footer">
                    <input type="file" id="modalFileInput" accept="image/*" style="display: none;">
                    <button type="button" class="btn btn-primary" id="editProfilePicButton">Upload New Profile Picture</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-body text-center">
        <img id="largeProfilePic" src="images/teacher.png" alt="Profile Picture" class="modal-img" style="display: none;">
        <p id="uploadPrompt" class="text-muted"></p>
    </div>
    
    <?php require_once 'footer.php'; ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/fileupload.js"></script>
    <script src="../js/search.js"></script>
    

</body>
</html>
