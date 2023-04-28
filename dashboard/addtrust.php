<?php 
	ob_start();
	include("../inc/db_connect.php");

	


		$Name = mysqli_real_escape_string($db_connect, $_POST['Name']);
		$pan = mysqli_real_escape_string($db_connect, $_POST['pan']);
		$reg_no = mysqli_real_escape_string($db_connect, $_POST['reg_no']);
		$d_o_r = mysqli_real_escape_string($db_connect, $_POST['d_o_r']);
		$tan = mysqli_real_escape_string($db_connect, $_POST['tan']);
		$tanpwd = mysqli_real_escape_string($db_connect, $_POST['tanpwd']);
		$traces = mysqli_real_escape_string($db_connect, $_POST['traces']);
		$tracespwd= mysqli_real_escape_string($db_connect, $_POST['tracespwd']);
		$entity= mysqli_real_escape_string($db_connect, $_POST['entity']);
		$entitypwd = mysqli_real_escape_string($db_connect, $_POST['entitypwd']);
		$itpwd = mysqli_real_escape_string($db_connect, $_POST['itpwd']);
		$address = mysqli_real_escape_string($db_connect, $_POST['address']);

										
		//Check if user already exists
			$count=mysqli_num_rows(mysqli_query($db_connect,"Select * from trust"));
			$query = mysqli_query($db_connect, "INSERT INTO trust (Name, PAN_NO, Registration_No, Date_of_Registration, TAN, TAN_Password, TRACES_LOGIN, TRACES_Password, FCRA_USERID, FCRA_PASSWORD, IT_Password, Address)
			 VALUES ('$Name', '$pan', '$reg_no', '$d_o_r', '$tan', '$tanpwd', '$traces', '$tracespwd', '$entity', '$entitypwd', '$itpwd', '$address')");
			$count1=mysqli_num_rows(mysqli_query($db_connect,"Select * from trust"));
			ob_end_clean();			
			if($count1>$count){
				echo json_encode(array("status" => "Success"));
				exit();			
			} else {
				echo json_encode(array("status" => "failed"));
				exit();
			}


?>