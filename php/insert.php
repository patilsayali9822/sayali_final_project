<?php 
include('../db/db.php');

 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $age = $_POST['age'];
 $gender = $_POST['gender'];
 $address = $_POST['address'];



 $pro_photo_name = $_FILES['pro_photo']['name'];
$target_dir = "../photo/";
$target_file = $target_dir . basename($_FILES["pro_photo"]["name"]);




 $sql= " INSERT INTO personal_details (name, email, phone, age, gender, address, photo) VALUES ('$name', '$email', '$phone', '$age', '$gender', '$address', '$pro_photo_name')";
 if (mysqli_query($conn, $sql)) {
 	echo "1";

 	move_uploaded_file($_FILES['pro_photo']['tmp_name'],$target_dir.$pro_photo_name);
 }
 else{
 	echo "0";
 }


?>