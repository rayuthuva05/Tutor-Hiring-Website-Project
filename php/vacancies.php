<?php
function PrintVacancy($connect,$tableName){
	try {
		$sql="SELECT note FROM $tableName LIMIT 5";
		$result=mysqli_query($connect,$sql);
        if (mysqli_num_rows($result)>0) {
			echo "<table class='table table-bordered table-striped'>";
			echo "<thead>";
                    echo    "<tr>";
                        echo    "<th colspan='3'>Vacancies</th>";
                    echo    "</tr>";
                    echo    "<tr>";
                        echo    "<th>No</th>";
                        echo    "<th>Description</th>";
                        echo    "<th>Contact Student</th>";
                    echo    "</tr>";
            echo    "</thead>";
            echo    "<tbody id='myTable'>";
            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $value) {
                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td> $value</td>";
                    echo "<td><a href='#' class='btn btn-primary'>Contact</a></td>";
                    echo "</tr>";
                }
            }
                echo    "</tbody>";
            echo    "</table>";
		}else{
            echo "No match data";
        }
	} catch (Exception $e) {
		die($e->getMessage());
	}
}
?>

