<?php 
	$client_id = "81mxhepdymr9qq";
	$redirect_uri = "https%3A//amazingteam.site/linkedinreply.php";
	$state = "amazingteam";
	
	header("Location: https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id=".$client_id."&redirect_uri=".$redirect_uri."&state=".$state."&scope=r_liteprofile%20r_emailaddress%20w_member_social");
 ?>