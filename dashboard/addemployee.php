<?php 
	ob_start();
	include("../inc/db_connect.php");

	


		$id = mysqli_real_escape_string($db_connect, $_POST['id']);
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
		$id_check =  mysqli_query($db_connect, "SELECT id FROM client WHERE id = '$id' ");
								
		//Count the amount of rows where username = $username
		$check_id = mysqli_num_rows($id_check);
		ob_end_clean();	
		if ($check_id == 0) {
			$query = mysqli_query($db_connect, "INSERT INTO `client` (`id`, `Name`, `pan_name`, `password`, `d_o_b`, `pan_no`, `aadhar_no`, `mob_no`, `alt_mob_no`, `email`, `father_name`, `address`, `remarks`) VALUES ('$id', '$Name', '$pan_name', '$password', '$d_o_b', '$pan_no', '$aadhar_no', '$mob_no', '$alt_mob_no', '$email', '$father_name', '$address', '$remarks')");
			$querycount = mysqli_num_rows($query);

			ob_end_clean();			
			if($query){

				echo json_encode(array("status" => "Success"));
				exit();			
			} else {
				echo json_encode(array("status" => "failed"));
				exit();
			}

		} else {
			echo json_encode(array("status" => "exists"));
			exit();
		}
	

?>