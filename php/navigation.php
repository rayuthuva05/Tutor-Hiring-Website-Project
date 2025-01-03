<?php
$isLoggedIn = isset($_SESSION['user_name']);
$Isrole = isset($_SESSION['role']) ? $_SESSION['role'] : null;
?>
<nav class="navbar navbar-inverse bg-dark-blue">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand " href="e-Teacher.lk">e-Teacher.lk</a>
      </div>

      <?php if (!($isLoggedIn)): ?>
      <div class="d-flex justify-content-end ms-auto">
        <a href="index.php">Home</a>
        <a href="Contactus.php">Contact Us</a>
        <a href="register.php">Register</a>
        <a href="signin.php">Login</a>
      </div>
      <?php else: ?>
        <div class="d-flex justify-content-end ms-auto">
        <a href="index.php">Home</a>
        <a href="Contactus.php">Contact Us</a>
        <a href="<?php echo ($Isrole === 'learner') ? 'php/Students_dashboard.php' : 'php/tutordashboard.php'; ?>">Dashboard</a>
        <a href="php/logout.php">Logot</a>
        <?php endif; ?>
    </div>
  </nav>