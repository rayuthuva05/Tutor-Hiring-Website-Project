<?php
    require_once 'dbconf.php';
        if (isset($_POST['login'])) {
            
            $username = $_POST["user"];
            $password = $_POST["password"];
            $hpassword = password_hash($password, PASSWORD_DEFAULT);

            $sql = "SELECT username FROM user 
                    WHERE 
                    username = '$username' AND password = '$hpassword'";
            
            $result = $conn->query($sql);

            if ($result ->num_rows > 0) {
                session_start(); // you can add this at the start line of the document
                
                $row = $result -> fetch_assoc();
                //$_SESSION["user_id"] = $row["id"];
                $_SESSION["user_name"] = $row["username"];
                
                header("Location: ../Students_dashboard.html");
            } 
            else {
                echo '<p class="error-message">Invalid username or password.</p>';
            }
            $conn->close();
        }
    ?>