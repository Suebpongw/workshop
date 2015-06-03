<?php
     session_start();
     mysql_connect("localhost","","");
     mysql_select_db("Workshop");
     $strSQL = "SELECT * FORM admin WHERE  username = ' ".mysql_real_escape_string($_POST['username'])." ' and password = ' " .mysql_real_escape_string($_POST['password'])." ' ";
$objQuery = mysql_query($strSQL) or die(mysql_error());
$objResult = mysql_fetch_array($objQuery);
if($objResult){
    header("login.php");
}
else
{
    header("login1.php");
}
mysql_close();
?>

    
 
