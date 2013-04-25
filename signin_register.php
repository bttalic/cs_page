<?php
include("includes/headerfooter.php");
include("includes/includes.php");
include("includes/forms.lib.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php headIncludes() ?>
	<title>CS @ IUS | Sign in/Sign up</title>
</head>

<body>
	<?php headerCode() ?>
	<div class="container">
		<ul class="nav nav-tabs" id="register_signin">
			<li class="active"><a href="#student">Student</a></li>
			<li><a href="#professor">Professor</a></li>
		</ul>
		
		<div class="tab-content">
			<div class="tab-pane active" id="student">
				<!--Login from-->
				<div class="span2">

					<?php echo getForm("student","signin","upload.php"); ?>
				</div>

				<!--Register from-->
				<div class="span pull-right">

					<?php echo getForm("student","signup","upload.php"); ?>
					
				</div>

			</div>
			<div class="tab-pane" id="professor">
				<div class="span2">

					<?php echo getForm("professor","signin","upload.php"); ?>
				</div>

				<!--Register from-->
				<div class="span pull-right">

					<?php echo getForm("professor","signup","upload.php"); ?>
					
				</div>
			</div>
		</div>

		<hr>

		<?php footerCode() ?>
	</div> <!-- /container -->

	<?php scriptIncludes() ?>
</body>
<script src="js/jquery.form.js"></script>
<script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>
<script src="js/register_validation.js"></script>
</html>