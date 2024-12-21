<?php
	require_once 'dbconf.php';
	function AddData($connect,$name,$email,$phone,$reason,$message){
		try {
			$sql = "INSERT INTO contact_form VALUES('$name','$email','$phone','$reason','$message')";
			$result = mysqli_query($connect,$sql);
			if ($result) {
				
			} else {
				die("Error ".mysqli_error($connect));
			}
            header('Location: ../contact_next.html');
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
        $reason=$_POST['reason'];
        $message=$_POST['message'];
		AddData($connect,$name,$email,$phone,$reason,$message);
	}

	?>