<? include("blocks/bd.php");
if (isset($_GET['k'])) {$k=$_GET['k'];}

if (isset($_GET['i'])) {$i=$_GET['i'];} else $i='';
if (isset($_GET['j'])) {$j=$_GET['j'];}
if (isset($_GET['l'])) {$l=$_GET['l'];}
?> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en"><head>
	<title>Выпадающее меню</title>

	<link rel="stylesheet" href="style7.css">
  <style>
  body,td,th {	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; }  
  </style>



	

	
<SCRIPT LANGUAGE="JavaScript">


function doPic(imgName) {

imgOn = ("" + imgName);
document.mainpic.src = imgOn;
   
}
	
</script>

</head>





	
  


<body cellspacing="0" cellpadding="0" topmargin="0" leftmargin="0" align="left" background="img/Wooden.jpg">
	<table topmargin="0" width="100%" leftmargin="0"   border="0" cellpadding="0" cellspacing="0" align="center" >
	<tr><td>	
		<?	include("blocks/header.php"); ?>
		
		
		
		
		
		<div  style="position:absolute; left:225px; top: 264px; z-index: 2;"><img name="mainpic" src="2.jpg" width=370 height=280 border=0></div>
		
		
		</td></tr><tr><td  >
				
		
	




    
		<table style="border-bottom: none; border-left:none; border-right:none; border-top: none;" border="0px" topmargin="0" leftmargin="0"  cellpadding="0" cellspacing="0" 
	 bgcolor="white"  bordercolor="black" width="100%" align= "center">
		</td></tr><tr width="100%" >
		<td valign="top" width="205" bgcolor=" #cdcdcd"><? include("blocks/lefttd.php"); ?>
	</td><td  valign="top">
		<table style="margin-top: 43px; margin-left: 20px" width=360 border=1 cellspacing=0 cellpadding=0>
<tr>
<td><a onMouseOver ="javascript:doPic('2.jpg');" href="#"><img src="2.jpg" width=90  border=0></a></td>
<td><a href="javascript:doPic('3.jpg');"><img src="3.jpg" width=90 border=0></a></td>
<td><a href="javascript:doPic('1.jpg');"><img src="1.jpg" width=90 border=0></a></td>
<td><a href="javascript:doPic('4.jpg');"><img src="4.jpg" width=90 border=0></a></td>
</tr>
</table>
		
<? if ($i==1) {echo "<div style='position:absolute; left:225px; top: 264px; z-index: 2;'>автообои</div>";}
		if ($i==2) {echo "мотообои";} if ($i==3) {echo "музыка";} 
		?> 
	</td></tr></table></table>
	 <center>
		 
		 
		 
		 
		 <? include("blocks/footer.php"); ?></center><br><br><br><br><br><br><br><br>
</body>
</html>
