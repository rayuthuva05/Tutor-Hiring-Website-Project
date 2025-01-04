<?php
session_start();
require_once 'dbconf.php';
$user=$_SESSION['user_name'];

function AddProfile($connect,$user,$image){
    try {
        $imgData = addslashes(file_get_contents($image));
        $sql="INSERT INTO profile value $imgData WHERE username='$user'";
        $result=mysqli_query($connect,$sql);

        if($result){

        }else{
            die('Error '.mysqli_error($connect));
        }
    } catch (Exception $e) {
        die($e->getMessage());
    }
}

if($_SERVER["REQUEST_METHOD"]== 'POST'){
    $image = $_FILES['image']['tmp_name'];
    AddProfile($connect,$user,$image);
}


?>