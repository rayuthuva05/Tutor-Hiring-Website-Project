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
                        <li><a class="dropdown-item" href="../index.html">Home</a></li>
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

    <div class="container-fluid p-4">
        <h1>Welcome, <?php echo htmlspecialchars($username); ?><br> Here you can find your tutors</h1>
        <h3 class="blinking" style="color: yellow;">Most Popular hired tutors...</h3>
        <div class="mb-3">
            <input type="text" id="searchInput" class="form-control d-flex" placeholder="Search for a tutor..." onkeyup="filterCards()">
        </div>
        <div class="row" id="cardContainer">
            <div class="col-md-3 tutor-card" data-name="Malavika Physics mechanics automobile science">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../images/teacher.png" alt="Tutor" class="card-img-top">
                            <h5 class="card-title">Mrs. Malavika BSc (Physics)</h5>
                            <p class="card-text">Specialized in Physics</p>
                        </div>
                        <div class="flip-card-back">
                            <h5 class="card-title">Mrs. Malavika</h5>
                            <p>Most hired by Physics students on our platform.</p>
                            <a href="#" class="btn btn-primary">See Profile</a><br>
                            <a href="#" class="btn btn-primary">Hire</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 tutor-card" data-name="Vijay Cyber Security IT computer science programming">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../images/tamil-actor-vijay-photos-586.jpg" alt="Tutor" class="card-img-top">
                            <h5 class="card-title">Mr. Vijay BSc (Comp.Sc)</h5>
                            <p class="card-text">Specialized in Cyber Security</p>
                        </div>
                        <div class="flip-card-back">
                            <h5 class="card-title">Mr. Vijay</h5>
                            <p>Most hired by IT students on our platform.</p>
                            <a href="#" class="btn btn-primary">See Profile</a><br>
                            <a href="#" class="btn btn-primary">Hire</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 tutor-card" data-name="Suriya Arts History Tamil">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../images/suriya-tamil-actors-hd-phone-jce56vv2zem5dogu.jpg" alt="Tutor" class="card-img-top">
                            <h5 class="card-title">Mr. Suriya B.A</h5>
                            <p class="card-text">Specialized in B.A Tamil & History</p>
                        </div>
                        <div class="flip-card-back">
                            <h5 class="card-title">Mr. Suriya</h5>
                            <p>Most hired by Arts students on our platform.</p>
                            <a href="#" class="btn btn-primary">See Profile</a><br>
                            <a href="#" class="btn btn-primary">Hire</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 tutor-card" data-name="Malavika Physics mechanics automobile science">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../images/teacher.png" alt="Tutor" class="card-img-top">
                            <h5 class="card-title">Mrs. Malavika BSc (Physics)</h5>
                            <p class="card-text">Specialized in Physics</p>
                        </div>
                        <div class="flip-card-back">
                            <h5 class="card-title">Mrs. Malavika</h5>
                            <p>Most hired by Physics students on our platform.</p>
                            <a href="#" class="btn btn-primary">See Profile</a><br>
                            <a href="#" class="btn btn-primary">Hire</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 tutor-card" data-name="Vijay Cyber Security IT computer science programming">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../images/tamil-actor-vijay-photos-586.jpg" alt="Tutor" class="card-img-top">
                            <h5 class="card-title">Mr. Vijay BSc (Comp.Sc)</h5>
                            <p class="card-text">Specialized in Cyber Security</p>
                        </div>
                        <div class="flip-card-back">
                            <h5 class="card-title">Mr. Vijay</h5>
                            <p>Most hired by IT students on our platform.</p>
                            <a href="#" class="btn btn-primary">See Profile</a><br>
                            <a href="#" class="btn btn-primary">Hire</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 tutor-card" data-name="Suriya Arts History Tamil">
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
        <p id="uploadPrompt" class="text-muted">No profile picture uploaded. Please upload a new one.</p>
    </div>
    
    <footer class="footer text-center" style="opacity: 0.8;">
        <hr>
        <div class="container">
            <p>&copy; 2024 <a href="index.html"><i>e-Teacher.lk</i></a> All rights reserved.</p>
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
