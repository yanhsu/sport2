<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META HTTP-EQUIV="expires" CONTENT="0">
<META HTTP-EQUIV="pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache">
<META HTTP-EQUIV="EXPIRES" CONTENT="Mon, 22 Jul 2002 11:12:01 GMT"> 
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
    <td colspan="2" align="center">校園大逃殺</td>
  </tr>
  <tr>
    <td width="120">&nbsp;</td>
    <td align="left" >&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>一、比賽時間：</strong></td>
    <td align="left">3/6(日) 14:00~17:30</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>二、比賽地點：</strong></td>
    <td align="left">進德校區 操場 </td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>三、報名條件： </strong></td>
    <td align="left"><ol>
      <li>採自由報名,六人一組</li>
      <li>一人僅能參與一支隊伍，不可一人報名兩隊。</li>
      <li>未於期限內報名之隊伍不得參賽。 </li>
    </ol></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>四、比賽制度：</strong></td>
    <td align="left">
	<li>名次為取前兩名。</li>
	<li>同時間兩組隊伍進行比賽，比賽時間２０分鐘。</li>
	</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>五、比賽規則： </strong></td>
    <td align="left"><ol>
      <li>參賽選手頭上會有撲克牌，以大老二形式比牌大小，當與敵對碰到之後，點數大的存活，
			點數小的則死亡，存活的人必須到指定地點換牌，以身上的氣球代表存活與否，當找到指定物品時必須拿到指定地點才算，禁止停留在指定地點。</li>
      <li>獲勝條件:<br />
			1.	敵對隊員全數死亡，時間到則以存活人數判定。<br />
			2. 全隊收集到一定的指定物品。</li>

      <li>有突發狀況於第一時間通知巡邏人員。</li>
      <li>禁止參賽隊伍超出指定範圍線。</li>
	   <li>比賽當天，需於賽前10分鐘報到，否則以棄權論。</li>
    </ol></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>六、雨備賽制： </strong></td>
    <td align="left">若無法如期比賽，則系學會將另行公布之。 </td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>七、備註：</strong></td>
 <td><ol>
      <li>本辦法如有未盡事宜，另行公佈實施之。</li>
      
        
    </ol>    </td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>八、賽程：</strong></td>
	 <td align="left"><p>105年2月28日(星期日)公佈於系學會版上。</p></td>
   <!--   <p><img src="../../images/3V3A.png" alt="" width="500"  /></p>
            <p><img src="../../images/3V3B.png" alt="" width="500"  /></p>
-->
  </tr>
</table>
<p>&nbsp;</p>
<?php
$form_name=explode('/',$_SERVER['PHP_SELF']);
$form_name=$form_name[count($form_name)-1];
$form_name=substr($form_name,0,strlen($form_name)-4).'_form.php';
?>
<a href="Royale_form.php" target="_blank"><button>我要報名</button></a>
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

$sql="SELECT max(team) FROM royale";
$res = mysql_query($sql, $link);
$team = mysql_fetch_row($res);


for($i=1;$i<=$team[0];$i++)
{ 
    //這個變數用來存放要跟MySQL溝通的SQL語言。 
   $str="select name,number,grade,team_name from royale where team ='$i' order by id;"; 

//把SQL語法送到MySQL，其結果會傳回給$result 
$result=mysql_query($str,$link); 

?>
<table width="416" border="0">
  <tr>
    <td colspan="4" align="center">隊伍 :
      <?=$i?></td>
    <td colspan="2" align="center"><form action="Royale_motify_check.php" method="post" >
      <input type="hidden" name="team" value="<?=$i?>" />
      <input type="submit" value="我想修改" />
    </form></td>
  </tr>
<?php while(list($name,$num,$grade,$team_name)=mysql_fetch_row($result)){  $team_name1=$team_name;?>
  <tr>
    <td>姓名：</td>
    <td><?=$name?></td>
    <td>學號：</td>
    <td><?=$num?></td>
    <td>班級：</td>
    <td><?=$grade?></td>
  </tr>
  <?php	
    } ?>
      <tr>
    <td colspan="2">隊伍名稱：</td>
    <td colspan="4"><?=$team_name1?></td>
  </tr>
</table><br><br>
<?php
}
?>
</body>
</html>
