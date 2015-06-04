<?php
  $objConnect = mysql_connect("localhost","root","") or die("error connect");
  $objDB = mysql_select_db("workshop");
  $strSQL = "INSERT INTO Message";
  $strSQL .="(Name,Message)";
  $strSQL .="VALUES";
  $strSQL .="('".$_POST["lmName1"]."','".$_POST["txtDescription"]."')";
  $objQuery = mysql_query($strSQL);
  if($objQuery)
  {
	  echo "Seve complete";
  }
  else{
      echo "Seve failed";
  }
mysql_close($objConnect);
?>