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
    <td colspan="2" align="center">排球</td>
  </tr>
  <tr>
    <td width="120">&nbsp;</td>
    <td align="left" >&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>一、比賽時間：</strong></td>
    <td align="left">3/18(六)14:00~17:00</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>二、比賽地點：</strong></td>
    <td align="left">進德校區 天空排球場</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>三、報名條件： </strong></td>
    <td align="left"><ol>
      <li> 依系級為單位報名。 <br />
      </li>
      <li>每隊須6名選手，但場上的男生不得超過3人。 <br />
      </li>
      <li>名次為取冠亞軍。 </li>
      <li>未於期限內報名之隊伍不得參賽</li>
    </ol></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>四、比賽制度：</strong></td>
    <td align="left"><ol>
      <li>單淘汰賽制，<span class="red">取冠亞軍</span>。 </li>
      <li>若遇天候不佳或不可抗拒之因素，大會保留修改賽程等相關權利。</li>   
      </ol>
      </td>
  <tr>
    <td align="left" valign="top"><strong>五、比賽規則： </strong></td>
    <td align="left"><ol>
      <li>若隊伍不足5隊(含5隊)，打循環賽，第一、二局為25分，第三局為15分。若雙方打成24平手，在非決勝局中，先達27的一方為勝利方；若在決勝局，則必須至其中一方連續得兩分才算獲勝。 </li><br />
      <li>若隊伍超過5隊，進行單淘汰賽制，每局皆打15分。若雙方打成14平手，則比賽繼續進行，直至其中一方連續得兩分才算獲勝。再由兩組勝出隊伍進行四強賽，一局25分，第三局為15分。若雙方打成24平手，在非決勝局中，先達27的一方為勝方；若在決勝局，則必須其中一方連續得兩分才算獲勝。 </li><br />
      <li>每隊須6名選手，但場上的女生至少2人。 </li>
      <li>其餘參照業餘排球規則。 </li>
      <li>比賽當天，需於賽前10分鐘報到，否則以棄權論。 </li>
      </ol>
      </td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>六、雨備賽制： </strong></td>
    <td align="left">若無法如期比賽，則系學會將另行公布。 </td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>七、備註：</strong></td>
    <td align="left">本辦法如有未盡事宜，另行公佈實施之。</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>八、賽程：</strong></td>
    <td align="left"><p>另行公佈於系學會版上。</p>
    <!--  <p><img src="../../images/V.png" alt="" width="500"  /></p>
    -->
  </tr>
</table>
<p>&nbsp;</p>
<?php
$form_name=explode('/',$_SERVER['PHP_SELF']);
$form_name=$form_name[count($form_name)-1];
$form_name=substr($form_name,0,strlen($form_name)-4).'_form.php';
?>
<a href="Volleyball_form.php" target="_blank"><button>我要報名</button></a>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>［目前報名清單］</p>
<?php
//連結mysql主機，一個檔案做一次
$link = mysql_connect("127.7.19.2", "adminrGdmWqR", "I6rfy1q-sJXl");
//開啟要使用的資料庫，一個檔案做一次
$db=mysql_select_db("deptsport", $link);
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET CHARACTER SET UTF8"); 
mysql_query("SET CHARACTER_SET_RESULTS=UTF8'");

$sql="SELECT max(team) FROM Volleyball";
$res = mysql_query($sql, $link);
$team = mysql_fetch_row($res);


for($i=1;$i<=$team[0];$i++)
{ 
    //這個變數用來存放要跟MySQL溝通的SQL語言。 
   $str="select name,number,grade from Volleyball where team ='$i' order by id;"; 

//把SQL語法送到MySQL，其結果會傳回給$result 
$result=mysql_query($str,$link); 

?>	

<table width="416" border="0">
  <tr>
    <td colspan="4" align="center">隊伍 : <?=$i?></td>
    <td colspan="2" align="center"><form action="Volleyball_motify_check.php" method="post" > <input type="hidden" name="team" value="<?=$i?>" /><input type="submit" value="我想修改" /></form></td>
  </tr>
<?php while(list($name,$num,$grade)=mysql_fetch_row($result)){  ?>
 
   <?php if($name!=''){?>
  <tr>
    <td width="50">姓名：</td>
    <td width="80"><?=$name?></td>
    <td width="50">學號：</td>
    <td width="80"><?=$num?></td>
    <td width="50">班級：</td>
    <td width="80"><?=$grade?></td>
  </tr>
  <?php }	
    } ?>
</table><br><br>

  <?php
}
?>



</body>
</html>
