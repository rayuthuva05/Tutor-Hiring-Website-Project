<?php
	session_start();
	require_once 'dbconf.php';
	function AddData($connect,$username,$fullname,$sex,$age,$address,$phone,$email,$qualification,$specialize,$year_exp,$institute,$short_bio,$image){
		try {
			$imgData = addslashes(file_get_contents($image));
			$sql = "INSERT INTO educator (username,fullname,sex,age,address,phone,email,qualification,specialize,year_exp,institute,short_bio,image)
			VALUES('$username','$fullname','$sex',$age,'$address','$phone','$email','$qualification','$specialize','$year_exp','$institute','$short_bio','$imgData')";
			$result = mysqli_query($connect,$sql);
			if ($result) {
				
			} else {
				die("Error ".mysqli_error($connect));
			}
            header('Location: register_next.php');
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
		$email=$_POST['email'];
		$qualification=$_POST['qualification'];
		$specialize=$_POST['subject'];
		$year_exp=$_POST['experience'];
		$institute=$_POST['institution'];
		$short_bio=$_POST['bio'];
		$image = $_FILES['image']['tmp_name'];
		$sexDbValue = ($sex === 'male') ? 'M' : 'F';
		AddData($connect,$username,$fullname,$sexDbValue,$age,$address,$phone,$email,$qualification,$specialize,$year_exp,$institute,$short_bio,$image);
	}

	?>
