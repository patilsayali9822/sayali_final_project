<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>home</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">	
	
	<link class="rtl_switch_css" href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="dist/css/mdicons.min.css" rel="stylesheet" type="text/css">
	<link class="rtl_switch_css" href="dist/css/app.min.css" rel="stylesheet" type="text/css">
	<link href="dist/css/theme.min.css" rel="stylesheet" type="text/css">
	<link href="dist/css/skins/light-skin.css" rel="stylesheet" type="text/css">
	<link href="dist/css/skins/dark-skin.css" rel="stylesheet" type="text/css">
	
	<link class="rtl_switch_page_css" href="dist/css/pages/inbox.css" rel="stylesheet" type="text/css">	
	
</head>

<body>
	<style type="text/css">

		.text-design{
	       border:1px solid grey!important;
	       padding-left: 5px;
	       border-radius: 5px;
	       margin-bottom: 10px;
	      } 

	</style>

<br><br>
<div class="container">
<div class="row">
	<div class="col-12">
	<button style="float: right;text-transform: capitalize;color: white;" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Add New</button>
	</div>
</div>

</div>
<br>
<div class="container">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sr.No.</th>
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody id="fetch_data">
  
  </tbody>
</table>

</div>








<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Personal Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


      	<form id="personal_details_form" method="POST">


        <center><img style="width: 80px;height: 80px;border-radius: 50%;" src="img/user.jpg" id="photo"><br><br>
      

        <label for="profile_image" style="font-size: 18px;">Choose Image</label>

    </center>

        	<input style="display: none;" id="profile_image" type="file" name="pro_photo" class="profile_file" onchange="document.getElementById('photo').src = window.URL.createObjectURL(this.files[0])">
        <br><br>

        <input style="border:1px solid grey!important;padding-left: 5px;border-radius: 5px;margin-bottom: 10px;"  type="text" name="name" class="form-control" placeholder="Enter Name">


        <input style="border:1px solid grey!important;padding-left: 5px;border-radius: 5px;margin-bottom: 10px;" type="text" name="email" class="form-control text-design" placeholder="Enter Email">

        <input  style="border:1px solid grey!important;padding-left: 5px;border-radius: 5px;margin-bottom: 10px;" type="text" name="phone" class="form-control text-design" placeholder="Enter Phone">

        <input style="border:1px solid grey!important;padding-left: 5px;border-radius: 5px;margin-bottom: 10px;" type="text" name="age" class="form-control text-design" placeholder="Enter Age">

        <br>
        <input style="margin-left: 30px;" name="gender" type="radio" id="male" value="Male">
        <label style="margin-left: 30px;" for="male">Male</label>

        <input style="margin-left: 30px;" name="gender" type="radio" id="female" value="Female">
        <label style="margin-left: 30px;" for="female">Female</label>

        <br><br>
        <textarea name="address" class="form-control text-design" placeholder="Enter Address"></textarea>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close_btn" data-dismiss="modal" style="text-transform: capitalize;">Close</button>
        <button type="submit" class="btn btn-primary" style="color: white;text-transform: capitalize;">Save changes</button>
      </div>

  </form>



    </div>
  </div>
</div>






