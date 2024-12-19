<?php
require_once 'dbconf.php';

if (isset($_POST['login'])) {
    $username = $_POST["user"];
    $password = $_POST["password"];
    
    // Prepare the SQL query to fetch the username and hashed password
    $sql = "SELECT username, password FROM user WHERE username = '$username'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"]; // Fetch the hashed password

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            session_start(); // Start the session
            
            $_SESSION["user_name"] = $row["username"]; // Save username in session
            
            header("Location: Students_dashboard.php");
            exit; // Ensure no further code runs after redirection
        } else {
            echo '<p class="error-message">Invalid username or password.</p>';
        }
    } else {
        echo '<p class="error-message">Invalid username or password.</p>';
    }

    $connect->close(); // Close the database connection
}
?>
