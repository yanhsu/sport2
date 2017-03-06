<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta name="gmapkey" content="" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<title></title>

	<link rel="stylesheet" href="jqtransformplugin/jqtransform.css" type="text/css" media="all" />
	<link rel="stylesheet" href="demo.css" type="text/css" media="all" />
<style type="text/css">
* { font-family: Verdana; font-size: 96%; }
label { width: 10em; float: left; }
label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
p { clear: both; }
.submit { margin-left: 12em; }
em { font-weight: bold; padding-right: 1em; vertical-align: top; }
</style>

	<script type="text/javascript" src="requiered/jquery.js" ></script>
	<script type="text/javascript" src="jqtransformplugin/jquery.jqtransform.js" ></script>
	<script src="jquery.validate.js" type="text/javascript"></script>


	<script language="javascript">
		$(function(){
			$('form').jqTransform({imgPath:'jqtransformplugin/img/'});
		});
		
	</script>



<script type="text/javascript">

<!--

$().ready(function() {

$("#commentForm").validate({

rules : {

pass_c : {required:true, equalTo:"#password"
}

}

});

});

-->

</script>

	
</head>
<body>
<?php
//連結mysql主機，一個檔案做一次
$link = mysql_connect("127.7.19.2", "adminrGdmWqR", "I6rfy1q-sJXl");
//開啟要使用的資料庫，一個檔案做一次
$db=mysql_select_db("deptsport", $link);
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET CHARACTER SET UTF8"); 
mysql_query("SET CHARACTER_SET_RESULTS=UTF8'");

$sql="SELECT max(team) FROM T_two";
$res = mysql_query($sql, $link);
$team = mysql_fetch_row($res);

$team=$_POST["team"];
//echo 'hello'.$team; 
//這個變數用來存放要跟MySQL溝通的SQL語言。 

$str="select pass from T_two where team ='$team' order by id;"; 
$res = mysql_query($str, $link);
$pass = mysql_fetch_row($res);
if($pass[0]==$_POST["pass"]){
	

echo "密碼正確";
$str="select name,number,grade from T_two where team ='$team' order by id;"; 

//把SQL語法送到MySQL，其結果會傳回給$result 
$result=mysql_query($str,$link); 

?>	



	<form id="commentForm" action="T_two_motify_post.php" method="POST">
		<div class="rowElem">
        <table  border="0">
        <input type="hidden" name="team" size="15" value="<?=$team?>" />
        
          <?php for($i=0 ; $i<=1 ; $i++){ list($name,$num,$grade)=mysql_fetch_row($result)?>  
          
          <tr>
            <td width="65" align="center" nowrap="nowrap">年級：</td>
            <td >		
			<select name="select[]"  >
				<option value="資工一" <?php if(ereg("資工一",$grade))echo "selected" ?> >資工一</option>
				<option value="資工二" <?php if(ereg("資工二",$grade))echo "selected" ?>>資工二</option>
                <option value="資工三" <?php if(ereg("資工三",$grade))echo "selected" ?>>資工三</option>
                <option value="資工四" <?php if(ereg("資工四",$grade))echo "selected" ?>>資工四</option>
                <option value="碩一" <?php if(ereg("碩一",$grade))echo "selected" ?>>碩一</option>
                <option value="碩二" <?php if(ereg("碩二",$grade))echo "selected" ?>>碩二</option>
                <option value="教授" <?php if(ereg("教授",$grade))echo "selected" ?>>教授</option>
			</select>
            </td>
            <td width="65" align="center" nowrap="nowrap">	姓名：</td>
            <td width="105" align="center" nowrap="nowrap">
            <input class="required" type="text" name="name[<?=$i?>]" size="15" value="<?=$name?>" /></td>
            <td width="65" align="center" nowrap="nowrap">學號：</td>
            <td width="105" align="center" nowrap="nowrap">
            <input class="required" type="text" name="num[<?=$i?>]" size="15" value="<?=$num?>" /></td>
          </tr>

          <?php } ?>
            <td height="23" colspan="6" align="center" nowrap="nowrap"><input type="submit" value="送出" />
            　　
              <input type="reset" value="重填" />
　　</td>
          </tr>
        </table>
       　
　　　　　　　
　　　　　　　</div>

				
</form>
<?php } 
if($pass[0]!=$_POST["pass"]){echo "密碼錯誤"; ?>
<input name="Submit" type="button" id="Submit" onClick="javascript:history.back(1)" value="回一上頁" /><?php }?>
</body>
</html>