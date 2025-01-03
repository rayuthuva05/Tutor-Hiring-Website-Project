<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[User Name]</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon" size="32x32">
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="sylesheets/Sdashboard.css">
    <link rel="stylesheet" href="sylesheets/admin.css">
</head>
<body>
    <nav class="navbar navbar-inverse bg-white">
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="images/logo.png" class="logo-pic">
                <a class="navbar-brand ">e-TutorAdmin</a>
            </div>
            <div class="d-flex justify-content-end ms-auto">
                <button type="button" class="btn btn-secondary">Overview</button>
                <input type="file" id="fileInput" accept="image/*" style="display: none;">
                <img id="profilePicNav" src="images/teacher.png" alt="User" class="profile-pic" title="Click to upload a profile picture">
                <p style="font-size: 12px;" class="text-center text-black">[user name]</p>
                <div class="dropdown">
                    <img src="images/setting.png" class="mx-auto d-block" style="max-width: 50px;" data-bs-toggle="dropdown" aria-expanded="false">
                    <ul class="dropdown-menu notification-dropdown dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Account</a></li>
                        <li><a class="dropdown-item" href="#">Notification</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    
    <div class="container-fluid">
        <div class="row">
            
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="dashboard.html">
                                <i class="bi bi-house-door"></i> Dashboard Overview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-person-fill"></i> Profile management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-person"></i> Tutors
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-person"></i>Students
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-book-fill"></i> Hiring Overview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="col">
            <main>
            <h2>Admin Dashboard - Upload Files</h2>
        
            
            <div class="upload-section">
                <h4>Upload Banner</h4>
                <div class="upload-card">
                    <input type="file" id="bannerUpload" accept="image/*">
                    <button class="btn btn-primary mt-2" onclick="uploadFile('banner')">Upload Banner</button>
                </div>
            </div>
            
            
            <div class="upload-section">
                <h4>Upload Gallery Image</h4>
                <div class="upload-card">
                    <input type="file" id="galleryUpload" accept="image/*">
                    <button class="btn btn-primary mt-2" onclick="uploadFile('gallery')">Upload to Gallery</button>
                </div>
            </div>
    
            
            <div class="upload-section">
                <h4>Upload Profile Picture</h4>
                <div class="upload-card">
                    <input type="file" id="profileUpload" accept="image/*">
                    <button class="btn btn-primary mt-2" onclick="uploadFile('profile')">Upload Profile Picture</button>
                </div>
            </div>
            </main>
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

    <?php
    require_once 'php/footer.php';
  ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/fileupload.js"></script>
    <!-- Bootstrap and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function uploadFile(type) {
            const fileInput = document.getElementById(type + 'Upload');
            const file = fileInput.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    localStorage.setItem(type, event.target.result);
                    alert(`${type} uploaded successfully!`);
                };
                reader.readAsDataURL(file);
            } else {
                alert('Please select a file to upload.');
            }
        }
    </script>
</body>
</html>
