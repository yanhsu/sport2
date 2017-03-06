<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META HTTP-EQUIV="expires" CONTENT="0">
<META HTTP-EQUIV="pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache"><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Direction by FCT</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Arvo:400,700" rel="stylesheet" type="text/css" />

<style type="text/css">
.button-style {
	display: inB_two-block;
	margin-top: 20px;
	padding: 7px 20px;
	background: #333;
	border-radius: 5px;
	text-decoration: none;
	text-transform: uppercase;
	color: #FFFFFF;
}
.a1 {
	font-size: 16px;
		font-family: "微軟正黑體";
}
.red {	color: #F00;
}
</style>
</head>
<body>
<table border="0">
  <tr>
    <td colspan="2" align="center">羽球雙人賽</td>
  </tr>
  <tr>
    <td width="120">&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>一、比賽時間：</strong></td>
    <td>3/9(四)17:00~21:00</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>二、比賽地點：</strong></td>
    <td>進德校區 體育館羽球館 </td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>三、報名條件： </strong></td>
    <td><ol>
      <li>不分系級、每隊2人，<br />
			<span class="red">分別為男雙及女雙，無混雙。</span> <br />
        </li>
      <li>一人僅能參與一支隊伍，不可一人報名兩隊。 <br />
        </li>
      <li>未於期限內報名之隊伍不得參賽。 </li>
    </ol></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>四、比賽制度：</strong></td>
    <td>
	<li>依報名隊伍數決定賽制<br /> </li>
	<li><span class="red">賽制採男雙及女雙分開賽制，無混雙賽制，男雙及女雙各取冠亞軍</span>。</li> </td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>五、比賽規則： </strong></td>
    <td><ol>
     <li>一局決勝制，採單淘汰賽</li>
      <li>每一局21分， (如果報名人數過多則改為15分)。如遇Deuce則搶2分(以Deuce比賽加2分為比數上限)。</li>
      <li>其餘參照業餘羽球規則。</li>
      <li>比賽當天，需於賽前10分鐘報到，否則以棄權論。</li>
    </ol>
      <ul>
        <li>個人缺少球拍可於當天至體育組借用 </li>
    </ul></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>六、備註：</strong></td>
   <td><ol>
      <li>本辦法如有未盡事宜，另行公佈實施之。</li>
    </ol>    </td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>七、賽程：</strong></td>
    <td align="left"><p>另行公佈於系學會版上。</p></td>
     
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>

<?php
$form_name=explode('/',$_SERVER['PHP_SELF']);
$form_name=$form_name[count($form_name)-1];
$form_name=substr($form_name,0,strlen($form_name)-4).'_form.php';
?>
<a href="B_two_form.php" target="_blank"><button>我要報名</button></a>
<p>［目前報名清單］</p>
<?php
//連結mysql主機，一個檔案做一次
$link = mysql_connect("127.7.19.2", "adminrGdmWqR", "I6rfy1q-sJXl");
//開啟要使用的資料庫，一個檔案做一次
$db=mysql_select_db("deptsport", $link);
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET CHARACTER SET UTF8"); 
mysql_query("SET CHARACTER_SET_RESULTS=UTF8'");

$sql="SELECT max(team) FROM B_two";
$res = mysql_query($sql, $link);
$team = mysql_fetch_row($res);


for($i=1;$i<=$team[0];$i++)
{ 
    //這個變數用來存放要跟MySQL溝通的SQL語言。 
   $str="select name,number,grade from B_two where team ='$i' order by id;"; 

//把SQL語法送到MySQL，其結果會傳回給$result 
$result=mysql_query($str,$link); 

?>	

<table width="416" border="0">
  <tr>
    <td colspan="4" align="center">隊伍 : <?=$i?></td>
    <td colspan="2" align="center"><form action="B_two_motify_check.php" method="post" > <input type="hidden" name="team" value="<?=$i?>" /><input type="submit" value="我想修改" /></form></td>
  </tr>
<?php while(list($name,$num,$grade)=mysql_fetch_row($result)){  ?>
  <tr>
    <td width="50">姓名：</td>
    <td width="80"><?=$name?></td>
    <td width="50">學號：</td>
    <td width="80"><?=$num?></td>
    <td width="50">班級：</td>
    <td width="80"><?=$grade?></td>
  </tr>
  <?php	
    } ?>
</table><br><br>

  <?php
}
?>



</body>
</html>
