<!DOCTYPE html PUBLIC "-// W3C// DTD XHTML 1.0 Transitional// EN" "http:// www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:// www.w3.org/1999/xhtml" lang="en" xml:lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Scaleasy</title>
<meta name="title" content="Scaleasy"/>
<meta name="description" content=""/>
<meta name="copyright" content="Copyright 2012 scalextreme.com. All Rights Reserved"/>
<meta name="author" content="scalextreme.com"/>
<meta name="email" content="support@scalextreme.com"/>
<meta name="Distribution" content="Global"/>
<meta http-equiv="Content-Style-Type" content="text/css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="shortcut icon" href="favicon.ico"/>

<link rel="stylesheet" type="text/css" href="css/import.css"/>

<script type="text/Javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/Javascript" src="js/functions.js"></script>

</head>
<body>

<!-- Header -->
<div class="header">
	<div class="logo hide"></div>

	<div class="user">
		<div id="btn-user-register" class="unit-15x1 active"><div class="icon icon-other"></div>Register Free!</div>
		<div id="btn-user-login" class="unit-15x1 grayhover"><div class="icon icon-user"></div>Sign In</div>
	</div>

<script>
 $('#btn-user-register').click(btnRegistration);
 $('#btn-user-login').click(btnLogin);
</script>


</div>
 <div class="wrapper-overall">
	<div class="wrapper-left">


<!-- Control - Nav Launch-->
<div id="container-nav-launch" class="row-left hide container">
	<div id="tab-nav-provider" class="unit-15x1 active tab-nav hide">
		<div class="button-text">
			Provider
		</div>
	</div>
	<div id="tab-nav-os" class="unit-15x1 empty tab-nav hide">
		<div class="button-text">
			OS
		</div>
	</div>
	<div id="tab-nav-config" class="unit-15x1 empty tab-nav hide">
		<div class="button-text">
			Config
		</div>
	</div>
	<div id="tab-nav-launch" class="unit-15x1 empty tab-nav hide">
		<div class="button-text">
			Launch
		</div>
	</div>
</div>


<?php 

include('includes/splash.php'); 
include('includes/provider.php'); 
include('includes/os.php');
include('includes/config.php'); 
include('includes/launch.php'); 
include('includes/login.php'); 
include('includes/register.php'); 
include('includes/provision.php'); 
include('includes/machines.php'); 
include('includes/machine-detail.php'); 

?>



<!-- Close Left Side -->
</div>
<!-- Wrapper Right Side -->
<div class="wrapper-right">

<?php include('includes/dashboard.php'); ?>

<!-- Close right side -->
</div>
<!-- Close wrapper -->
</div>
</div>
</div>

<br><br><br><div id="apiString" class="string hide">The string shows here for debugging</div>


<br>
<br>
<br>
<br>

</body>
</html>
