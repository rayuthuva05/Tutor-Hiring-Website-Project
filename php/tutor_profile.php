<?php
session_start();

$username = $_SESSION['user_name'];
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
    <nav class="navbar navbar-inverse bg-white">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="dropdown">
                    <img src="../images/triple line.png" class="mx-auto d-block" style="max-width: 50px;" data-bs-toggle="dropdown" aria-expanded="false">
                    <ul class="dropdown-menu settings-dropdown">
                        <li><a class="dropdown-item" href="../index.php">Home</a></li>
                        <li><a class="dropdown-item" href="../Contactus.html">Contact Us</a></li>
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
    
 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

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
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/fileupload.js"></script>
    <script src="../js/search.js"></script>
    

</body>
</html>
