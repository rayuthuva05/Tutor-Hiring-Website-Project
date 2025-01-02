<?php
require_once 'dbconf.php';

function GetTableData($query,$connect){
    $result = mysqli_query($connect,$query);
    $data = array();
    if (mysqli_num_rows($result) > 0){
        $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    return $data;
}


function PrintTable($tableName,$connect)
{

try {

	$sql = "SELECT fullname,age,address,qualification,specialize,year_exp,institute,short_bio FROM $tableName";

	$result = mysqli_query($connect,$sql);
	if (mysqli_num_rows($result)>0) {
		echo "<table border='1' style='background-color: coral'>";
		$col = mysqli_fetch_fields($result);
        $columns=mysqli_num_fields($result);
		
		while ($row = mysqli_fetch_assoc($result)) {
			
			foreach ($row as $key => $value) {
                echo "<tr>";
				echo "<td>$key</td>";
                echo "<td> </td>";
                echo "<td> : </td>";
                echo "<td>$value</td>";
                echo "</tr>";
			}
		}
		echo "</table>"."<br>";
	} else {
		echo "No results";
	}
	
} catch (Exception $e) {
	die($e->getMessage());
}
}

?>
