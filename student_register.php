<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student registration</title>
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
    <link rel="stylesheet" href="sylesheets/student_tutor.css">
</head>
<body>
<?php
    require_once 'php/navigation.php';
  ?>

  
  <div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-5 form-card">
                <div class="shadow p-3 mb-5 rounded card" style="background-image: url(images/gray-abstract-wireframe-technology-background_53876-101941.jpg);background-size: cover;"> 
                  <h3 class="text-center text-uppercase fw-bold text-blue p-4">Student Registeration</h3>
                    <form action="php/student_signup.php" method="post" class="was-validated text-center" id="signup_form">
                        <div class="mb-3">
                            <input type="text" class="form-control text-center" id="fullname" placeholder="Full Name" name="fullname" required>
                            <div class="invalid-feedback">Please enter your Full name.</div>
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
                            <input type="tel" class="form-control text-center" id="guardian-phone" placeholder="Guardian Phone Number" name="guardian-phone" required>
                            <div class="invalid-feedback">Please enter your guardian's phone number.</div>
                        </div>

                        <div class="mb-3">
                            <select class="form-select" id="school" name="school" required>
                                <option value="">Select School Type</option>
                                <option value="primary">Primary</option>
                                <option value="secondary">Secondary</option>
                                <option value="higherstudy">Higher Study</option>
                                <option value="university">University</option>
                            </select>
                            <div class="invalid-feedback">Please select your school type.</div>
                        </div>

                        <div class="mb-3 d-flex justify-content-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="confirmation" name="confirmation" required>
                                <label class="form-check-label" for="confirmation">I confirm that I am a student.</label>
                                <div class="invalid-feedback">You must confirm that you are a student.</div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg mb-3">Submit</button>
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