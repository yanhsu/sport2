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

	<form id="commentForm" action="3M4F_post.php" method="POST">
		<div class="rowElem">
         <table  border="0">
          <?php for($i=0 ; $i<=3 ; $i++){?>
          <tr>
            <td width="65" align="center" nowrap="nowrap">年級：</td>
            <td >		
			<select name="select[]" >
				<option value="資工一">資工一</option>
				<option value="資工二">資工二</option>
                <option value="資工三">資工三</option>
                <option value="資工四">資工四</option>
                <option value="碩一">碩一</option>
                <option value="碩二">碩二</option>
                <option value="教授">教授</option>
			</select>
            </td>
            <td width="65" align="center" nowrap="nowrap">	姓名：</td>
            <td width="105" align="center" nowrap="nowrap">
            <input <?php if($i<=3) echo "class='required'" ?> type="text" name="name[<?=$i?>]" size="15"/></td>
            <td width="65" align="center" nowrap="nowrap">學號：</td>
            <td width="105" align="center" nowrap="nowrap">
            <input <?php if($i<=3) echo "class='required'" ?> type="text" name="num[<?=$i?>]" size="15"/></td>
          </tr>

          <?php } ?>
          <tr>
             <td colspan="2" align="center" >隊伍名稱：</td>
              <td colspan="4" align="left" > <input type="text" name="team_name" /> </td>
           </tr>
                      <tr>
            <td colspan="2" align="center" >請設定密碼：</td>
            <td colspan="4" align="left" ><input type="password" id="password" name="password" size="15" class="required"/>
              ---<span class="note">請輸入六位以下英數字(別用符號)</span></td> 
                      </tr>
           <tr>  <td colspan="2" align="center" >再輸入一次：</td>
             <td colspan="4" align="left" ><input  type="password"  name="pass_c" size="15" />
               ---<span class="note">資料需要修改時使用，請小心保管</span></td> 
           </tr>
          <tr>
            <td height="23" colspan="6" align="center" nowrap="nowrap"><input type="submit" value="送出" />
            　　
              <input type="reset" value="重填" />
　　
              
          　<a href="javascript:history.back()">按此回上一頁</a></tr>
        </table>
　　　　　　　
　　　　　　　</div>

				
</form>

</body>
</html>