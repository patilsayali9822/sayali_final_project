<?php 
include('../db/db.php');

 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $age = $_POST['age'];
 $gender = $_POST['gender'];
 $address = $_POST['address'];

 $pro_id = $_POST['pro_id'];

 $pro_photo_name = $_FILES['pro_photo']['name'];
$target_dir = "../photo/";
$target_file = $target_dir . basename($_FILES["pro_photo"]["name"]);




 // $sql= "INSERT INTO personal_details (name, email, phone, age, gender, address, photo) VALUES ('$name', '$email', '$phone', '$age', '$gender', '$address', '$pro_photo_name')";

if($pro_photo_name == ''){

$sql = "UPDATE personal_details SET name = '$name', email = '$email', phone = '$phone', age = '$age', gender = '$gender', address = '$address' WHERE id = '$pro_id'";

 if (mysqli_query($conn, $sql)) {
 	echo "1";

 	// move_uploaded_file($_FILES['pro_photo']['tmp_name'],$target_dir.$pro_photo_name);
 }
 else{
 	echo "0";
 }
}
else{
   $sql = "UPDATE personal_details SET name = '$name', email = '$email', phone = '$phone', age = '$age', gender = '$gender', address = '$address', photo = '$pro_photo_name' WHERE id = '$pro_id'";

 if (mysqli_query($conn, $sql)) {
    echo "1";

     move_uploaded_file($_FILES['pro_photo']['tmp_name'],$target_dir.$pro_photo_name);
 }
 else{
    echo "0";
 } 
}


?>