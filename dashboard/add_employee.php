<?php
	include("../inc/header.php");
										    
	if($usertype != "Admin"){
        header("Location: ../dashboard");
    }

?>
	<section class="side-menu fixed left">
		<div class="top-sec">
			<div class="dash_logo">
				<img src="../images/logo.jpg" alt="CA.VK Logo">
			</div>			
			<p>Business Client Records</p>
		</div>
		<ul class="nav">
			<li class="nav-item"><a href="../dashboard"><span class="nav-icon"><i class="fa fa-users"></i></span>All CLIENTS</a></li>
			<li class="nav-item"><a href="../dashboard/current_employees.php"><span class="nav-icon"><i class="fa fa-check"></i></span>Current </a></li>
			<li class="nav-item"><a href="../dashboard/past_employees.php"><span class="nav-icon"><i class="fa fa-times"></i></span>Past </a></li>
			<?php if($usertype == "Admin"){ ?>
				<li class="nav-item current"><a href="../dashboard/add_employee.php"><span class="nav-icon"><i class="fa fa-user-plus"></i></span>Add NEW CLIENT</a></li>
				<li class="nav-item"><a href="../dashboard/add_user.php"><span class="nav-icon"><i class="fa fa-user"></i></span>Add User</a></li>
			<?php		} ?>
			<li class="nav-item"><a href="../dashboard/settings.php"><span class="nav-icon"><i class="fa fa-cog"></i></span>Settings</a></li>
			<li class="nav-item"><a href="../dashboard/logout.php"><span class="nav-icon"><i class="fa fa-sign-out"></i></span>Sign out</a></li>
		</ul>
	</section>
	<section class="contentSection right clearfix">
		<div class="displaySuccess"></div>
		<div class="container">
			<div class="wrapper add_employee clearfix">
				<div class="section_title">Add CLIENT</div>
				<form id="addemployee" class="clearfix" method="" action="">
					<div class="input-box input-small left">
						<label for="firstname">Name</label><br>
						<input type="text" class="inputField firstname" name="Name">
						<div class="error firstnameerror"></div>
					</div>
					<br>
					<div class="input-box input-small left">
						<label for="lastname">PAN number</label><br>
						<input type="text" class="inputField firstname" name="pan_no">
						<div class="error lastnameerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="phone">Password</label><br>
						<input type="text" class="inputField phone" name="password">
						<div class="error phoneerror"></div>
					</div>
					
					<div class="input-box input-small left">
						<label for="resaddress">Date of Birth</label><br>
						<input type="date" class="inputField firstname" name="d_o_b">
						<div class="error resaddresserror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="reslocation">Pan Card name</label><br>
						<input type="text" class="inputField reslocation" name="pan_name">
						<div class="error reslocationerror"></div>
					</div>
				
					<div class="input-box input-textarea right clearfix">
						<label for="resdirection">Aadhar Number</label><br>
						<textarea class="inputField resdirection" name="aadhar_no"></textarea>
						<div class="error resdirectionerror"></div>
					</div>
					<div class="input-box input-upload-box left">
						<div class="error photoerror"></div>
						<div class="passport_file"></div>
					</div>
					<div class="input-box input-small left">
						<label for="idnumber">Mobile Number</label><br>
						<input type="text" class="inputField idnumber" name="mob_no">
						<div class="error IDnumbererror"></div>
					</div>
					<!--<div class="input-box input-upload-box left">
						<div class="upload-wrapper">
							<div class="upload-box">
								<input type="file" name="nationalID" class="uploadField nationalID">
								<div class="uploadfile nationalID_file">Upload Selected ID type</div>
								<div class="filebtn nationID-btn">Upload</div>
								<div class="filebtn nationID-disbtn">Upload</div>
							</div>
						</div>
						<div class="error nationalIDerror"></div>
						<div class="selected_nationalID_file"></div>
					</div>-->
					<div class="input-box input-small left">
						<label for="fullname">Alternative Mobile Number</label><br>
						<input type="text" class="inputField fullname" name="alt_mob_no">
						<div class="error fullnameerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="relationship">Email</label><br>
						<input type="email" class="inputField relationship" name="email">
						<div class="error relationshiperror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="kinphone">Alternative Email</label><br>
						<input type="text" class="inputField kinphone" name="alt_email">
						<div class="error kinphoneerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="kinresaddress">Father name</label><br>
						<input type="text" class="inputField kinresaddress" name="father_name">
						<div class="error kinresaddresserror"></div>
					</div>
					<div class="input-box input-textarea left clearfix">
						<label for="kinresdirection">Remarks</label><br>
						<textarea class="inputField kinresdirection" name="remarks"></textarea>
						<div class="error kinresdirectionerror"></div>
					</div>
					<div class="input-box input-textarea left clearfix">
						<label for="kinresdirection">Address</label><br>
						<textarea class="inputField kinresdirection" name="address"></textarea>
						<div class="error kinresdirectionerror"></div>
					</div>
					<div class="input-box">
						<button type="submit" class="submitField">Add Data</button>
					</div>
				</form>
			</div>
		</div>
	</section>
<script type="text/javascript" src="../js/global.js"></script>
</body>
</html>