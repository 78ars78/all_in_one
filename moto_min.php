<? include("blocks/bd.php");
if (isset($_GET['i'])) {$i=$_GET['i'];} else $i=2;
if (isset($_POST['jl'])) {$jl=$_POST['jl']; }  
if (isset($_GET['jl'])) {$jl=$_GET['jl'];} $jl1=$jl;
if (isset($_GET['order'])) {$order=$_GET['order'];} else $order='price';
if (isset($_GET['f'])) {$f=$_GET['f'];} else $f=1;
if (isset($_GET['d'])) {$d=$_GET['d'];} else $d=1;
if (isset($_GET['jl2'])) {$jl2=$_GET['jl2']; $jl=$jl2;}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1251"><title>�������� ��� ��������</title>
 <link href="style7.css" rel="stylesheet" type="text/css">
  <style type="text/css">  body,td,th {	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; }
 </style></head><body cellspacing="0" cellpadding="0" topmargin="0" leftmargin="0" align="left" background="img/Wooden.jpg">
	<table  topmargin="0" width="100%" leftmargin="0"   border="0" cellpadding="0" cellspacing="0" align="center">
	<tr><td>	<?	include("blocks/header.php"); ?>
		</td></tr><tr><td>
		<table  style="border-bottom: none; border-left:none; border-right:none; border-top: none;" border="0px" topmargin="0" leftmargin="0"  cellpadding="0" cellspacing="0" 
		 bgcolor="white"    bordercolor="black" width="100%" align= "center">
		</td><tr width="100%">	<td valign="top" width="205" border="10px" bgcolor="#CDCDCD"><? include("blocks/lefttd.php"); ?>
	</td><td valign="top" align="center">
		<table><tr>
		
	<font color=white style="background-color: black ">&nbsp; ���������� ��: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
	<a style="<? if ($d==1) {echo "color:#C15E5F";} else {echo "color:#2C7CE9";} ?>; text-decoration: none; " href="moto_min.php?order=price&f=1&d=1&i=2<? $cc=count($jl);
			  $aa=0; do {
     printf("&jl[]=%s",$jl[$aa]); if (isset($jl2)) { printf("&jl2[]=%s",$jl[$aa]);} $aa=$aa+1;} while($aa<$cc);?>">
	����(����) </a>	&nbsp;&nbsp;&nbsp;	
			
			
		
	<a style="<? if ($d==2) {echo "color:#C15E5F";} else {echo "color:#2C7CE9";} ?>; text-decoration: none" href="moto_min.php?order=price&f=2&d=2&i=2<? $cc=count($jl);
			  $aa=0; do {
     printf("&jl[]=%s",$jl[$aa]); if (isset($jl2)) { printf("&jl2[]=%s",$jl[$aa]);} $aa=$aa+1;} while($aa<$cc);?>"> ����(����) </a>	&nbsp;&nbsp;&nbsp;
			
			
			
     <a style="<? if ($d==3) {echo "color:#C15E5F";} else {echo "color:#2C7CE9";} ?>; text-decoration: none" href="moto_min.php?order=name&f=1&d=3&i=2<? $cc=count($jl);
			  $aa=0; do {
      printf("&jl[]=%s",$jl[$aa]); if (isset($jl2)) { printf("&jl2[]=%s",$jl[$aa]);} $aa=$aa+1;} while($aa<$cc);
	?>"> ��� </a>&nbsp;
	
		</font>
			
<td valign="top">
			<?	$num =3;
// ��������� �� URL ������� ��������
@$page = $_GET['page'];
// ���������� ����� ����� ��������� � ���� ������
	$c2= count($jl);	$a2=0; $bb2="";
			 
			if ($c2>1) {do {$bb2=$bb2." OR jl=$jl[$a2]"; $a2=$a2+1;} while($a2<$c2);}
	
$result00 = mysql_query("SELECT COUNT(*) FROM moto WHERE jl=$jl[0]  $bb2",$db);
$temp = mysql_fetch_array($result00);
$posts = $temp[0];
// ������� ����� ����� �������
$total = (($posts - 1) / $num) + 1;
$total =  intval($total);
// ���������� ������ ��������� ��� ������� ��������
$page = intval($page);
// ���� �������� $page ������ ������� ��� ������������
// ��������� �� ������ ��������
// � ���� ������� �������, �� ��������� �� ���������
if(empty($page) or $page < 0) $page = 1;
  if($page > $total) $page = $total;
