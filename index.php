


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Direction 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130121

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META HTTP-EQUIV="expires" content="0">
<META HTTP-EQUIV="pragma" content="no-cache">
<META HTTP-EQUIV="Cache-Control" content="no-cache">
<META HTTP-EQUIV="EXPIRES" content="Mon, 22 Jul 2002 11:12:01 GMT"> 
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<title>彰師資工系運</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<php?
			date_default_timezone_set('Asia/Taipei');
			$time=mktime('16','59','59','3','5','2017');
			$current=time();
			 echo $time;
			 echo "<br>";
			 echo $current;
			if(intval($current)>intval($time)){
				echo "<script>window.location('done.php')</script>";
			}
?>
<script type='text/javascript'>
		
function chgFrame( url )
{
  //var o=document.getElementById('myfrm');
  //o.src=url;
  //o.contentWindow.location.href=url;
  frames[0].location.href=url;
}
	$(function(){


		// 幫 #menu li 加上 hover 事件
		$('#menu>li').hover(function(){
			// 先找到 li 中的子選單
			var _this = $(this),
				_subnav = _this.children('ul');
			
			// 變更目前母選項的背景顏色
			// 同時顯示子選單(如果有的話)
			_this.css('backgroundColor', '#999');
			_subnav.css('display', 'block');
		} , function(){
			// 變更目前母選項的背景顏色
			// 同時隱藏子選單(如果有的話)
			// 也可以把整句拆成上面的寫法
			$(this).css('backgroundColor', '').children('ul').css('display', 'none');
		});
		
		// 取消超連結的虛線框
		$('a').focus(function(){
			this.blur();
		});
	});
</script>
<style type="text/css">

#page #sidebar #tbox1 .style2 li table tr td {
	font-size: 16px;
}

	#menu {
	margin: 0;
	padding: 0;
	list-style: none;
	position: relative;
	width: 625px;
	float: right;
	font-size:16px;
	padding: 5px 25px 15px 0px;
	position: relative;
	}
		#bor {
			border-right: 1px solid #fff;

		}
				#borin {
			border-right: 1px solid #fff;

		}
	#menu li {
		margin: 0;
		padding: 0;
		float: left;

	}
	#menu li a {
		padding: 10px 15px;
		display: block;
		color: #fff;
		text-decoration: none;
		
	}
	#menu li ul {
		margin: 0;
		padding: 15px 0;
		list-style: none;

		position: absolute;

		color: #fff;
		background: #999 url('bottom.gif') no-repeat bottom;
		display: none;
	}

	#menu li ul li a { display: inline; }
	#menu li ul li a:hover { text-decoration: underline; }

#wrapper #page #sidebar #tbox1 .style2 li table .red td {
	color: #F00;
}

</style>
</head>
<body>

<div class="red" id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href='javascript:chgFrame("0.html")'>彰師資工系運</a></h1>
			<!--<p>Nuce Csie Department Sport </p> -->
		</div>
		<div id="menu">
            <ul id="menu">
                          <li id='bor'><a id='' href='javascript:chgFrame("0.html")'>首頁</a>
			<li id='bor'><a href='#'>羽球</a>
                    <ul>
                        <li id='borin'><a href='javascript:chgFrame("content1/Badminton/B_one.php")'>羽球單打賽</a></li>
						  <li id='borin'><a href='javascript:chgFrame("content1/Badminton/B_two.php")'>羽球雙打賽</a></li>
                    </ul>
              </li>
			   <li id='bor'><a href='#)'>籃球</a>
				<ul>
					<li id='borin'><a href='javascript:chgFrame("content1/Basketball/5V5.php")'>籃球 5v5</a>
					<li id='borin'><a href='javascript:chgFrame("content1/Basketball/3Point.php")'>三分球大賽</a></li>
					<li ><a href='javascript:chgFrame("content1/Basketball/3V3.php")'>籃球3v3</a></li>
				</ul>
               </li>
              <li id='bor'><a href='javascript:chgFrame("content1/Volleyball/Volleyball.php")'>排球</a>
              <li id='bor'><a href='#)'>桌球</a>
                    <ul>
                        <li id='borin'><a href='javascript:chgFrame("content1/TableTennis/T_one.php")'>桌球單打賽</a></li>
                        <li><a href='javascript:chgFrame("content1/TableTennis/T_two.php")'>桌球雙打賽</a></li>
                    </ul>
              </li>     
                        <!-- <li id='bor'><a href='javascript:chgFrame("content1/Billiards/Billiards.php")'>撞球</a></li> -->
                        <li id='borin'><a href='javascript:chgFrame("content1/3M4F/3M4F.php")'>趣味競賽</a></li>
                        <li id='borin'><a href='javascript:chgFrame("content1/Dodgeball/Dodgeball.php")'>躲避球</a></li> -						
						<li><a href='javascript:chgFrame("content1/Bowling/Bowling.php")'>保齡球</a></li>

				
						
                        
                      
            </ul>
		</div>
	</div>
  <div id="page">
		<div id="content">



