<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xml:lang="pt-br" lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
	<head>
	    <title>title</title>
	    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	    <meta name="description" content=""/>
	    <meta name="keywords" content=""/>
		<style type="text/css">
			@font-face {  
			  font-family: istock ;  
			  src: url( /estaticos/font/istok/IstokWeb-Regular.ttf ) format("truetype");  
			}  
			
			* {padding:0px;margin:0px;}
			body.body-principal, body.body-admin {color: #848484;font-family: Helvetica;font-size: 0.81em;font-weight: lighter;line-height: 1.6em;}
			body.body-admin {background-color:#ffffff;}
			body.body-principal {background-color:#c2c2c2;}
			
			.menu-top {width:1200px;height:68px;background-color:#ffffff;border-bottom:1px solid #e4e4e4;clear:both;}
			.menu-top-content {margin:22px auto;display:table;}
			.menu-top-content span {padding:0px 22px;text-align:center;font-family: istock , verdana, helvetica, sans-serif;font-size:11px;text-transform:uppercase;}
			.menu-top-content span a {text-decoration:none;color:#000000;}
			.menu-top-content span a:hover {color:#dddddd;}
			
			.lista-trabalhos span {display: block;margin-bottom: 50px;}
			
			.box-logo {width:355px;height:280px;background:url(/estaticos/img/logo.png) no-repeat center;margin:70px auto 30px auto;}
			.box-menu {width:311px;height:236px;background-color:#efefef;border:1px solid #c2c2c2;margin:0px auto;padding-bottom:30px;}
			.box-menu {padding:22px;}
			.box-menu label {display:block;color:9b9b9b;margin-bottom:8px;}
			.box-menu label a {text-decoration:none;margin-top:15px;display:block;color:#666666;}
			.box-menu .input_text {width:305px;height:42px;border:1px solid #999999;}

			.canvas-principal {width:1200px;min-height:600px;background-color:#efefef;border:1px solid #c2c2c2;margin:0px auto;padding-bottom:30px;}
			.canvas-principal .lista-projetos {text-align: justify;}
			.canvas-principal .content {margin:90px auto;width:930px;}
			.canvas-principal .content .texto {float: left;padding-right: 30px;width: 600px;}			
			.canvas-principal .content .menu {width:300px;float:left}
			.canvas-principal .content .menu li {border-bottom: 0.15em dotted;list-style: none outside none;padding:10px 0px;}
			.canvas-principal .content .menu li img {position:relative;top:-10px;left:-10px;}
			.canvas-principal .content .menu li a {text-decoration:none;color:#848484;}
			.canvas-principal .content .menu li a:hover {text-decoration:none;color:#bbbbbb;}
			
			.dotted {background:url(/estaticos/img/dotted.png) repeat-x;display:block;height:1px;}
			.canvas_admin, .canvas_admin a {margin:50px auto;font-size:13px;color:#666666;}
			
			.admin_lista_projetos li {list-style: none outside none;height: 215px;width: 170px;text-align:center;float:left;margin: 0 25px 0 0;}
			.admin_lista_projetos li:hover {background-color:#efefef;}
			.admin_lista_projetos li div {background: url("/estaticos/img/bg-album.png") no-repeat scroll center 10px transparent;display: table;height: 165px;width: 170px;}
			.admin_lista_projetos li div img {height: 120px;position: relative;text-align: center;top: 24px;width: 120px;}
			.admin_lista_projetos li .tit {font-weight:normal;font-size:15px;color:#666;display:block;}
			.admin_lista_projetos li .txt {font-weight:normal;font-size:13px;color:#aaa;display:block;}
			

		</style>
	</head>
	
	<body class="body-admin">
		<?=$inner_view?>
	</body>

</html>