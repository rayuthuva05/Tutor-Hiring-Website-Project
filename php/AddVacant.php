<?php

            echo "<form action='AddVacant.php' class='was-validated text-center' method='POST'>";
            echo "<div id='error-message' class='alert alert-danger text-center' style='display: none;'></div> ";                           
            echo "<div class='mb-3'>";
            echo    "<textarea class='form-control text-center bg-body-tertiary rounded' id='note' placeholder='Enter your vacant here...' name='note' required>";
                echo "<div class='valid-feedback'>Valid.</div>";
               echo  "<div class='invalid-feedback'>Please fill out this field.</div>";
            echo "</div>";
            echo "<button type='submit' class='btn btn-primary btn-lg mb-3' name='submit'>Submit</button>";
            echo "</form>";


?>
<?php
    session_start();
    $user=$_SESSION['user_name'];
    require_once 'dbconf.php';
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        $note=$_POST['note'];

        if(isset($note)){
            function AddData($connect,$user,$bio){
                $sql="INSERT into vacancy values('$user','$bio')";
                $result=mysqli_query($connect,$sql);

                if($result){
                    header("Location: AddVacant_next.php");
                    exit;
                }else{
                    header("Location: AddVacant.php");
                    exit;
                }
            }
        }else{
            //$error="Please provide any notes";
        }
    }
    //header("Location: AddVacant.php?error". urlencode($error));

?>