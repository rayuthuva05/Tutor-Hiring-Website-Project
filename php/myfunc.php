<?php
    $session_start();
    $user=$_SESSION['username'];
require_once 'dbconf.php';
function GetDetails($table,$connect,$bio){
    $sql="SELECT short_bio FROM $table where username='$user'";

    $result = mysqli_query($connect,$sql);
    if (mysqli_num_rows($result)>0) {
        while ($row = mysqli_fetch_assoc($result)) {
				echo $row;
		}
    }
}

?>