<?php
function check_login()
{
if(strlen($_SESSION['u_id'])==0)
	{
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="index.php";
		$_SESSION["u_id"]="";
		header("Location: http://$host$uri/$extra");
	}
}
?>
