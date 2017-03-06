


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<meta http-equiv="refresh" content="2;URL=../../0.html"../../0.html";url="0.html">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta name="gmapkey" content="" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<title></title>

	<link rel="stylesheet" href="jqtransformplugin/jqtransform.css" type="text/css" media="all" />
	<link rel="stylesheet" href="demo.css" type="text/css" media="all" />
	
	<script type="text/javascript" src="requiered/jquery.js" ></script>
	<script type="text/javascript" src="jqtransformplugin/jquery.jqtransform.js" ></script>
	<script language="javascript">
		$(function(){
			$('form').jqTransform({imgPath:'jqtransformplugin/img/'});
		});
	</script>
	
</head>

<body>

<p>報名成功，本頁面五秒後自動回到首頁．．．
 
</p>
<?php 
//連結mysql主機，一個檔案做一次
$link = mysql_connect("127.7.19.2", "adminrGdmWqR", "I6rfy1q-sJXl");
//開啟要使用的資料庫，一個檔案做一次
$db=mysql_select_db("deptsport", $link);
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET CHARACTER SET UTF8"); 
mysql_query("SET CHARACTER_SET_RESULTS=UTF8'");

$team=$_POST["team"];
$sql="SELECT min(id) FROM Billiards where team='$team=';";
$res = mysql_query($sql, $link);
$id = mysql_fetch_row($res);


 ?>
<table  border="0">
  <tr>
    <td colspan="6" align="center" nowrap="nowrap"><?php echo "你的隊伍編號為：".$team; ?></td>
  </tr>
  <?php for($i=0 ; $i<=1; $i++){

  $grade=$_POST["select"][$i];
  $name=$_POST["name"][$i];
  $num=$_POST["num"][$i];
  $sql="update Billiards set name='$name', number='$num', grade='$grade' where team = '$team' and id ='$id[0]'";
    $id[0]++;
  //echo $sql;
  mysql_query($sql, $link);
  
?>    
  

  <tr>
    <td width="65" align="center" nowrap="nowrap">年級：</td>
    <td width="57" ><?=$grade?></td>
    <td width="65" align="center" nowrap="nowrap"> 姓名：</td>
    <td width="85" nowrap="nowrap"><?=$name?></td>
    <td width="65" align="center" nowrap="nowrap">學號：</td>
    <td width="85" nowrap="nowrap"><?=$num?></td>
  </tr>
  <?php } ?>
</table>


<p>&nbsp;</p>
</body>
</html>