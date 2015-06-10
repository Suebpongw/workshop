<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>
<?php
	//session_start();
	//$name = $_SESSION["strUser"];
	//$username='Jame';
	$rname = $_POST["lmName1"];
	$message = $_POST["txtDescription"];
	//define("sender", "Jame");
	$sender =$_POST["form"];
	$objConnect = mysql_connect("localhost","root","") or die("error connect");
    $objDB = mysql_select_db("workshop");
	mysql_query("SET NAMES UTF8");
	$strSQL = "SELECT IPaddress FROM user WHERE username = '$rname' ";
	$objQuery = mysql_query($strSQL)  or die(mysql_error());
  	$objResult = mysql_fetch_array($objQuery);
	$ip=$objResult["IPaddress"];
	//$str="SELECT IP
	
	$sock = socket_create(AF_INET, SOCK_STREAM, 0);
    if(socket_connect($sock , $ip , 80)){
			//echo "complete";

			$status="T";

    }
	else{
			$status="F";
			//header("location:login.php");
			
			//echo "failed";
	}
	 //echo $status;
	
	//$obj="SELECT * FORM 
	$strSQL = "INSERT INTO message";
	$strSQL .="(recipients,message,sender,status)";
	$strSQL .=" VALUES ";
	$strSQL .="('$rname','$message','$sender','$status') ";
	$objQuery = mysql_query($strSQL);
	
	//header("location:resend.php");
	
	if($objQuery)
	{
		//echo "complete";
        // C:\xampp\php\php.exe -f"C:\xampp\htdocs\Work\resend.php"
		
		//if($connect){
		//	echo connect complete;}
		//else{
		//	echo connect failed;
		//}
		//$curlResource=curl_init();
        //curl_setopt($curlResource, CURLOPT_URL, "http://".$ip."/Work/ReceiveMassage.php?rname=".$rname."&message=".$message."&sender=".$sender."");
        //curl_exec($curlResource);
        //curl_close($curlResource);
        $curlResource=curl_init();
        curl_setopt($curlResource, CURLOPT_POST,1);
        curl_setopt($curlResource, CURLOPT_URL,"http://".$ip."/Work/ReceiveMassage.php");
        curl_setopt($curlResource, CURLOPT_POSTFIELDS, "&rname=".$rname."&message=".$message."&sender=".$sender."&status=".$status.""); 
        curl_exec($curlResource);
        curl_close($curlResource); 
        //$strSQL = "INSERT INTO message ";
	    //$strSQL .="(recipients,message,sender,status)";
	    //$strSQL .=" VALUES ";
	    //$strSQL .="('".$objresult["recipients"]."','".$objresult["message"]."','".$objresult["sender"]."','$status') ";
	    //$objQuery = mysql_query($strSQL);

		//header("Location:http://".$ip."/Work/ReceiveMassage.php?rname=".$rname."&message=".$message."&sender=".$sender."");
        
		header("location:admin.php");

	}
	else
	{
		echo "Error  [".$strSQL."]";
	}
	mysql_close();
?>
</body>
</html>