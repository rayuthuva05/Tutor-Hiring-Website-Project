<?php
require_once 'dbconf.php';

if (isset($_POST['login'])) {
    $username = $_POST["user"];
    $password = $_POST["password"];
    
    // Prepare the SQL query to fetch the username and hashed password
    $sql = "SELECT username, password, role FROM users WHERE username = '$username'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"]; // Fetch the hashed password

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            session_start(); // Start the session
            
            $_SESSION["user_name"] = $row["username"];
            $_SESSION['role'] = $row['role'];
            
            if ($row['role'] === 'learner') {
                header("Location: Students_dashboard.php");
            } elseif ($row['role'] === 'educator') {
                header("Location: tutordashboard.php");
            }
            exit; // Ensure no further code runs after redirection
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Invalid username or password.";
    }

    $connect->close(); // Close the database connection
    header("Location: ../signin.php?error=" . urlencode($error));
    exit;
}
?>