<!-- Modal -->
<div class="modal fade" id="update_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Personal Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


      	<form id="update_personal_details_form" method="POST">
      		<input type="hidden" name="pro_id" id="pro_id">

        <center><div id="photo_show"></div><br><br>
      

        <label for="profile_image2" style="font-size: 18px;">Choose Image</label>

    </center>

        	<input style="display: none;" id="profile_image2" type="file" name="pro_photo" class="profile_file" onchange="document.getElementById('photo2').src = window.URL.createObjectURL(this.files[0])">
        <br><br>

        <input style="border:1px solid grey!important;padding-left: 5px;border-radius: 5px;margin-bottom: 10px;"  type="text" name="name" class="form-control name2" placeholder="Enter Name">


        <input style="border:1px solid grey!important;padding-left: 5px;border-radius: 5px;margin-bottom: 10px;" type="text" name="email" class="form-control text-design email2" placeholder="Enter Email">

        <input  style="border:1px solid grey!important;padding-left: 5px;border-radius: 5px;margin-bottom: 10px;" type="text" name="phone" class="form-control text-design phone2" placeholder="Enter Phone">

        <input style="border:1px solid grey!important;padding-left: 5px;border-radius: 5px;margin-bottom: 10px;" type="text" name="age" class="form-control text-design age2" placeholder="Enter Age">

        <br>
        <input style="margin-left: 30px;" name="gender" type="radio" id="male2" value="Male" checked="">
        <label style="margin-left: 30px;" for="male2">Male</label>

        <input style="margin-left: 30px;" name="gender" type="radio" id="female2" value="Female">
        <label style="margin-left: 30px;" for="female2">Female</label>

        <br><br>
        <textarea name="address" class="form-control text-design address2" placeholder="Enter Address"></textarea>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close_btn" data-dismiss="modal" style="text-transform: capitalize;">Close</button>
        <button type="submit" class="btn btn-primary" style="color: white;text-transform: capitalize;">Save changes</button>
      </div>

  </form>



    </div>
  </div>
</div>







</body>

<script src="dist/js/jquery.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/bower.min.js"></script>
<script src="dist/js/plugins/list/list.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="dist/js/email.js"></script>

</html>

<script type="text/javascript">
	$(document).ready(function(){
		fetch_data();
		function fetch_data(){
			$.ajax({
				url:'php/fetch.php',
				method:'POST',
				success:function(data){
					$('#fetch_data').html(data);
				}
			})
		}


		$('#personal_details_form').submit(function(e){
			e.preventDefault();
			$.ajax({
				url:'php/insert.php',
				method:'POST',
				data:new FormData(this),
                 contentType:false,
                 processData:false,
				success:function(data){
					//alert(data);
					if (data == '1') {
					alert("Details Save success !");
					$('.close_btn').click();
					fetch_data();
				    }
				    else{
				    	alert("Error");
				    }

				}
			})	

		})
  


			$('#update_personal_details_form').submit(function(e){
			e.preventDefault();
			$.ajax({
				url:'php/update.php',
				method:'POST',
				data:new FormData(this),
                 contentType:false,
                 processData:false,
				success:function(data){
					//alert(data);
					if (data == '1') {
					alert("Details Update success !");
					$('.close_btn').click();
					fetch_data();
				    }
				    else{
				    	alert("Error");
				    }

				}
			})	

		})
  
   


		$(document).on('click', '.delete_btn', function(e){
			e.preventDefault();
			 if(confirm("Are you sure you want to delete this?")){

			var id = $(this).attr("id");

			$.ajax({
				url:'php/delete.php',
				method:'POST',
				data:{id:id},
				success:function(data){
					//alert(data);
					if(data == '1'){
						alert("Data Deleted Success");
						fetch_data();
					}
					else{
						alert("Error");
					}
				}
			     })
			    } ///if end


			     else{
			        return false;
			    }

		})




		$(document).on('click', '.update_data', function(e){
			e.preventDefault();
			var id = $(this).attr("id");


			$.ajax({
				url:'php/fetch_details.php',
				method:'POST',
				data:{id:id},
				dataType: 'json',
				success:function(data){

					var len = data.length;
                 			if(len > 0){

                 				 var name = data[0]['name'];
                 				 var email = data[0]['email'];
                 				 var phone = data[0]['phone'];

                 				 var age = data[0]['age'];
                 				 var gender = data[0]['gender'];
                 				 var address = data[0]['address'];
                 				  var photo = data[0]['photo'];

                 				  document.getElementById('photo_show').innerHTML = '<img style="width: 80px;height: 80px;border-radius: 50%;" src="photo/'+photo+'" id="photo2">';

                 				  $('.name2').val(name);
                 				  $('.email2').val(email);
                 				  $('.phone2').val(phone);
                 				  $('.age2').val(age);
                 				  $('.address2').val(address);

                 				  $('#pro_id').val(id);

                 				


                 		    }		

				}
			})

			$('#update_modal').modal("show");


		})

















	})
</script>