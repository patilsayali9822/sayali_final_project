<?php 
include('../db/db.php');
$id = $_POST['id'];

$sql = "SELECT * FROM personal_details WHERE id = '$id'";
$resutl = mysqli_query($conn, $sql);
$result_get_details = array();

if (mysqli_num_rows($resutl) > 0) {
	foreach ($resutl as $row) {

 $result_get_details[] = array("name"=>$row['name'], "email"=>$row['email'], "phone"=>$row['phone'], "age"=>$row['age'], "gender"=>$row['gender'], "address"=>$row['address'], "photo"=>$row['photo'],);

}
echo json_encode($result_get_details);

}		




?>