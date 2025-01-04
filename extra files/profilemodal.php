<?php
echo "<div class='modal fade' id='profilePicModal' tabindex='-1' aria-labelledby='profilePicModalLabel' aria-hidden='true'>";
       echo "<div class='modal-dialog modal-lg'>";
           echo "<div class='modal-content'>";
               echo "<div class='modal-header'>";
                   echo "<h5 class='modal-title' id='profilePicModalLabel'>Profile Picture</h5>";
                   echo "<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>";
               echo "</div>";
                
                echo "<div class='modal-body text-center'>";
                    require_once 'dbconf.php';
                    $user=$_SESSION['user_name'];
                    $sql="SELECT image FROM profile WHERE username='$user'";
                    $images=GetTableData($connect,$sql);
                    foreach ($images as $value) {
                        $image=$value['image'];
                                  
                    echo "<img id='largeProfilePic' src='data:image/jpeg;base64,". base64_encode($image) ."' alt='Profile Picture' class='modal-img'>";
                    }
                echo "</div>";
               echo "<div class='modal-footer'>";
                echo    "<form action='userprofile.php' method='post'>";
                 echo   "<input type='file' id='modalFileInput' name='image' accept='image/*' style='display: none;'>";
                 echo   "<button type='submit' class='btn btn-primary' id='editProfilePicButton'>Upload New Profile Picture</button>";
                 echo   "</form>";
                echo "</div>";
                
          echo  "</div>";
       echo "</div>";
echo "</div>";

echo "<div class='modal-body text-center'>";
   echo "<img id='largeProfilePic' src='images/teacher.png' alt='Profile Picture' class='modal-img' style='display: none;'>";
   echo "<p id='uploadPrompt' class='text-muted'></p>";
echo "</div>";
?>

<script src="../js/fileupload.js"></script>