


<nav class="navbar navbar-inverse bg-dark-blue">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand " href="e-Teacher.lk">e-Teacher.lk</a>
      </div>

      <?php if (!(isset($_SESSION['username']))): ?>
      <div class="d-flex justify-content-end ms-auto">
        <a href="index.php">Home</a>
        <a href="Contactus.html">Contact Us</a>
        <a href="register.php">Register</a>
        <a href="signin.php">Login</a>
      </div>
      <?php else: ?>
        <div class="d-flex justify-content-end ms-auto">
        <a href="index.php">Home</a>
        <a href="Contactus.html">Contact Us</a>
        <a href="logout.php">Logot</a>
        <?php endif; ?>
    </div>
  </nav>