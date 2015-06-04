<?php
	session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("workshop");
	$strSQL = "SELECT * FROM admid WHERE username = '".mysql_real_escape_string($_POST['username'])."' 
	and password = '".mysql_real_escape_string($_POST['password'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			//echo "Username and Password Incorrect!";
			header("location:login.php");

	}
	else
	{
			$_SESSION["username"] = $objResult["username"];
			$_SESSION["password"] = $objResult["password"];

			session_write_close();
			
		//	if($objResult["Status"] == "ADMIN")
			//{
				header("location:admin.php");
		//	}
		//	else
			//{
			//	header("location:user_page.php");
			//}
	}
	mysql_close();
?>