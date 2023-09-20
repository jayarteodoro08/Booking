<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Proper_Waste!</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/sourcesanspro-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v8">
	<div class="page-content">
		<div class="form-v8-content">
			<div class="form-left">
				<img src="images/jesusa.png" alt="form">
			</div>
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-in')">Sign In</button>
					</div>
				</div>
				<?php 
				
					$notif = @$_GET['notif'];
					if(isset($notif))
					{
						if($notif=="error")
						{
							$var = "<script>alert('Waiting for Approval!')</script>";
					print $var;
				?>
				<?php  
						}
					}

 ?>
 				<?php 
				
					$notif = @$_GET['notif'];
					if(isset($notif))
					{
						if($notif=="save")
						{
							$var = "<script>alert('Waiting for Confirmation Admin!')</script>";
					print $var;
				?>
				<?php  
						}
					}

 ?>
  				<?php 
				
					$notif = @$_GET['notif'];
					if(isset($notif))
					{
						if($notif=="exist")
						{
							$var = "<script>alert('Record Already Exist!')</script>";
					print $var;
				?>
				<?php  
						}
					}

 ?>
				</form>
				<form class="form-detail" action="checklogs.php" method="post">
					<div class="tabcontent" id="sign-in">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="txtuser1" id="full_name_1" class="input-text" required>
								<span class="label">Username</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="txtpass1" id="password_1" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="txtcname1" id="comfirm_password_1" class="input-text" required>
								<span class="label">Confirm Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row-last">
							<input type="submit" name="btnlog" class="register" value="Sign In">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function openCity(evt, cityName) {
		    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }
		    document.getElementById(cityName).style.display = "block";
		    evt.currentTarget.className += " active";
		}
		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
		
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>