<?php 
	ob_start();
	include("../inc/db_connect.php");

	


		$Name = mysqli_real_escape_string($db_connect, $_POST['Name']);
		$doi = mysqli_real_escape_string($db_connect, $_POST['d_o_i']);
		$doc = mysqli_real_escape_string($db_connect, $_POST['d_o_c']);
		$cin = mysqli_real_escape_string($db_connect, $_POST['cin']);
		$address = mysqli_real_escape_string($db_connect, $_POST['address']);
        $pan = mysqli_real_escape_string($db_connect, $_POST['pan']);
		$itpwd = mysqli_real_escape_string($db_connect, $_POST['itpwd']);
		$tan = mysqli_real_escape_string($db_connect, $_POST['tan']);
		$tanpwd = mysqli_real_escape_string($db_connect, $_POST['tanpwd']);
		$traces = mysqli_real_escape_string($db_connect, $_POST['traces']);
		$tracespwd = mysqli_real_escape_string($db_connect, $_POST['tracespwd']);
		$mca_idv2 = mysqli_real_escape_string($db_connect, $_POST['idv2']);
        $mca_idv2_pwd = mysqli_real_escape_string($db_connect, $_POST['idv2pwd']);
		$mca_idv3 = mysqli_real_escape_string($db_connect, $_POST['idv3']);
		$mca_idv3_pwd = mysqli_real_escape_string($db_connect, $_POST['idv3pwd']);
		$firmsenityuser = mysqli_real_escape_string($db_connect, $_POST['entity']);
		$firmsenityuserpwd= mysqli_real_escape_string($db_connect, $_POST['entitypwd']);
		$buisnessuser = mysqli_real_escape_string($db_connect, $_POST['buisness_entity']);
		$buisnesspwd = mysqli_real_escape_string($db_connect, $_POST['buisness_entitypwd']);
		$directordetails = mysqli_real_escape_string($db_connect, $_POST['directordetails']);
		$notes = mysqli_real_escape_string($db_connect, $_POST['notes']);

										
		//Check if user already exists
			$query = mysqli_query($db_connect, "INSERT INTO company
            (Name,DateofIncorporation,DateofCommencement,CIN,Address,PAN,IT_Password,TAN,TAN_Password,TRACES_LOGIN,TRACES_Password,MCA_IDV2,MCA_PasswordV2,MCA_IDV3,MCA_PasswordV3,FIRMS_ENTITYUSER,FIRMS_ENTITY_PASSWORD,FIRMS_BUSINESS_USER,FIRMS_BUSINESS_PASSWORD,DIRECTORS_DETAILS,NOTESandHINTS) 
            VALUES ('$Name', '$doi', '$doc', '$d_o_b', '$cin', '$address', '$pan', '$itpwd', '$tan', 
            '$tanpwd', '$traces', '$tracespwd' '$mca_idv2', '$mca_idv2_pwd' '$mca_idv3', '$mca_idv3_pwd ', '$firmsenityuser' '$firmsenityuserpwd', '$buisnessuser',
             '$buisnesspwd' '$directordetails', '$notes')");
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