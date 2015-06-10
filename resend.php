<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>
 <?php
$count=0;
 while($count<20){	 
  $objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
  $objDB = mysql_select_db("workshop");
  mysql_query("SET NAMES UTF8");
  $str="SELECT * FROM message WHERE status='F'";
  $objstr = mysql_query($str);


  while($objresult=mysql_fetch_array($objstr)){

      $rname=$objresult["recipients"];
	 // $
      $strSQL = "SELECT IPaddress FROM user WHERE username = '$rname' ";
	  $objQuery = mysql_query($strSQL)  or die(mysql_error());
  	  $objResult = mysql_fetch_array($objQuery);
	  $ip=$objResult["IPaddress"];
	  $sock = socket_create(AF_INET, SOCK_STREAM, 0);
        if(socket_connect($sock , $ip , 80)){
	
			$status="T";
			$curlResource=curl_init();
            curl_setopt($curlResource, CURLOPT_POST,1);
            curl_setopt($curlResource, CURLOPT_URL,"http://".$ip."/Work/ReceiveMassage.php");
            curl_setopt($curlResource, CURLOPT_POSTFIELDS, "&rname=".$objresult["recipients"]."&message=".$objresult["message"]."&sender=".$objresult["sender"]."&status=".$status.""); 
            curl_exec($curlResource);
            curl_close($curlResource);
			$strSQL="UPDATE message SET ";
			$strSQL.="status= 'T'";
			$strSQL.="WHERE ID= '".$objresult["ID"]."'";
			$objq=mysql_query($strSQL);
            //$strSQL
			/*$strSQL = "DELETE FROM message ";
            $strSQL .="WHERE ID = '".$objresult["ID"]."' ";
			$objQuery = mysql_query($strSQL);
			$strSQL = "INSERT INTO message ";
	        $strSQL .="(recipients,message,sender,status)";
	        $strSQL .=" VALUES ";
	        $strSQL .="('".$objresult["recipients"]."','".$objresult["message"]."','".$objresult["sender"]."','$status') ";
	        $objQuery = mysql_query($strSQL);*/
		}
		else{
			//$status="F";
			break;
			//echo "failed";
		}
		//echo $count;
	    
		
	  
	 // echo $objresult["message"];
	  //echo $objresult["sender"];
	  ?>
	  <br>
	  
<?php
	
  }
  
 mysql_close($objConnect);
 ?>

<?php
 $count++;
  echo $count;
 sleep(5);
 }
 ?>
</body>
</html>
	 