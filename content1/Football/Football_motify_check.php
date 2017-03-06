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



	<form id="commentForm" action="Football_motify.php" method="POST">
	  <div class="rowElem">
        <table  border="0">
        <input type="hidden" name="team" size="15" value="<?=$_POST["team"]?>" />
        

          
          <tr>

            <td width="65" align="center" nowrap="nowrap">	密碼：</td>
            <td width="105" align="center" nowrap="nowrap">
            <input class="required" type="text" name="pass" size="15" /></td>

          </tr>

            <td height="23" colspan="6" align="center" nowrap="nowrap">
              <input type="submit" value="送出" />
            　
              <input type="reset" value="重填" />
　<a href="javascript:history.back()">按此回上一頁</a>

              </td>
          </tr>  <tr>
              <td height="23" colspan="6" align="center" nowrap="nowrap"></td>
            </tr>
        </table>
       　
　　　　　　　
　　　　　　　</div>

				
</form>

</body>
</html>