// ��������� ������� � ������ ������
// ������� �������� ���������
$start = $page * $num - $num;
// �������� $num ��������� ������� � ������ $start
	?>
			
			
	
			
			
		
			
			<? 
	
			$c= count($jl);
			$a=0; $bb="";
			 
			if ($c>1) {do {$bb=$bb." OR jl=$jl[$a]"; $a=$a+1;} while($a<$c);}	
			
			  
				
			
	
		
	
			if ($f==1) { 
		$result4=mysql_query("SELECT * FROM moto WHERE jl=$jl[0] $bb  ORDER BY $order LIMIT $start, $num ",$db);}
		else { 
		$result4=mysql_query("SELECT * FROM moto WHERE jl=$jl[0] $bb  ORDER BY $order DESC LIMIT $start, $num",$db);}	
		
			
			
			if (!$result4) { include("blocks/end.php"); exit();}
	if (mysql_num_rows($result4)>0)
	{  $myrow4=mysql_fetch_array($result4);
	  do {	
	
		 printf("<table align='left' class='lesson'>
     <tr align='center'>
    <td><p  class='lesson_name'>
	<a href='motopost.php?id=%s'>link</a>
	</p><p class='lesson_adds'>%s</p></td>
     </tr>  <tr align='center'><td style='color: yellow;'>%s</td></tr>
  </table>", $myrow4['id'], $myrow4['price'], $myrow4['name']);  	
		  
		 
   } while($myrow4=mysql_fetch_array($result4));
			
			
					
	/* 
	
	&jl='.$jl.'&jl2='.$jl2.'&jl1='.$jl1.
	
	
	&jl='.$jl.'
	
	&order='.$order.'&f='.$f.'&d='.$d.'
	
	<? $cc=count($jl);
			  $aa=0; do {
    printf("&jl[]=%s",$jl[$aa]);  if (isset($jl2)) { printf("&jl2[]=%s",$jl[$aa]);} $aa=$aa+1;} while($aa<$cc);?>
	
	*/
	 
	/*  $cc=count($jl);
			$aaa=0;  $aa=0; do {
      printf('$aaa=%s',$jl[$aa]); $aa=$aa+1;} while($aa<$cc);*/
	 
	
	 
	 
	/* $cc=count($jl);
			  $aa=0; do {
     printf("&jl[]=%s",$jl[$aa]); if (isset($jl2)) { printf("&jl2[]=%s",$jl[$aa]);} $aa=$aa+1;} while($aa<$cc);*/
	 
	 
	 
	 if (isset($jl)) {
		 $c1= count($jl);
			$a1=0;	$bb1="";
		 if ($c1>0) {do {$bb1=$bb1."&jl[]=$jl[$a1]"; $a1=$a1+1;} while($a1<$c1);}
		 
	 }
	 if (isset($jl2)) {
		 
		 
		$c10= count($jl2);
			$a10=0;	$bb1="";
		 if ($c10>0) {do {$bb1=$bb1."&jl2[]=$jl[$a10]"; $a10=$a10+1;} while($a10<$c10);} 
		 
	 }
			
	 
	 
	 
	 
		

 echo "</table><font align=right>"; 	 
	 // ��������� ����� �� ������� �����
if ($page != 1) $pervpage = '<a href=moto_min.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.$bb1.'&page=1>������</a> | <a href=moto_min.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.$bb1.'&page='. ($page - 1) .'>����������</a> | ';
// ��������� ����� �� ������� ������
if ($page != $total) $nextpage = ' | <a href=moto_min.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.$bb1.'&page='. ($page + 1) .'>���������</a> |



<a href=moto_min.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.$bb1.'&page='.$total. '>���������</a>';
	 
	 
	 
// ������� ��� ��������� ������� � ����� �����, ���� ��� ����
if($page - 5 > 0) $page5left = ' <a href=moto_min.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.$bb1.'&page='. ($page - 5) .'>'. ($page - 5) .'</a> | ';
if($page - 4 > 0) $page4left = ' <a href=moto_min.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.$bb1.'&page='. ($page - 4) .'>'. ($page - 4) .'</a> | ';
if($page - 3 > 0) $page3left = ' <a href=moto_min.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.$bb1.'&page='. ($page - 3) .'>'. ($page - 3) .'</a> | ';
if($page - 2 > 0) $page2left = ' <a href=moto_min.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.$bb1.'&page='. ($page - 2) .'>'. ($page - 2) .'</a> | ';  
if($page - 1 > 0) $page1left = '<a href=moto_min.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.$bb1.'&page='. ($page - 1) .'>'. ($page - 1) .'</a> | ';

if($page + 5 <= $total) $page5right = ' | <a href=moto_min.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.$bb1.'&page='. ($page + 5) .'>'. ($page + 5) .'</a>';
if($page + 4 <= $total) $page4right = ' | <a href=moto_min.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.$bb1.'&page='. ($page + 4) .'>'. ($page + 4) .'</a>';
if($page + 3 <= $total) $page3right = ' | <a href=moto_min.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.$bb1.'&page='. ($page + 3) .'>'. ($page + 3) .'</a>';
if($page + 2 <= $total) $page2right = ' | <a href=moto_min.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.$bb1.'&page='. ($page + 2) .'>'. ($page + 2) .'</a>';
if($page + 1 <= $total) $page1right = ' | <a href=moto_min.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.$bb1.'&page='. ($page + 1) .'>'. ($page + 1) .'</a>';
// ����� ���� ���� ������� ������ �����
if ($total >1) { Error_Reporting(E_ALL & ~E_NOTICE);
echo "<div class=\"pstrnav\">";
echo $pervpage.$page5left.$page4left.$page3left.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$page3right.$page4right.$page5right.$nextpage;
echo "</div>"; echo "</font>"; }} else {echo "��� ������"; exit(); }
						 ?>
	 
	</td></tr> </table></table>

	
 </table><? include("blocks/footer.php"); ?></body></html>