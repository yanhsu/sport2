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
<META HTTP-EQUIV="expires" CONTENT="0">
<META HTTP-EQUIV="pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache">
<META HTTP-EQUIV="EXPIRES" CONTENT="Mon, 22 Jul 2002 11:12:01 GMT"> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>彰師資工系運</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
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


			<h1><a href='javascript:chgFrame("0.html")'>報名已截止，有任何賽事問題請洽系學會</a></h1>
			<!--<p>Nuce Csie Department Sport </p> -->
		</div>
		

	

</body>
</html>
