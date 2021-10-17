<?php 
include('../db/db.php');

$id = $_POST['id'];
$sql = "DELETE FROM personal_details WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
	echo "1";
}
else{
	echo "0";
}

?>