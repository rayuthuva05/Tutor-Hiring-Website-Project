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