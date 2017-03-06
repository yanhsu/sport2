<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META HTTP-EQUIV="expires" CONTENT="0">
<META HTTP-EQUIV="pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Direction by FCT</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Arvo:400,700" rel="stylesheet" type="text/css" />

<style type="text/css">
.button-style {
	display: inline-block;
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
.red {
	color: #F00;
}
</style>
</head>
<body>
<table border="0">
  <tr>
    <td colspan="2" align="center">三分球大賽</td>
  </tr>
  <tr>
    <td width="120">&nbsp;</td>
    <td align="left" >&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>一、比賽時間：</strong></td>
    <td align="left">3/11(六)</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>二、比賽地點：</strong></td>
    <td align="left">進德校區 天空籃球場</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>三、報名條件： </strong></td>
    <td align="left"><ol>
      <li> 以個人為單位報名，一人報名乙次。 <br />
      </li>
      <li> 男生僅能報名三分球大賽，女生可三分球大賽或罰球線大賽<span class="red">擇一</span>。 <br />
      </li>
      <li> 若女生選擇三分球大賽，則<span class="red">納入男生一起排名次</span>。 <br />
      </li>
      <li> 未於期限內報名之隊伍不得參賽 </li>
    </ol></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>四、比賽制度：</strong></td>
    <td align="left"><p>三分球大賽取總分最高前5名優勝(報名人數少於7人時取前3名)。 </p></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>五、比賽規則： </strong></td>
    <td align="left"><ol>
      <li>於三分線上設5個點，需站在點上投球，踩線即不予計分。</li>
      <li>每個點有5顆球，前4顆球1分，第5顆球2分，第5點每顆皆為兩分。(女生參賽者一球2分計算)<br />
      </li>
      <li>總分最高前5名優勝。</li>
	  <li>限時一分鐘。(女生則不限時)</li>
    </ol></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>六、雨備賽制： </strong></td>
    <td align="left"><p>若無法如期比賽，則系學會將另行公布之。 </p></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>七、備註：</strong></td>
    <td align="left">本辦法如有未盡事宜，另行公佈實施之。</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>八、賽程：</strong></td>
    <td align="left">
      <p>將於報名截止後公布</p>
    
  </tr>
</table>
<p>&nbsp;</p>
<?php
$form_name=explode('/',$_SERVER['PHP_SELF']);
$form_name=$form_name[count($form_name)-1];
$form_name=substr($form_name,0,strlen($form_name)-4);
?>
<a href="3Point_form.php" target="_blank"><button>我要報名</button></a>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>［目前報名清單］</p>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//連結mysql主機，一個檔案做一次
$link = mysql_connect("127.7.19.2", "adminrGdmWqR", "I6rfy1q-sJXl");
//開啟要使用的資料庫，一個檔案做一次
$db=mysql_select_db("deptsport", $link);
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET CHARACTER SET UTF8"); 
mysql_query("SET CHARACTER_SET_RESULTS=UTF8'");

$sql="SELECT max(team) FROM three_point";
$res = mysql_query($sql, $link);
$team =mysql_fetch_row($res);

echo mysql_error();

for($i=1;$i<=$team[0];$i++)
{ 
    //這個變數用來存放要跟MySQL溝通的SQL語言。 
   $str="select name,number,grade from three_point where team ='$i' order by id;"; 

//把SQL語法送到MySQL，其結果會傳回給$result 
$result=mysql_query($str,$link); 

?>	

<table width="416" border="0">
  <tr>
    <td colspan="4" align="center">隊伍 : <?=$i?></td>
    <td colspan="2" align="center"><form action="3Point_motify_check.php" method="post" > <input type="hidden" name="team" value="<?=$i?>" /><input type="submit" value="我想修改" /></form></td>
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
