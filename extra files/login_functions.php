


<?php
 require_once 'db.php';
 require_once 'dbconf.php';
 $username=$_POST['user'];
 $password=$_POST['password'];
 $db=new DB();
 $authenticated =$db->authenticateUser($username,$password);
 if($authenticated){
 $response="Hello $username, you have been successfully authenticated.";
 }else{
 $response='Incorrect credentials or user does not exist.';
 }
 echo $response;

?>

 <?php
require_once 'dbconf.php';

function Getid($id,$connect){
	try{
	
		$sql = "SELECT * FROM  user where  id = '$id' ";
	
	
		$result = mysqli_query($connect,$sql);
	
		if (mysqli_num_rows($result)>0) {
	
		$col = mysqli_fetch_fields($result);
		
			while($row = mysqli_fetch_assoc($result)){
				
			}
		} 
		else{
			echo "No results"; 
		}
	
		}
	
	
	catch(Exception $e){
		die($e->getMessage());
	}
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = $collection->findOne(['email' => $email]);

    if ($user) {
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = (string) $user['_id'];
            $_SESSION['user_name'] = $user['name'];
            //echo "Login successful! Welcome, " . htmlspecialchars($user['name']) . ".";
            header('Location: ../Students_dashboard.html'); 
            exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with this email.";
    }
} else {
    echo "Invalid request.";
}


?>