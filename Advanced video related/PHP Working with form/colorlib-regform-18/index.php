<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<div class="wrapper" style="background-image: url('images/SL-012421-40020-56.jpg'); background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;">
		<div class="inner">
			<form action="POST">
				<h3>Registration Form</h3>
				<div class="form-group">
					<p>
					<?php
						$checked=""; 
						if(isset($_REQUEST['checkbox1']) && ($_REQUEST['checkbox1']==1)){
                          $checked="checked";
						}
						?>
						<?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])){ ?>
						First name:<?php echo $_REQUEST['fname']; ?></br>
						<?php } ?>
						<?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])){ ?>
						Last name:<?php echo $_REQUEST['lname'];?></br>
						<?php } ?>
					</p>
				</div>
				<div class="form-group">
					<div class="form-wrapper">
						<label for="fname">First Name</label>
						<input type="text" class="form-control" name="fname" value="<?php echo $_REQUEST['fname'];   ?> " >
					</div>
					<div class="form-wrapper">
						<label for="lname">Last Name</label>
						<input type="text" class="form-control" name="lname" value="<?php echo $_REQUEST['lname'];   ?> " >
					</div>
				</div>
				<div class="form-wrapper">
					<label for="">Email</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-wrapper">
					<label for="">Password</label>
					<input type="password" class="form-control">
				</div>
				<div class="form-wrapper">
					<label for="">Confirm Password</label>
					<input type="password" class="form-control">
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name="checkbox1" value="1" <?php echo $checked ?>> I accept the Terms of Use & Privacy Policy.
						<span class="checkmark"></span>
					</label>
				</div>
				<button>Register Now</button>
			</form>
		</div>
	</div>

</body>

</html>