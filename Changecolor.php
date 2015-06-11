<html>
<head>
<title>workshop</title>
</head>
<body>
<br><br><center><form  height="25%" name="form1" action="color.php" method="post">
 <input type="text" name="text1">
 </form></center><br><br><hr>
 <!--<div width="auto" height="auto" style="background-color:red"><center>T</center></div>
 <div style="background-color:white"><center>H</center></div>
 <div style="background-color:blue"><br><center>A</center><br></div>
  <div style="background-color:white"><center>I</center></div>
 <div style="background-color:red"><center>LAND</center></div>-->
 <style type="text/css">  
div.cDiv{  
    margin:auto;  
    width:95%;  
	height:25%;
    background-color:#EAEAEA;  
    border:1px solid #999999;  
}  
</style>  
<div class="cDiv">
  
</div>  
<div class="cDiv">

</div>
<div class="cDiv">

</div>

<? php 
   $c=$_POST["text1"]; 
   echo $c;
?>
</body>
</html>

[css]
#box{
width:200px;
height:100px;
position:fixed;
top:50%;
left:50%;
}
[/css]