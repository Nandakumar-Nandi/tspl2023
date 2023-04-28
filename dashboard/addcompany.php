<?php 
	ob_start();
	include("../inc/db_connect.php");

	


		$Name = mysqli_real_escape_string($db_connect, $_POST['Name']);
		$pan_name = mysqli_real_escape_string($db_connect, $_POST['pan_name']);
		$password = mysqli_real_escape_string($db_connect, $_POST['password']);
		$d_o_b = mysqli_real_escape_string($db_connect, $_POST['d_o_b']);
		$pan_no = mysqli_real_escape_string($db_connect, $_POST['pan_no']);
		$aadhar_no = mysqli_real_escape_string($db_connect, $_POST['aadhar_no']);
		$mob_no = mysqli_real_escape_string($db_connect, $_POST['mob_no']);
		$alt_mob_no = mysqli_real_escape_string($db_connect, $_POST['alt_mob_no']);
		$email = mysqli_real_escape_string($db_connect, $_POST['email']);
		$father_name = mysqli_real_escape_string($db_connect, $_POST['father_name']);
		$address = mysqli_real_escape_string($db_connect, $_POST['address']);
		$remarks = mysqli_real_escape_string($db_connect, $_POST['remarks']);

										
		//Check if user already exists
			$query = mysqli_query($db_connect, "INSERT INTO individual (Name,Pancard_name,Password,D_O_B,Pan_Number,Aadhar_no,Mobile_no,Mobile_no_Alt,Email_Prim,Father_name,Address,Remarks) VALUES ('$Name', '$pan_name', '$password', '$d_o_b', '$pan_no', '$aadhar_no', '$mob_no', '$alt_mob_no', '$email', '$father_name', '$address', '$remarks')");
			$querycount = mysqli_num_rows($query);

			ob_end_clean();			
			if($query){

				echo json_encode(array("status" => "Success"));
				exit();			
			} else {
				echo json_encode(array("status" => "failed"));
				exit();
			}


?>