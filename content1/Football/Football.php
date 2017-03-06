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
    <td colspan="2" align="center">足壘球</td>
  </tr>
  <tr>
    <td width="120">&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>一、比賽時間：</strong></td>
    <td>3/13(日) 14:00~18:00</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>二、比賽地點：</strong></td>
    <td>寶山壘球場</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>三、報名條件： </strong></td>
    <td><ol>
      
      <li>每隊不分男女12人(兩人為替補)，如發生受傷此類不得以突發事件，經裁判同意方可換不在列隊名單內之同系級的人。</li>
      <li>未於期限內報名之隊伍不得參賽</li>
    </ol></td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>四、比賽制度：</strong></td>
    <td>採單淘汰，每場六局制。</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>五、比賽規則： </strong></td>
    <td>    
       <ol>
        <li>比賽人數為正式球員十人，候補球員二人，合計每隊參賽人數十二人。<br>
        </li>
        <li>比賽開始前由雙方隊長代表猜拳，勝方決定先攻或先守。 <br>
        </li>
        <li>比賽採六局制，合計得分之多寡判定勝負。每局攻擊均分為上下半局，於攻方被判第三人出局時互換攻守。 <br>
        </li>
        <li>每隊更換球員應於換場或暫停時間經裁判同意後進行。 <br></li>
		 <li>平手時實施突破僵局制(一開始就會讓兩位跑者分佔於一、二壘。第三位打擊者打擊)棒次接續上一局的順序。</li>
		 <li>比賽當天，需於賽前10分鐘報到，否則以棄權論。</li>
            
      </ol>
	</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>六、雨備賽制： </strong></td>
    <td>若3/13(日)無法如期比賽，則系學會將另行公布之。</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>七、備註：</strong></td>
    <td>本辦法如有未盡事宜，另行公佈實施之。</td>
  </tr>
    <tr>
    <td align="left" valign="top"><strong>八、賽程：</strong></td>
    <td align="left"><p>105年2月28日(星期日)公佈於系學會版上。</p>
    

  </tr>
</table>
<p>&nbsp;</p>
<?php
$form_name=explode('/',$_SERVER['PHP_SELF']);
$form_name=$form_name[count($form_name)-1];
$form_name=substr($form_name,0,strlen($form_name)-4).'_form.php';
?>
<a href="Football_form.php" target="_blank"><button>我要報名</button></a>
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

$sql="SELECT max(team) FROM Football";
$res = mysql_query($sql, $link);
$team = mysql_fetch_row($res);


for($i=1;$i<=$team[0];$i++)
{ 
    //這個變數用來存放要跟MySQL溝通的SQL語言。 
   $str="select name,number,grade from Football where team ='$i' order by id;"; 

//把SQL語法送到MySQL，其結果會傳回給$result 
$result=mysql_query($str,$link); 

?>	


<table width="416" border="0">
  <tr>
    <td colspan="4" align="center">隊伍 : <?=$i?></td>
    <td colspan="2" align="center"><form action="Football_motify_check.php" method="post" > <input type="hidden" name="team" value="<?=$i?>" /><input type="submit" value="我想修改" /></form></td>
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
