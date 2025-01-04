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
    <link rel="stylesheet" href="../sylesheets/Sdashboard.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php require_once 'user_navigation.php'; ?>
    <?php require_once 'dbconf.php';
          require_once 'functions/myfunc.php';
    ?>

    <div class="d-flex">
        <div class="container-fluid p-4" style="min-height: 100vh; overflow-y: auto;">
            <h1>Welcome, <?php echo htmlspecialchars($username); ?> Now you are a tutor with e-Tutor.lk,<br>Here you can find Vacancies</h1>
            <h3 class="blinking" style="color: red;">Urgent Vacancies...</h3>
            <div class="input-group">
                <input class="form-control d-flex" id="myInput" type="text" placeholder="Search Vacancies..">
              </div><br>
            <div class="table-responsive">
              <?php require_once 'vacancies.php'; ?>
              <?php PrintVacancy($connect,"vacancy"); ?>
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
                    <img id="largeProfilePic" src="../images/default-profile.png" alt="Profile Picture" class="modal-img">
                </div>
                <div class="modal-footer">
                    <input type="file" id="modalFileInput" accept="image/*" style="display: none;">
                    <button type="button" class="btn btn-primary" id="editProfilePicButton">Upload New Profile Picture</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-body text-center">
        <img id="largeProfilePic" src="../images/teacher.png" alt="Profile Picture" class="modal-img" style="display: none;">
        <p id="uploadPrompt" class="text-muted"></p>
    </div>

    <?php require_once 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/fileupload.js"></script>
    <script src="../js/tutor.js"></script>
</body>
</html>