<?php
	session_start();
	unset($_SESSION["sess_user"]);
	header("Location:account.php");
?>