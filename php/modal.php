<?php
            $query = "SELECT * from educator LIMIT 4";
            $tutors = GetTableData($query, $connect);
            foreach ($tutors as $index =>$tutor) {
                $bio=$tutor['short_bio'];
                $subject=$tutor['qualification'];
                $special=$tutor['specialize'];
                $name=$tutor['fullname'];
                $address=$tutor['address'];
                $image=$tutor['image'];
                $modalId = "modal-" . $index;

                echo "<div class='col-md-3 tutor-card' data-name='$bio $subject $special $address $name'>";
                echo "<div class='flip-card'>";
                   echo "<div class='flip-card-inner'>";
                       echo "<div class='flip-card-front'>";
                        echo "<img src='data:image/jpeg;base64," . base64_encode($image) . "' alt='$name' class='card-img-top'>";
                           echo "<h5 class='card-title'> $name </h5>";
                           echo "<p class='card-text'> $subject </p>";
                        echo "</div>";
                       echo "<div class='flip-card-back'>";
                           echo "<h5 class='card-title'> Mr. $name</h5>";
                          echo "<p>Most hired by $subject students on our platform.</p>";
                           echo "<a href='#' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#$modalId'>See Profile</a><br>";
                           echo "<a href='#' class='btn btn-primary'>Hire</a>";
                      echo "</div>";
                   echo "</div>";
               echo "</div>";
           echo "</div>";
           echo "<div class='modal fade' id='$modalId' tabindex='-1' aria-labelledby='{$modalId}Label' aria-hidden='true'>";
                echo "<div class='modal-dialog'>";
                echo "<div class='modal-content'>";
                echo "<div class='modal-header'>";
                echo "<h5 class='modal-title' id='{$modalId}Label'>$name's Profile</h5>";
                echo "<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>";
                echo "</div>";
                echo "<div class='modal-body'>";
                echo "<p><strong>Qualification:</strong> $subject</p>";
                echo "<p><strong>Specialization:</strong> $special</p>";
                echo "<p><strong>Address:</strong> $address</p>";
                echo "<p><strong>Bio:</strong> $bio</p>";
                echo "</div>";
                echo "<div class='modal-footer'>";
                echo "<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>";
                echo "<button type='button' class='btn btn-primary'>Hire</button>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>