<iframe width='100%' height='100%' id='myfrm' frameborder="0" scrolling="auto" src='0.html'></iframe>
</div>
<div class="sidebar" id="sidebar">
			<div id="tbox1">
				<p>
				<h2>　最新消息</h2>
				<ul class="style2">
					<li>
					  <table width="300" border="0">

                        <tr class='red'>
					      <td width="45" align="center" style="font-weight: bold">置頂<br>　</td>
					         <td width="245" >比賽內容有疑問<br>請洽體育股長 <a href='https://www.facebook.com/profile.php?id=100000393056233'>吳子宇</a></td> 
				        </tr>
                        					    <tr  class='red'>
					      <td width="45" align="center" style="font-weight: bold">置頂<br>　</td>
					      <td width="245" >報名系統有疑問<br>請洽資工系學會</td>
				        </tr>
                        					    <tr  class='red'>
					      <td width="45" align="center" style="font-weight: bold">注意</td>
					      <td width="245" >使用本網站前先關閉代理伺服器</td>
				        </tr>
                                    					    <tr  class='red'>
															 <tr>
					      <td width="45" align="center"><strong>公告</strong><br></td>
					      <td width="245" >各項賽事已開放報名 歡迎報名!</td>
				        </tr>
<tr>
					   <td width="45" align="center"><strong>公告</strong><br></td>
					      <td width="245" > 報名截止日期至3/4(六) !</td>
						  
				        </tr>
						 <!-- <tr>
					      <td width="45" align="center"><strong>公告</strong><br></td>
					      <td width="245" ><a href='javascript:chgFrame("content1/Billiards/Billiards.php")'>桌球</a>歡迎報名!</td>
				        </tr>
						                                                                <tr>
					      <td width="45" align="center"><strong>公告</strong><br></td>
					      <td width="245" ><a href='javascript:chgFrame("content1/Dodgeball/Dodgeball.php")'>保齡球</a>歡迎報名!</td>
				        </tr>

                                                                                <tr>
					      <td width="45" align="center"><strong>公告</strong><br></td>
					      <td width="245" ><a href='javascript:chgFrame("content1/Football/Football.php")'>足壘球</a>歡迎報名!</td>
				        </tr>
                                                                                <tr>
					      <td width="45" align="center"><strong>公告</strong><br></td>
					      <td width="245" ><a href='javascript:chgFrame("content1/Basketball/3V3.php")'>羽球</a>歡迎報名!</td>
				        </tr>
						 <tr>
					      <td width="45" align="center"><strong>公告</strong><br></td>
					      <td width="245" ><a href='javascript:chgFrame("content1/Volleyball/Volleyball.php")'>排球</a>歡迎報名!</td>
				        </tr>
					     <td width="45" align="center" style="font-weight: bold">注意</td>
					      <td width="245" >3V3賽程由系學會代抽，另行公布之</td>
				        </tr>          

					    <tr>
					      <td width="45" align="center"><strong>公告</strong></td>
					      <td width="245" >保齡球/撞球需自費</td>
				        </tr>
                        <tr>
					      <td width="45" align="center"><strong>公告</strong><br></td>
					      <td width="245" >5V5賽程已新增</td>
				        </tr>
                                               
                                                                                                              
                
                                                                <tr>
					      <td width="45" align="center"><strong>公告</strong><br></td>
					      <td width="245" ><a href='javascript:chgFrame("content1/Basketball/3Point.php")'>三分球</a>/<a href='javascript:chgFrame("content1/Basketball/line.php")'>罰球線</a>賽程已新增</td>
				        </tr>
                
                                                                               
                                                                <tr>
					      <td width="45" align="center"><strong>公告</strong><br></td>
					      <td width="245" >桌球/羽球賽程已新增</td>
				        </tr>
 -->
				      </table>
					</li>

				</ul>

		      <p>&nbsp;</p>
		      <p>&nbsp;</p>
			</div>
	</div>
</div>
	
	<div id="footer">
		<p>彰師資工系學會維護管理</p>
	</div>
</div>


</body>
</html>
