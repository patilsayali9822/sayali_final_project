<?php 
include('../db/db.php');

$i = '';
$sql= "SELECT * FROM personal_details ORDER BY id  DESC";
$resutl = mysqli_query($conn, $sql);
if (mysqli_num_rows($resutl) > 0) {
	foreach ($resutl as $row) {
		$i++;
		?>
		  <tr>
      <th scope="row"><?=$i?></th>
      <td><img style="width: 40px;height: 40px;border-radius: 50%;" src="photo/<?=$row['photo']?>"></td>
      <td><?=$row['name']?></td>
      <td><?=$row['email']?></td>
       <td><?=$row['phone']?></td>
      <td><?=$row['age']?></td>
      <td><?=$row['gender']?></td>
      <td><?=$row['address']?></td>
      <td><i style="font-size: 20px;" class="mdi mdi-table-edit update_data" id="<?=$row['id']?>"></i> &nbsp; 


      	<i style="font-size: 20px;" class="mdi mdi-delete  delete_btn" id="<?=$row['id']?>"></i></td>
    </tr>


		<?php 	
	}	

}



?>