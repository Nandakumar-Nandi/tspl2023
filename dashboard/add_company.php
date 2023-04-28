<?php
	include("../inc/header.php");									    
	if($usertype != "Admin"){
        header("Location: ../dashboard");
    }

?>
	<section class="side-menu fixed left">
		<div class="top-sec">
			<div class="dash_logo">
				<img src="../images/logo.png" alt="TSPL Logo">
			</div>			
			<p>COMPANY RECORDS</p>
		</div>
		<ul class="nav">
			<li class="nav-item"><a href="../dashboard"><span class="nav-icon"><i class="fa fa-users"></i></span>All CLIENTS</a></li>
			<?php if($usertype == "Admin"){ ?>
				<li class="nav-item current"><a href="../dashboard/add_employee.php"><span class="nav-icon"><i class="fa fa-user-plus"></i></span>Add Individual</a></li>
				<li class="nav-item current"><a href="../dashboard/add_company.php"><span class="nav-icon"><i class="fa fa-user-plus"></i></span>Add Company</a></li>
				<li class="nav-item current"><a href="../dashboard/add_trust.php"><span class="nav-icon"><i class="fa fa-user-plus"></i></span>Add T&S</a></li>
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
				<div class="section_title">Add COMPANY</div>
				<form id="addcompany" class="clearfix" method="" action="">
					<div class="input-box input-small left">
						<label for="firstname">Name</label><br>
						<input type="text" class="inputField firstname" name="Name">
						<div class="error firstnameerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="resaddress">Date of Incorporation</label><br>
						<input type="date" class="inputField firstname" name="d_o_i">
						<div class="error resaddresserror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="resaddress">Date of Commencement</label><br>
						<input type="date" class="inputField firstname" name="d_o_c">
						<div class="error resaddresserror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="reslocation">CIN</label><br>
						<input type="text" class="inputField reslocation" name="cin">
						<div class="error reslocationerror"></div>
					</div>
					
					<div class="input-box input-small left">
						<label for="reslocation">PAN NO.</label><br>
						<input type="text" class="inputField reslocation" name="pan">
						<div class="error reslocationerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="phone">IT Password</label><br>
						<input type="text" class="inputField phone" name="itpwd">
						<div class="error passworderror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="reslocation">TAN</label><br>
						<input type="text" class="inputField reslocation" name="tan">
						<div class="error reslocationerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="phone">TAN Password</label><br>
						<input type="text" class="inputField phone" name="tanpwd">
						<div class="error passworderror"></div>
					</div>
						<div class="input-box input-small left">
						<label for="reslocation">TRACES LOG IN</label><br>
						<input type="text" class="inputField reslocation" name="traces">
						<div class="error reslocationerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="phone">TRACES Password</label><br>
						<input type="text" class="inputField phone" name="tracespwd">
						<div class="error passworderror"></div>
					</div>
						<div class="input-box input-small left">
						<label for="reslocation">MCA ID-V2</label><br>
						<input type="text" class="inputField reslocation" name="idv2">
						<div class="error reslocationerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="phone">MCA Password-V2</label><br>
						<input type="text" class="inputField phone" name="idv2pwd">
						<div class="error passworderror"></div>
					</div>
				
						<div class="input-box input-small left">
						<label for="reslocation">MCA ID-V3</label><br>
						<input type="text" class="inputField reslocation" name="idv3">
						<div class="error reslocationerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="phone">MCA Password-V3</label><br>
						<input type="text" class="inputField phone" name="idv3pwd">
						<div class="error passworderror"></div>
					</div>
					
						<div class="input-box input-small left">
						<label for="reslocation">FIRMS-ENTITY USER</label><br>
						<input type="text" class="inputField reslocation" name="entity">
						<div class="error reslocationerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="phone">FIRMS-ENTITY PASSWORD</label><br>
						<input type="text" class="inputField phone" name="entitypwd">
						<div class="error passworderror"></div>
					</div>
				
						<div class="input-box input-small left">
						<label for="reslocation">FIRMS-BUSINESS USER</label><br>
						<input type="text" class="inputField reslocation" name="buisness_entity">
						<div class="error reslocationerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="phone">FIRMS-BUSINESS PASSWORD</label><br>
						<input type="text" class="inputField phone" name="business_entitypwd">
						<div class="error passworderror"></div>
					</div>
					<div class="input-box input-textarea left clearfix">
						<label for="kinresdirection">Address</label><br>
						<textarea class="inputField kinresdirection" name="address"></textarea>
						<div class="error kinresdirectionerror"></div>
					</div>
					<div class="input-box input-textarea left clearfix">
						<label for="kinresdirection">DIRECTORS DETAILS</label><br>
						<textarea class="inputField kinresdirection" name="directordetails"></textarea>
						<div class="error kinresdirectionerror"></div>
					</div>
					<div class="input-box input-textarea left clearfix">
						<label for="kinresdirection">NOTES & HINTS</label><br>
						<textarea class="inputField kinresdirection" name="notes"></textarea>
						<div class="error kinresdirectionerror"></div>
					</div>
					<div class="input-box">
						<button type="submit" class="submitField">SUBMIT</button>
					</div>
				</form>
			</div>
		</div>
	</section>
<script type="text/javascript" src="../js/global.js"></script>
</body>  
</html>


					<!--<div class="input-box input-upload-box left">
						<div class="error photoerror"></div>
						<div class="passport_file"></div>
					</div
					<div class="input-box input-small left">
						<label for="idnumber">Mobile Number</label><br>
						<input type="text" class="inputField idnumber" name="mob_no">
						<div class="error IDnumbererror"></div>
					</div>
					<div class="input-box input-upload-box left">
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
					<!--<div class="input-box input-small right">
						<label for="fullname">Alternative Mobile Number</label><br>
						<input type="text" class="inputField fullname" name="alt_mob_no">
						<div class="error fullnameerror"></div>
					</div>
					<div class="input-box input-small left">
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
					</div>-->