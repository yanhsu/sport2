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
    <td colspan="2" align="center">撞球</td>
  </tr>
  <tr>
    <td width="120">&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>一、比賽時間：</strong></td>
    <td>3/12(四) 18:00~22:00</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>二、比賽地點：</strong></td>
    <td>中央保齡球館</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>三、報名條件： </strong></td>
    <td><ol>
      <li>不分系級、不分男女皆可組隊，每隊2人。 <br />
        </li>
      <li> 一人僅能參與一支隊伍，不可一人報名兩隊。 <br />
        </li>
      <li> 未於期限內報名之隊伍不得參賽。 </li>
    </ol></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>四、比賽制度：</strong></td>
    <td>依報名隊伍數決定採用何種賽制 </td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>五、比賽規則： </strong></td>
    <td><ol>
      <li>比賽採用14-1的比賽方式(15顆子球，可隨意選擇任意子球打，不需要按照順序打球。因為為了增加趣味，所以不需要指定球指定袋。打到台面上剩下一顆球時，把其他14顆球重排，排球規則在最下面)<br />
        </li>
      <li>同隊2人輪流出竿，比2隊誰先達到40分(一顆球一分)，或是15分鐘時間到時，比2對誰分數高(時間到的最後一竿可打完)。如果時間到時，還同分則繼續打，下一球進球方即勝出，扣分方即敗。 <br />
        </li>
      <li>出竿後，若進球則可繼續出竿，直到球未進袋則換球權。 <br />
        </li>
      <li>當時間到時，出竿者可將最後一竿打完；若同分則繼續打，每人輪流出竿一次後，再比分數決定勝負，若依然同分則依此類推。 <br />
        </li>
      <li>以下情形皆需扣1分，且球權轉換： <br />
        a.白球洗袋或是有球飛出球台 <br />
        b.比賽過程中，不小心觸碰到其他球 <br />
        c.出竿後，母球未擊中任一子球。 <br />
        d.出竿後，母球與子球皆無碰壁或進袋。 <br />
        </li>
      <li>在這次比賽中不會抓挖地瓜犯規(打擊白球最下方所造成的跳球)，也不抓雙碰撞(在白球與子球過近的距離擊球，造成白球與球竿撞擊2次)，也不抓雙腳離地(不過請自己注意，希望大家遵守) </li>
      <li><span class="red">如隊伍中有一位女生，則有5分獎勵，兩名女生則有10分。</span> <br />
      </li>
      <li> 其餘規則採用中華民國撞球協會公佈之最新撞球規則。 </li>
    </ol></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>六、備註：</strong></td>
    <td><ol>
      <li>本辦法如有未盡事宜，另行公佈實施之。</li>
	  <li class="red">賽程於開幕式時抽籤，另行公布之</li>
      <li class="red">報名費需自費，1.5元/1分鐘</li>

    </ol>    </td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>七、賽程：</strong></td>
    <td align="left"><p>將於報名截止後公布</p>
     
  </tr>
</table>
<p>&nbsp;</p>
<?php
$form_name=explode('/',$_SERVER['PHP_SELF']);
$form_name=$form_name[count($form_name)-1];
$form_name=substr($form_name,0,strlen($form_name)-4).'_form.php';
?>
<a href="https://www.youtube.com/watch?v=jaDdpZzsIMU" target="_blank"><button>我要報名</button></a>
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

$sql="SELECT max(team) FROM Billiards";
$res = mysql_query($sql, $link);
$team = mysql_fetch_row($res);


for($i=1;$i<=$team[0];$i++)
{ 
    //這個變數用來存放要跟MySQL溝通的SQL語言。 
   $str="select name,number,grade from Billiards where team ='$i' order by id;"; 

//把SQL語法送到MySQL，其結果會傳回給$result 
$result=mysql_query($str,$link); 

?>	

<table width="416" border="0">
  <tr>
    <td colspan="4" align="center">隊伍 : <?=$i?></td>
    <td colspan="2" align="center"><form action="Billiards_motify_check.php" method="post" > <input type="hidden" name="team" value="<?=$i?>" /><input type="submit" value="我想修改" /></form></td>
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
