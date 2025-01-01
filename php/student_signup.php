<?php
	session_start();
	require_once 'dbconf.php';
	function AddData($connect,$username,$fullname,$sex,$age,$address,$phone,$gradien_phone,$school){
		try {
			$sql = "INSERT INTO learner (username, fullname, sex, age, address, phone, guardian_phone, school)
			VALUES('$username','$fullname','$sex',$age,'$address','$phone','$gradien_phone','$school')";
			$result = mysqli_query($connect,$sql);
			if ($result) {
				
			} else {
				die("Error ".mysqli_error($connect));
			}
            header('Location: ../register_next.html');
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$username = $_SESSION['username'];
		$fullname = $_POST['fullname'];
		$sex = $_POST['sex'];
		$age = $_POST['age'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$gradien_phone=$_POST['guardian-phone'];
		$school=$_POST['school'];
		
		$sexDbValue = ($sex === 'male') ? 'M' : 'F';
		AddData($connect,$username,$fullname,$sexDbValue,$age,$address,$phone,$gradien_phone,$school);
	}

	?>
