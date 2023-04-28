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
				<div class="section_title">Add CLIENT</div>
				<form id="addemployee" class="clearfix" method="" action="">
					<div class="input-box input-small left">
						<label for="firstname">Name</label><br>
						<input type="text" class="inputField firstname" name="Name">
						<div class="error firstnameerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="reslocation">Pan Card name</label><br>
						<input type="text" class="inputField reslocation" name="pan_name">
						<div class="error reslocationerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="phone">Password</label><br>
						<input type="text" class="inputField phone" name="password">
						<div class="error passworderror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="resaddress">Date of Birth</label><br>
						<input type="date" class="inputField firstname" name="d_o_b">
						<div class="error resaddresserror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="lastname">PAN number</label><br>
						<input type="text" class="inputField firstname" name="pan_no">
						<div class="error lastnameerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="reslocation">Aadhar Number</label><br>
						<input type="text" class="inputField reslocation" name="aadhar_no">
						<div class="error reslocationerror"></div>
					</div>
					<!--<div class="input-box input-upload-box left">
						<div class="error photoerror"></div>
						<div class="passport_file"></div>
					</div>-->
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
					<div class="input-box input-small right">
						<label for="fullname">Alternative Mobile Number</label><br>
						<input type="text" class="inputField fullname" name="alt_mob_no">
						<div class="error fullnameerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="relationship">Email</label><br>
						<input type="email" class="inputField relationship" name="email">
						<div class="error relationshiperror"></div>
					</div>
					<!--<div class="input-box input-small left">
						<label for="kinphone">Alternative Email</label><br>
						<input type="text" class="inputField kinphone" name="alt_email">
						<div class="error kinphoneerror"></div>
					</div>-->
					<div class="input-box input-small right">
						<label for="kinresaddress">Father name</label><br>
						<input type="text" class="inputField kinresaddress" name="father_name">
						<div class="error kinresaddresserror"></div>
					</div>
					<div class="input-box input-textarea left clearfix">
						<label for="kinresdirection">Address</label><br>
						<textarea class="inputField kinresdirection" name="address"></textarea>
						<div class="error kinresdirectionerror"></div>
					</div>
					<div class="input-box input-textarea left clearfix">
						<label for="kinresdirection">Remarks</label><br>
						<textarea class="inputField kinresdirection" name="remarks"></textarea>
						<div class="error kinresdirectionerror"></div>
					</div>
					<div class="input-box">
						<button type="submit" class="submitField">Add Data</button>
					</div>
				</form>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		 $("#addemployee").submit(function(e){
    	e.preventDefault();
    	var empiderror,
    		firstnameerror,
    		middlenameerror,
    		lastnameerror,
    		phoneerror,
    		jobtypeerror,
    		dateemployederror,
    		resaddresserror,
    		reslocationerror,
    		gpsreslocationerror,
    		resdirectionerror,
    		photoerror,
    		IDnumbererror,
    		idtypeerror,
    		nationalIDerror,
    		fullnameerror,
    		relationshiperror,
    		kinphoneerror,
    		kinresaddresserror,
    		empstatuserror,
    		kinresdirectionerror;

    	if($(".firstname").val() == ""){
    		firstnameerror = "Please enter employee's first name";
    	} else if($.isNumeric($(".firstname").val()) && $(".firstname").val() != ""){
    		firstnameerror = "this field cannot contain numbers";
    	} else {
    		firstnameerror = "";
    	}

    	if($.isNumeric($(".middlename").val()) && $(".middlename").val() != ""){
    		middlenameerror = "this field cannot contain numbers";
    	} else {
    		middlenameerror = "";
    	}

    	if($(".lastname").val() == ""){
    		lastnameerror = "Please enter employee's last name";
    	} else if($.isNumeric($(".lastname").val()) && $(".lastname").val() != ""){
    		lastnameerror = "this field cannot contain numbers";
    	} else {
    		lastnameerror = "";
    	}

    	if($(".phone").val() == ""){
    		phoneerror = "Please enter phone number";
    	} else if(!($.isNumeric($(".phone").val())) && $(".phone").val() != ""){
    		phoneerror = "this field cannot contain letters";
    	} else {
    		phoneerror = "";
    	}

    	if($(".jobtype").val() == ""){
    		jobtypeerror = "Please enter Job type";
    	} else {
    		jobtypeerror = "";
    	}

    	if($(".dateemployed").val() == ""){
    		dateemployederror = "Please enter employment date";
    	} else {
    		dateemployederror = "";
    	}

    	if($(".empstatus").val() == ""){
    		empstatuserror = "Please select status of employee";
    	} else {
    		empstatuserror = "";
    	}

    	if($(".resaddress").val() == ""){
    		resaddresserror = "Please enter residential address";
    	} else {
    		resaddresserror = "";
    	}

    	if($(".reslocation").val() == ""){
    		reslocationerror = "Please enter location of residence";
    	} else {
    		reslocationerror = "";
    	}

    	if($(".gpsreslocation").val() == ""){
    		gpsreslocationerror = "Please enter residence gps location";
    	} else {
    		gpsreslocationerror = "";
    	}

    	if($(".resdirection").val() == ""){
    		resdirectionerror = "Please enter direction to employee's residence";
    	} else {
    		resdirectionerror = "";
    	}

    	if($(".passport_file").html() == ""){
    		photoerror = "select a file and click upload";
    	} else {
    		photoerror = "";
    	}

    	if($(".idnumber").val() == ""){
    		IDnumbererror = "Please enter national ID number";
    	} else {
    		IDnumbererror = "";
    	}

    	if($(".idtype").val() == ""){
    		idtypeerror = "Select ID type associated with ID number";
    	} else {
    		idtypeerror = "";
    	}

    	if($(".selected_nationalID_file").html() == ""){
    		nationalIDerror = "select a file and click upload";
    	} else {
    		nationalIDerror = "";
    	}

    	if($(".fullname").val() == ""){
    		fullnameerror = "Please enter full name of next of kin";
    	} else {
    		fullnameerror = "";
    	}

    	if($(".relationship").val() == ""){
    		relationshiperror = "Please enter relationship to next of kin";
    	} else {
    		relationshiperror = "";
    	}

    	if($(".kinphone").val() == ""){
    		kinphoneerror = "Please enter phone number of next of kin";
    	} else if(!($.isNumeric($(".kinphone").val())) && $(".kinphone").val() != ""){
    		kinphoneerror = "this field cannot contain letters";
    	} else {
    		kinphoneerror = "";
    	}

    	if($(".kinresaddress").val() == ""){
    		kinresaddresserror = "Please enter Residential Address of next of kin";
    	} else {
    		kinresaddresserror = "";
    	}

    	if($(".kinresdirection").val() == ""){
    		kinresdirectionerror = "Please enter phone number of next of kin";
    	} else {
    		kinresdirectionerror = "";
    	}

/*    	$(".firstnameerror").html(firstnameerror);
    	$(".middlenameerror").html(middlenameerror);
    	$(".lastnameerror").html(lastnameerror);
    	$(".phoneerror").html(phoneerror);
    	$(".jobtypeerror").html(jobtypeerror);
    	$(".dateemployederror").html(dateemployederror);
    	$(".empstatuserror").html(empstatuserror);
    	$(".resaddresserror").html(resaddresserror);
    	$(".reslocationerror").html(reslocationerror);
    	$(".gpsreslocationerror").html(gpsreslocationerror);
    	$(".resdirectionerror").html(resdirectionerror);
    	$(".photoerror").html(photoerror);
    	$(".IDnumbererror").html(IDnumbererror);
    	$(".fullnameerror").html(fullnameerror);
    	$(".idtypeerror").html(idtypeerror);
    	$(".nationalIDerror").html(nationalIDerror);
    	$(".relationshiperror").html(relationshiperror);
    	$(".kinphoneerror").html(kinphoneerror);
    	$(".kinresaddresserror").html(kinresaddresserror);
    	$(".kinresdirectionerror").html(kinresdirectionerror);
*/

    	//if(firstnameerror == "" && middlenameerror == "" && lastnameerror == "" && phoneerror == "" && jobtypeerror == "" && dateemployederror == "" && resaddresserror == "" && reslocationerror == "" && gpsreslocationerror == "" && resdirectionerror == "" && photoerror == "" && IDnumbererror == "" && fullnameerror == "" && idtypeerror == "" && nationalIDerror == "" && relationshiperror == "" && kinphoneerror == "" && kinresaddresserror == "" && kinresdirectionerror == "" && empstatuserror == "") {
			alert("hello");
    		$(".displaySuccess").css({
    			"margin-top":"0px",
    			"opacity":"1"
    		})
			$(".displaySuccess").html('<span class="spinicon"><i class="fa fa-spinner fa-spin fa-1x fa-fw"></i></span> Adding new employee record');

    		$.ajax({
		     	url: 'addemployee.php',
		     	type: 'POST',
		    	dataType: 'JSON',
		        data: $("#addemployee").serialize(),
		    	success: function(data){
					var status = (data.status);

					if(status == "Success"){
						$(".displaySuccess").html('<span class="spinicon"><i class="fa fa-check fa-1x"></i></span> Record added successfully')
						setTimeout(function(){
							$(".displaySuccess").css({
				    			"margin-top":"",
				    			"opacity":""
				    		})
						$(".displaySuccess").html('');
                        location.href = "../dashboard/";
						}, 2500)
					} else if(status == "failed"){
						$(".displaySuccess").css("background","#ff0000");
						$(".displaySuccess").html('<span class="spinicon"><i class="fa fa-exclamation-circle fa-1x"></i></span> Error adding new record')
						setTimeout(function(){
							$(".displaySuccess").css({
				    			"margin-top":"",
				    			"opacity":"",
				    			"background":""
				    		})
						$(".displaySuccess").html('');

						}, 5000)
					} else if(status == "exists"){
						$(".displaySuccess").css("background","#ff0000");
						$(".displaySuccess").html('<span class="spinicon"><i class="fa fa-exclamation-circle fa-1x"></i></span> Employee ID already exists')
						setTimeout(function(){
							$(".displaySuccess").css({
				    			"margin-top":"",
				    			"opacity":"",
				    			"background":""
				    		})
						$(".displaySuccess").html('');

						}, 5000)
					}
		    	},
			
    		})
    	//}

    })
		</script>
<!--<script type="text/javascript" src="../js/global.js"></script>-->
</body>
</html>