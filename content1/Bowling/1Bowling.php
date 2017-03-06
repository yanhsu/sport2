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
.red {	color: #F00;
}
.w {
	color: #FFF;
}
</style>
</head>
<body>
<table width="600" border="0">
  <tr>
    <td colspan="2" align="center">保齡球</td>
  </tr>
  <tr>
    <td width="120">&nbsp;</td>
    <td class="w" >&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>一、比賽時間：</strong></td>
    <td>3/18(三) 18:00~22:00</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>二、比賽地點：</strong></td>
    <td>中央保齡球館</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>三、報名條件： </strong></td>
    <td><ol>
      <li>不分系級、不分男女皆可組隊，每隊5人。 <br />
        </li>
      <li> 一人僅能參與一支隊伍，不可一人報名兩隊。 <br />
        </li>
      <li> 未於期限內報名之隊伍不得參賽 </li>
    </ol></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>四、比賽制度：</strong></td>
    <td>依每隊當局總成績取晉級。 </td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>五、比賽規則： </strong></td>
    <td><ol>
      <li> <span class="red">隊伍中有女生者，每位女生額外加30分。 </span><br />
        </li>
      <li> 各隊出賽球道，由現場當場抽籤決定。 <br />
        </li>
      <li> 為維護比賽安全及品質，一律穿著保齡球專用鞋。 <br />
        </li>
      <li> 當右邊球道有人上道時，請禮讓右邊人員以免受傷。 <br />
        </li>
      <li> 其餘規則採用中華民國保齡球協會公佈之最新保齡球規則。 </li>
    </ol></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>六、備註：</strong></td>
    <td><ol>
      <li>本辦法如有未盡事宜，另行公佈實施之。</li>
      <li class="red">報名費需自費，一局40元、每隊新台幣125元、晉級複賽隊伍每隊新台幣250元(場地專用鞋請自行租借)</li>
    </ol></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p><a href="Bowling_form.php" class="button-style">我要報名</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>［目前報名清單］</p>
<?
//連結mysql主機，一個檔案做一次
$link = mysql_connect("127.7.19.2", "adminrGdmWqR", "I6rfy1q-sJXl");
//開啟要使用的資料庫，一個檔案做一次
$db=mysql_select_db("deptsport", $link);
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET CHARACTER SET UTF8"); 
mysql_query("SET CHARACTER_SET_RESULTS=UTF8'");

$sql="SELECT max(team) FROM Bowling";
$res = mysql_query($sql, $link);
$team = mysql_fetch_row($res);


for($i=1;$i<=$team[0];$i++)
{ 
    //這個變數用來存放要跟MySQL溝通的SQL語言。 
   $str="select name,number,grade,team_name from Bowling where team ='$i' order by id;"; 

//把SQL語法送到MySQL，其結果會傳回給$result 
$result=mysql_query($str,$link); 

?>	

<table width="416" border="0">
  <tr>
    <td colspan="4" align="center">隊伍 : <?=$i?></td>
    <td colspan="2" align="center"><form action="Bowling_motify_check.php" method="post" > <input type="hidden" name="team" value="<?=$i?>" /><input type="submit" value="我想修改" /></form></td>
  </tr>
<? while(list($name,$num,$grade,$team_name)=mysql_fetch_row($result)){  $team_name1=$team_name;?>
  <tr>
    <td width="50">班級：</td>
    <td width="80"><?=$grade?></td>   
    <td width="50">姓名：</td>
    <td width="80"><?=$name?></td>
    <td width="50"><? if($grade!="教授") echo "學號："; ?></td>
    <td width="80"><? if($grade!="教授") echo $num;?></td>
  </tr>
  <?	
    } ?>
      <tr>
    <td colspan="2">隊伍名稱：</td>
    <td colspan="4"><?=$team_name1?></td>
  </tr>
</table><br><br>

  <?
}
?>



</body>
</html>
