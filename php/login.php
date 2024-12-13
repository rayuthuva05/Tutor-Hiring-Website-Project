<?php
require_once 'dbconf.php';

if (isset($_POST['user'])) {
    $user = $_POST['user'];

    $sql = "SELECT * FROM user WHERE username = $user";
    
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
         echo "Welcome, " . htmlspecialchars($user['name']) . "! You have successfully logged in.";
         header('Location: ../Students_dashboard.php'); 
         exit;
    } else {
        echo "User not found!";
    }

}

$conn->close();
?>
