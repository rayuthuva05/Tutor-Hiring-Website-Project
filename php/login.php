<?php

if (isset($_GET['id'])) {
    $user = $_GET['user'];

    $sql = "SELECT * FROM user WHERE username = $user";
    

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
       // echo "Welcome, " . htmlspecialchars($user['name']) . "! You have successfully logged in.";
         header('Location: ../Students_dashboard.php'); 
         exit;
    } else {
        echo "User not found!";
    }

    $stmt->close();
} else {
    echo "No username provided in the URL.";
}

$conn->close();
?>
