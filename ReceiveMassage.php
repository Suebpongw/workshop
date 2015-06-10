<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>
<?php

$rname = $_POST["rname"];
$message = $_POST["message"];
$sender = $_POST["sender"];
//$status=$_POST["status"];

//echo $rname;

	$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
	$objDB = mysql_select_db("workshop");
	mysql_query("SET NAMES UTF8");
	$strSQL = "INSERT INTO message ";
	$strSQL .="(recipients,message,sender)";
	$strSQL .=" VALUES ";
	$strSQL .="('$rname','$message','$sender') ";
	$objQuery = mysql_query($strSQL);
	if($objQuery)
	{	
		echo $message;
	}
	else
	{
		echo "Error  [".$strSQL."]";
	}
	mysql_close();
?>
</body>
</html>