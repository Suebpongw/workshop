<html>
<head>
<title></title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>

   <form  name="form1" action="login.php" method="post">
	  <input type="submit" value="Logout" name"submit">
   </form>
  
  <br><center>Welcome admin!!</center><br>
  
  
  <table width="100%" height="100%" bgcolor="green" border="1">
    <tr>
	  
      <td><center>Message form friend</center></td>
      <td><center>Send message to friend</center></td>
   
    </tr>
	<tr>
	   <td>
	   <center><form action="" method="post" name="form1">
	     <textarea name="txtDescription" cols="50" rows="20">
		  <?php 
		  $objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
          $objDB = mysql_select_db("workshop");
		  mysql_query("SET NAMES UTF8");
		  $strSQL = "SELECT * FROM message ORDER BY ID DESC ";
          $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
		 // $objjame = 
		 // $max = mysql_query("select max(ID)form message");
		 // echo $max;
		  //echo $total_max = mysql_result($max,0);
		  //$objResult=mysql_fetch_arry($objQuery);
		  //$objID=objResult[0];
		  //echo max(objID);
		 // $sql = "SHOW TABLE STATUS LIKE 'message'";//show number of id
         // $result = @mysql_query($sql);
         // $row = @mysql_fetch_assoc($result);
         // $next_id = (int)$row['Auto_increment'];
		 // $id=$next_id-1;
		 // echo $id; //show number of id
		 $Jame="Jame";
		 //echo $Jame;

		 while($objResult = mysql_fetch_array($objQuery))
		  {
			  if($objResult["sender"]!=$Jame&&$objResult["sender"]!='jame'){
		   ?>
		   
<?php echo $objResult["sender"];?>  send : "<?php echo $objResult["message"];?>"
	        
            <?php
			  }
			elseif($objResult["sender"]==$Jame&&$objResult["recipients"]=='Jame'&&$objResult["status"]=='T'){
			    
			?>

<?php //echo $objResult["sender"];?>You  post : "<?php echo $objResult["message"];?>"
                
        	<?php
			}
		    elseif($objResult["recipients"]!='Jame'&&$objResult["status"]=='F'){ ?>

Send: "<?php echo $objResult["message"];?>" TO <?php echo $objResult["recipients"];?> Failed!! 

               <?php }
		   
		    else{ ?>

You send: "<?php echo $objResult["message"];?>" TO <?php echo $objResult["recipients"];?>

               <?php }
		   }
          
          
		  mysql_close($objConnect); 
		 
		  ?>
		 </textarea>
		 
          </form></center>
	   </td>
	   <td>

	   <center><form action="ProcessSend.php" method="post" name="form1">
	      Who ?? <br>
	  Recipients<!--<input type="text" name="lmName1" >-->
	        <select name="lmName1">
	          <option value="Toomtam">Toomtam</option>
              <option value="Champ">Champ</option>
              <option value="Mint">Mint</option>
			  <option value="Jame">Jame</option>
            </select>
		  Sender<!--<input type="text" name="form" >-->
            <select name="form" >
	          <!--<option value="Toomtam">Toomtam</option>
              <option value="Champ">Champ</option>
              <option value="Mint">Mint</option>-->
			  <option value="Jame">Jame</option>
            </select>
          <hr>
          <textarea name="txtDescription" cols="50" rows="20"></textarea>
          <input name="btnSubmit" type="submit" value="Send">
          </form></center>
	   </td>
	   
    </tr>
       
  </table>
  
</body>
</html>
