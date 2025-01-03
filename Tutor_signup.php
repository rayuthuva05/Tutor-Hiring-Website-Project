<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Registration</title>
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
    <link rel="stylesheet" href="sylesheets/tutorRegister.css">
</head>
<body>
<?php
    require_once 'php/navigation.php';
  ?>
  
  <div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-5 form-card">
                <div class="shadow p-3 mb-5 rounded card" style="background-image: url(images/gray-abstract-wireframe-technology-background_53876-101941.jpg);background-size: cover;">  
                  <h3 class="text-center text-uppercase fw-bold text-blue p-4">Tutor Registeration</h3>
                    <form action="php/tutor_register.php" class="was-validated text-center" method="POST" enctype="multipart/form-data">
                        
                        <div class="mb-3">
                            <input type="text" class="form-control text-center" id="fullname" placeholder="Full Name" name="fullname" required>
                            <div class="invalid-feedback">Please enter your full name.</div>
                        </div>

                        <div class="mb-3 text-left">
                            <label>Sex:</label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sex" id="male" value="male" required>
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sex" id="female" value="female" required>
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                            <div class="invalid-feedback">Please select your sex.</div>
                        </div>

                        <div class="mb-3">
                            <input type="number" class="form-control text-center" id="age" placeholder="Age" name="age" required>
                            <div class="invalid-feedback">Please enter your age.</div>
                        </div>

                        <div class="mb-3">
                            <textarea class="form-control text-center" id="address" placeholder="Address" name="address" required></textarea>
                            <div class="invalid-feedback">Please enter your address.</div>
                        </div>

                        <div class="mb-3">
                            <input type="tel" class="form-control text-center" id="phone" placeholder="Phone Number" name="phone" required>
                            <div class="invalid-feedback">Please enter your phone number.</div>
                        </div>

                        <div class="mb-3">
                            <input type="email" class="form-control text-center" id="email" placeholder="Email" name="email" required>
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                        </div>
                        
                        <div class="mb-3">
                            <input type="text" class="form-control text-center" id="qualification" placeholder="Highest Qualification" name="qualification" required>
                            <div class="invalid-feedback">Please enter your highest qualification.</div>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control text-center" id="subject" placeholder="Subject Specialization" name="subject" required>
                            <div class="invalid-feedback">Please enter your subject specialization.</div>
                        </div>

                        <div class="mb-3">
                            <input type="number" class="form-control text-center" id="experience" placeholder="Years of Experience" name="experience" required>
                            <div class="invalid-feedback">Please enter your years of experience.</div>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control text-center" id="institution" placeholder="Your Institution" name="institution" required>
                            <div class="invalid-feedback">Please enter your institution's name.</div>
                        </div>

                        <div class="mb-3">
                            <textarea class="form-control text-center" id="bio" placeholder="Short Bio" name="bio" required></textarea>
                            <div class="invalid-feedback">Please provide a short bio.</div>
                        </div>

                        <div class="mb-3">
                            <label>Upload your Image</label>
                            <input type="file" class="form-control" name="image" accept="image/*" id="image" required>
                            <div class="invalid-feedback">Please upload your image</div>
                        </div>

                        <div class="mb-3 d-flex justify-content-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="confirmation" name="confirmation" required>
                                <label class="form-check-label" for="confirmation">I confirm that given infromation accurate.</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg mb-3">Submit</button>
                        <button type="reset" class="btn btn-primary btn-lg mb-3">Reset</button>
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
</body>
</html>