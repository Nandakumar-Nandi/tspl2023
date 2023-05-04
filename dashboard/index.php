<?php
	include("../inc/header.php");

    include('../phpclasses/pagination.php');

    $limit = 10;
	    
	//get number of rows
	$queryNum = $db_connect->query("SELECT COUNT(*) as postNum FROM individual LIMIT $limit");
	$resultNum = $queryNum->fetch_assoc();
	$rowCount = $resultNum['postNum'];
										    
	//initialize pagination class
	$pagConfig = array(
		'totalRows' => $rowCount,
		'perPage' => $limit,
		'link_func' => 'searchFilter'
	);
	$pagination =  new Pagination($pagConfig);
										    
	//get rows


?>
	<section class="side-menu fixed left">
		<div class="top-sec">
			<div class="dash_logo">
				<img src="../images/logo.png" alt="TSPL Logo">
			</div>			
			<p>Client Records</p>
		</div>
		<ul class="nav">
			<li class="nav-item current"><a href="../dashboard"><span class="nav-icon"><i class="fa fa-users"></i></span>All Client Detail</a></li>
			<?php if($usertype == "Admin"){ ?>
				<li class="nav-item"><a href="../dashboard/add_employee.php"><span class="nav-icon"><i class="fa fa-user-plus"></i></span>Add Individual </a></li>
				<li class="nav-item"><a href="../dashboard/add_employee.php"><span class="nav-icon"><i class="fa fa-user-plus"></i></span>Add Trust & Society</a></li>
				<li class="nav-item"><a href="../dashboard/add_employee.php"><span class="nav-icon"><i class="fa fa-user-plus"></i></span>Add Company</a></li>
				<li class="nav-item"><a href="../dashboard/add_user.php"><span class="nav-icon"><i class="fa fa-user"></i></span>Add Employee</a></li>
			<?php		} ?>
			<li class="nav-item"><a href="../dashboard/settings.php"><span class="nav-icon"><i class="fa fa-cog"></i></span>Settings</a></li>
			<li class="nav-item"><a href="../dashboard/logout.php"><span class="nav-icon"><i class="fa fa-sign-out"></i></span>Sign out</a></li>
		</ul>
	</section>
	<section class="contentSection right clearfix">
		<div class="container">
			<div class="wrapper employee_list clearfix">
				
				<div class="top-bar">
					<div class="top-item">
						<form id="empFilter" method="post" action="">
							<input class="filterField filterVal" type="text" placeholder="Search Name" onkeyup="searchFilter()">
						</form>
					</div>
				</div>
				<div>
					<div class="section_title">Individuals</div>
				<?php
					$getemp = mysqli_query($db_connect, "SELECT * FROM individual ORDER BY id ASC LIMIT $limit");
					$getempcount = mysqli_num_rows($getemp);
				?>
				<ul class="client_list">
					<li class="client_list_head">
						<div class="client_item_head emp_id">NAME</div>
						<div class="client_item_head emp_name">PAN NUMBER</div>
						<div class="client_item_head">PASSWORD</div>
						<div class="client_item_head">PAN NAME</div>
						<div class="client_item_head emp_status">AADHAR</div>
					</li>
					<div id="displayempList">
						<?php
							if($getempcount >= 1 ){
								while($fetch = mysqli_fetch_assoc($getemp)){
									$id = $fetch['id'];
									$name = $fetch['Name'];
									$pan_no = $fetch['Pan_Number'];
									$password = $fetch['Password'];
									$pan_name = $fetch['Pancard_name'];
									$aadhar_no = $fetch['Aadhar_no'];

									if($password == ""){
										if($usertype == "Admin"){
											echo '										
												<li class="client_item">
													<div class="l_name">'.$name.'</div>
													<div class="l_pan_no">'.$pan_no.'</div>
													<div class="l_password">'.$password.'</div>
													<div class="l_pan_name">'.$pan_name.'</div>
													<div class="l_aadhar_no">'.$aadhar_no.'</div>
													<div class="emp_column">
														<ul class="action_list">
															<li class="action_item action_view" data-id="'.$id.'" title="View"><i class="fa fa-eye"></i></li>
															<li class="action_item action_edit" data-id="'.$id.'" title="Edit"><i class="fa fa-pencil-square-o"></i></li>
															<li class="action_item action_delete" data-id="'.$id.'" title="Delete"><i class="fa fa-trash-o"></i></li>
														</ul>
													</div>
												</li>
											';
										} else {
											echo '										
												<li class="client_item">
												<div class="l_name">'.$name.'</div>
												<div class="l_pan_no">'.$pan_no.'</div>
												<div class="l_password">'.$password.'</div>
												<div class="l_pan_name">'.$pan_name.'</div>
												<div class="l_aadhar_no">'.$aadhar_no.'</div>
												<div class="emp_column">
														<ul class="action_list">
															<li class="action_item action_view" data-id="'.$id.'" title="View"><i class="fa fa-eye"></i></li>
														</ul>
													</div>
												</li>
											';											
										}
									} else {
										if($usertype == "Admin"){
											echo '										
												<li class="client_item">
												<div class="l_name">'.$name.'</div>
												<div class="l_pan_no">'.$pan_no.'</div>
												<div class="l_password">'.$password.'</div>
												<div class="l_pan_name">'.$pan_name.'</div>
												<div class="l_aadhar_no">'.$aadhar_no.'</div>
												<div class="emp_column">
														<ul class="action_list">
															<li class="action_item action_view" data-id="'.$id.'" title="View"><i class="fa fa-eye"></i></li>
															<li class="action_item action_edit" data-id="'.$id.'" title="Edit"><i class="fa fa-pencil-square-o"></i></li>
															<li class="action_item action_delete" data-id="'.$id.'" title="Delete"><i class="fa fa-trash-o"></i></li>
														</ul>
													</div>
												</li>
											';
										} else {

											echo '										
												<li class="client_item">
												<div class="l_name">'.$name.'</div>
												<div class="l_pan_no">'.$pan_no.'</div>
												<div class="l_password">'.$password.'</div>
												<div class="l_pan_name">'.$pan_name.'</div>
												<div class="l_aadhar_no">'.$aadhar_no.'</div>
												<div class="emp_column">
														<ul class="action_list">
															<li class="action_item action_view" data-id="'.$id.'" title="View"><i class="fa fa-eye"></i></li>
														</ul>
													</div>
												</li>
											';
										}
									}
								}
								echo $pagination->createLinks();
							} else {
								echo '<li class="client_item"> No employee record found </li>';
							}
						?>
					</div>
				</ul>
			</div>

			<!----->
				<div class="section_title">Company Details</div>
			<div>
				<?php
					$getemp = mysqli_query($db_connect, "SELECT * FROM individual ORDER BY id ASC LIMIT $limit");
					$getempcount = mysqli_num_rows($getemp);
				?>
				<ul class="client_list">
					<li class="client_list_head">
						<div class="client_item_head emp_id">NAME</div>
						<div class="client_item_head emp_name">PAN NUMBER</div>
						<div class="client_item_head">CIN</div>
						<div class="client_item_head">TAN</div>
						<div class="client_item_head emp_status">IT PASSWORD</div>
					</li>
					<div id="displayempList">
						<?php
							if($getempcount >= 1 ){
								while($fetch = mysqli_fetch_assoc($getemp)){
									$id = $fetch['id'];
									$name = $fetch['Name'];
									$pan = $fetch['pan'];
									$cin = $fetch['cin'];
									$tan = $fetch['tan'];
									$itpwd = $fetch['itpwd'];

									if($password == ""){
										if($usertype == "Admin"){
											echo '										
												<li class="client_item">
													<div class="l_name">'.$name.'</div>
													<div class="l_pan">'.$pan.'</div>
													<div class="l_cin">'.$cin.'</div>
													<div class="l_tan">'.$tan.'</div>
													<div class="itpwd">'.$itpwd.'</div>
													<div class="emp_column">
														<ul class="action_list">
															<li class="action_item action_view" data-id="'.$id.'" title="View"><i class="fa fa-eye"></i></li>
															<li class="action_item action_edit" data-id="'.$id.'" title="Edit"><i class="fa fa-pencil-square-o"></i></li>
															<li class="action_item action_delete" data-id="'.$id.'" title="Delete"><i class="fa fa-trash-o"></i></li>
														</ul>
													</div>
												</li>
											';
										} else {
											echo '										
													<div class="l_name">'.$name.'</div>
													<div class="l_pan">'.$pan.'</div>
													<div class="l_cin">'.$cin.'</div>
													<div class="l_tan">'.$tan.'</div>
													<div class="itpwd">'.$itpwd.'</div>
												<div class="emp_column">
														<ul class="action_list">
															<li class="action_item action_view" data-id="'.$id.'" title="View"><i class="fa fa-eye"></i></li>
														</ul>
													</div>
												</li>
											';											
										}
									} else {
										if($usertype == "Admin"){
											echo '										
												<li class="client_item">
													<div class="l_name">'.$name.'</div>
													<div class="l_pan">'.$pan.'</div>
													<div class="l_cin">'.$cin.'</div>
													<div class="l_tan">'.$tan.'</div>
													<div class="itpwd">'.$itpwd.'</div>
												<div class="emp_column">
														<ul class="action_list">
															<li class="action_item action_view" data-id="'.$id.'" title="View"><i class="fa fa-eye"></i></li>
															<li class="action_item action_edit" data-id="'.$id.'" title="Edit"><i class="fa fa-pencil-square-o"></i></li>
															<li class="action_item action_delete" data-id="'.$id.'" title="Delete"><i class="fa fa-trash-o"></i></li>
														</ul>
													</div>
												</li>
											';
										} else {

											echo '										
												<li class="client_item">
													<div class="l_name">'.$name.'</div>
													<div class="l_pan">'.$pan.'</div>
													<div class="l_cin">'.$cin.'</div>
													<div class="l_tan">'.$tan.'</div>
													<div class="itpwd">'.$itpwd.'</div>
												<div class="emp_column">
														<ul class="action_list">
															<li class="action_item action_view" data-id="'.$id.'" title="View"><i class="fa fa-eye"></i></li>
														</ul>
													</div>
												</li>
											';
										}
									}
								}
								echo $pagination->createLinks();
							} else {
								echo '<li class="client_item"> No employee record found </li>';
							}
						?>
					</div>
				</ul>
			</div>
			
			<!------>
				<div class="section_title">Trust and Society</div>
			<div>
				<?php
					$getemp = mysqli_query($db_connect, "SELECT * FROM individual ORDER BY id ASC LIMIT $limit");
					$getempcount = mysqli_num_rows($getemp);
				?>
				<ul class="client_list">
					<li class="client_list_head">
						<div class="client_item_head emp_id">NAME</div>
						<div class="client_item_head emp_name">PAN NUMBER</div>
						<div class="client_item_head">REG.NO</div>
						<div class="client_item_head">TAN</div>
						<div class="client_item_head emp_status">TAN PASSWORD</div>
					</li>
					<div id="displayempList">
						<?php
							if($getempcount >= 1 ){
								while($fetch = mysqli_fetch_assoc($getemp)){
									$id = $fetch['id'];
									$name = $fetch['Name'];
									$pan = $fetch['pan'];
									$reg_no = $fetch['reg_no'];
									$tan = $fetch['tan'];
									$tanpwd= $fetch['tanpwd'];

									if($password == ""){
										if($usertype == "Admin"){
											echo '										
												<li class="client_item">
													<div class="l_name">'.$name.'</div>
													<div class="l_pan">'.$pan.'</div>
													<div class="l_reg_no">'.$reg_no.'</div>
													<div class="l_tan">'.$tan.'</div>
													<div class="l_tanpwd">'.$tanpwd.'</div>
													<div class="emp_column">
														<ul class="action_list">
															<li class="action_item action_view" data-id="'.$id.'" title="View"><i class="fa fa-eye"></i></li>
															<li class="action_item action_edit" data-id="'.$id.'" title="Edit"><i class="fa fa-pencil-square-o"></i></li>
															<li class="action_item action_delete" data-id="'.$id.'" title="Delete"><i class="fa fa-trash-o"></i></li>
														</ul>
													</div>
												</li>
											';
										} else {
											echo '										
												<li class="client_item">
											<div class="l_name">'.$name.'</div>
													<div class="l_pan">'.$pan.'</div>
													<div class="l_reg_no">'.$reg_no.'</div>
													<div class="l_tan">'.$tan.'</div>
													<div class="l_tanpwd">'.$tanpwd.'</div>
												<div class="emp_column">
														<ul class="action_list">
															<li class="action_item action_view" data-id="'.$id.'" title="View"><i class="fa fa-eye"></i></li>
														</ul>
													</div>
												</li>
											';											
										}
									} else {
										if($usertype == "Admin"){
											echo '										
												<li class="client_item">
											<div class="l_name">'.$name.'</div>
													<div class="l_pan">'.$pan.'</div>
													<div class="l_reg_no">'.$reg_no.'</div>
													<div class="l_tan">'.$tan.'</div>
													<div class="l_tanpwd">'.$tanpwd.'</div>
												<div class="emp_column">
														<ul class="action_list">
															<li class="action_item action_view" data-id="'.$id.'" title="View"><i class="fa fa-eye"></i></li>
															<li class="action_item action_edit" data-id="'.$id.'" title="Edit"><i class="fa fa-pencil-square-o"></i></li>
															<li class="action_item action_delete" data-id="'.$id.'" title="Delete"><i class="fa fa-trash-o"></i></li>
														</ul>
													</div>
												</li>
											';
										} else {

											echo '										
												<li class="client_item">
												<div class="l_name">'.$name.'</div>
													<div class="l_pan">'.$pan.'</div>
													<div class="l_reg_no">'.$reg_no.'</div>
													<div class="l_tan">'.$tan.'</div>
													<div class="l_tanpwd">'.$tanpwd.'</div>
														<ul class="action_list">
															<li class="action_item action_view" data-id="'.$id.'" title="View"><i class="fa fa-eye"></i></li>
														</ul>
													</div>
												</li>
											';
										}
									}
								}
								echo $pagination->createLinks();
							} else {
								echo '<li class="client_item"> No employee record found </li>';
							}
						?>
					</div>
				</ul>
			</div>
		</div>
		<div class="modal">
			<span class="close-modal">
				<img src="../images/times.png">
			</span>
			<div class="inner_section">
				<div id="record_container" class="record_container">
					<span class="print-modal" onclick="Clickheretoprint()">
						<img src="../images/print.png">
					</span>
					<div id="table">
					</div>
					<div class="printbtn_wrapper">
						<span class="printbtn"> Print</span>
					</div>
				</div>
			</div>
		</div>
		<div class="del_modal">
			<div class"inner_section">
				<div class="delcontainer">
					<div class="del_title">Delete Record</div>
					<div class="del_warning"></div>
					<div class="btnwrapper">
						<span class="delbtn yesbtn" data-id="">Yes</span>
						<span class="delbtn nobtn">No</span>
					</div>
				</div>
			</div>
		</div>
	</section>
<script type="text/javascript" src="../js/global.js"></script>
</body>
</html>