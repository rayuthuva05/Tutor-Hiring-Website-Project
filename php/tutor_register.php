<?php
	require_once 'dbconf.php';
	function AddData($connect,$fullname,$sex,$age,$address,$phone,$email,$qualification,$specialize,$year_exp,$institute,$short_bio,$user_id){
		try {
			$sql = "INSERT INTO educator (fullname,sex,age,address,phone,email,qualification,specialize,year_exp,institute,short_bio,user_id)
			VALUES('$fullname','$sex',$age,'$address','$phone','$email','$qualification','$specialize','$year_exp','$institute','$short_bio',$user_id)";
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
		$user_id = $_POST['user_id'];
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
		$sexDbValue = ($sex === 'male') ? 'M' : 'F';
		AddData($connect,$user_id,$fullname,$sexDbValue,$age,$address,$phone,$email,$qualification,$specialize,$year_exp,$institute,$short_bio);
	}

	?>
