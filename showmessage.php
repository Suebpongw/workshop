<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("workshop");
$strSQL = "SELECT * FROM message";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$objResult = mysql_fetch_array($objQuery)

 //echo $objResult[""];
     echo $objResult["ID"];
     echo $objResult["recipients"];
    echo $objResult["message"];
     echo $objResult["sender"];
     //echo $objResult["Used"];
  

?>