<?php
	session_start();
	require_once 'dbconf.php';
	function AddData($connect,$username,$email,$password,$role){
		try {
			$sql = "INSERT INTO users (username, email, password, role) VALUES('$username','$email','$password','$role')";
			$result = mysqli_query($connect,$sql);
			if ($result) {
				if($_POST['role']=== 'learner'){
				header('Location: ../student_register.html');
				}
				else{
					header('Location: ../Tutor_register.html');
				}
            	exit;
			} else {
				die("Error ".mysqli_error($connect));
			}
            
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (!isset($_SESSION['username']) || !isset($_SESSION['email']) || !isset($_SESSION['password'])|| !isset($_POST['role'])) {
			// Redirect to the first step if session data is missing
			header("Location: ../signup.html?error=Session expired. Please start again.");
			exit;
		}
		$role = $_POST['role'];
		$username = $_SESSION['username'];
    	$email = $_SESSION['email'];
    	$password = $_SESSION['password'];
		AddData($connect,$username,$email,$password,$role);
	}

	?>
