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
    <td colspan="2" align="center">躲避球</td>
  </tr>
  <tr>
    <td width="120">&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>一、比賽時間：</strong></td>
    <td>3/12(日) </td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>二、比賽地點：</strong></td>
    <td>進德校區 天空籃球場 </td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>三、報名條件：</strong></td>
    <td><ol>
      <li>
        取前兩名頒發獎品。 
<br />
        </li>
      <li>每隊不分男女至少10人，可自行決定是否增加人員為替補球員。 <br />
        </li>
      <li>一人僅能參與一支隊伍，不可一人報名兩隊。 <br />
        </li>
      <li> 未於期限內報名之隊伍不得參賽。 </li>
    </ol></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>四、比賽制度：</strong></td>
    <td>採循環賽制 </td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>五、比賽規則： </strong></td>
    <td><ol>
      <li>每局10分鐘，每隊每局可暫停乙次，暫停時間為30秒。 <br />
        </li>
      <li> 比賽採三戰兩勝制，先勝兩局者為勝，任何一局，將對方隊伍之內場球員全部擊出局者，獲得該局勝利；和局時採延長賽，中圈跳球後，率先將對方隊員擊出局者為勝。 <br />
        </li>
      <li> 場地分為內場及外場，每隊可自行調配內外場人數，外場人數至少 一人，比賽結束僅算內場人數決定勝負。 <br />
        </li>
      <li> 以下狀況為違例，此時攻擊無效且發球權規對方之隊伍： <br />
        a.同場傳球：內場球員互相傳球、外場球員互相傳球。 <br />
        b.踩線：擲球或接球時，身體任一部分不得踩線。 <br />
        c.擊中頭部：攻擊對方頭部、臉部。 <br />
        d.持球五秒：球員接到球後5秒內，必須將球擲出。 <br />
        e.不得有足球(頭頂球、腳踢球)或排球(接發球)動作。 <br />
        f.跳球後，內場持球者，第一次攻擊不能攻擊跳球球員。 <br />
        g.內場球員被判出局時，應立即出去外場區，不得故意觸球。 <br />
        h.內場、外場球員進出時，需由外圍管轄區通過，不得進入比賽場區。 <br />
        i.傳球次數不得大於四次。 <br />
        </li>
      <li> <span class="red">男生擲女生需為雙手擲出，被打到之女生則出局；若為單手擲出，攻擊無效且內場男生則判出局，外場男生則不可回內場。 </span> <br />
        </li>
      <li> 為鼓勵外場球員能盡力搶救內場之暴傳或攻擊失敗之球，只要外場球員能碰到球，將球撿回即給發球權，但需經裁判示意後，始得攻擊。 <br />
         </li>
      <li>比賽當天，需於賽前10分鐘報到，否則以棄權論。 </li>
      <li>大會保有更改、新增、刪減一切規則的權利。</li>
    </ol></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>六、雨備賽制： </strong></td>
    <td>系學會將另行公布。</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>七、備註：</strong></td>
    <td>本辦法如有未盡事宜，另行公佈實施之。</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>八、賽程：</strong></td>
    <td align="left"><p>將於報名截止後公布</p>
    <!--      <p><img src="../../images/D.png" alt="" width="500"  /></p>
    -->

  </tr>
</table>
<p>&nbsp;</p>
<?php
$form_name=explode('/',$_SERVER['PHP_SELF']);
$form_name=$form_name[count($form_name)-1];
$form_name=substr($form_name,0,strlen($form_name)-4).'_form.php';
?>
<a href="Dodgeball_form.php" target="_blank"><button>我要報名</button></a>
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

$sql="SELECT max(team) FROM Dodgeball";
$res = mysql_query($sql, $link);
$team = mysql_fetch_row($res);


for($i=1;$i<=$team[0];$i++)
{ 
    //這個變數用來存放要跟MySQL溝通的SQL語言。 
   $str="select name,number,grade from Dodgeball where team ='$i' order by id;"; 

//把SQL語法送到MySQL，其結果會傳回給$result 
$result=mysql_query($str,$link); 

?>	


<table width="416" border="0">
  <tr>
    <td colspan="4" align="center">隊伍 : <?=$i?></td>
    <td colspan="2" align="center"><form action="Dodgeball_motify_check.php" method="post" > <input type="hidden" name="team" value="<?=$i?>" /><input type="submit" value="我想修改" /></form></td>
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
  <?php	}
    } ?>
</table><br><br>
  <?php
}
?>



</body>
</html>
