<?php
session_start();

$isLoggedIn = isset($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="icon" href="images/logo.png" type="image/x-icon" size="32x32">
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="sylesheets/contact.css">
    
</head>
<body>
<?php
    require_once 'php/navigation.php';
  ?>
  </nav>
<main id="main">
    <section class="contact-section">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-lg-4 mb-4">
                    <div class="contact-box">
                        <div class="sec-title mb-4">
                            <span class="sub-text">Let's Talk</span>
                            <h2 class="title">Speak With Our e-Teacher.lk</h2>
                        </div>
                        <div class="address-box">
                            <div class="address-icon">
                                <i class="bi bi-phone"></i>
                            </div>
                            <div>
                                <span class="fw-bold">Phone:</span>
                                <a href="tel:+94765376531" class="d-block text-white">+94765376531</a>
                            </div>
                        </div>
                        <div class="address-box">
                            <div class="address-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div>
                                <span class="fw-bold">Email:</span>
                                <a href="mailto:dewmasjaffna@gmail.com" class="d-block text-white">eteacherlk@gmail.com</a>
                            </div>
                        </div>
                        <div class="address-box">
                            <div class="address-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div>
                                <span class="fw-bold">Address:</span>
                                <p class="mb-0">Stanley Road,<br> Jaffna.</p>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <a href="tel:+94765376531" class="btn btn-primary">
                                <i class="bi bi-telephone-fill"></i> Call Us Now
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-8">
                    <div class="card shadow">
                        <div class="card-header bg-primary text-white text-center">
                            <h4>Fill the Form Below</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="php/contact.php" method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" id="name" name="name" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">E-Mail</label>
                                        <input type="email" id="email" name="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="text" id="phone" name="phone" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="reason" class="form-label">Reason</label>
                                        <input type="text" id="reason" name="reason" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Your Message Here</label>
                                    <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary submit">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<br><br>
<?php
    require_once 'php/footer.php';
  ?>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>
</html>
