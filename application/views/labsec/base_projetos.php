<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xml:lang="pt-br" lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
	<head>
	    <title>Marcelo Martinez / Laboratório Secreto Design Studio</title>
	    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <meta name="title" content="<?=isset($meta_title)?$meta_title:'Laboratório Secreto Design Studio'?>" />
	    <meta name="description" content="Portfólio do estúdio de design Laboratório Secreto, localizado no Rio de Janeiro e comandado pelo designer e ilustrador Marcelo Martinez."/>
	    <meta name="keywords" content="laboratorio, secreto, rio de janeiro, rj, marcelo, martinez, design, designer, ilustracao, ilustration, cartoon, livros, livro, book, books, sib, sociedade, ilustradores, brasil, almanaque, bernard, cornwell, boni"/>
		<link type="text/css" href="/estaticos/css/style.css" rel="stylesheet" />
	</head>
	<body class="body-principal">
		
		<div class="canvas-principal">
		
			<div class="menu-top">
				<div class="menu-top-content">
					<?
					/*
						<span><a href="/<?=Route::get('site_aberto')->uri(array('action' => 'sobre'))?>">Marcelo Martinez / Laboratório Secreto Design Studio</a></span>
						<span>+5521 2539 3146</span>
						<span><a href="mailto:contato@laboratorioscreto.com">contato@laboratorioscreto.com</a></span>
						<span>Rio de Janeiro Brasil</span>
					*/
					?>
					<div style="text-align:center; width:939px; margin-left:auto; margin-right:auto;">
						<img id="Image-Maps_7201201261832496" src="/estaticos/img/header.jpg" usemap="#Image-Maps_7201201261832496" border="0" width="939" height="9" alt="" />
						<map id="_Image-Maps_7201201261832496" name="Image-Maps_7201201261832496">
						<area shape="rect" coords="0,0,379,8" href="/sobre" alt="" title=""    />
						<area shape="rect" coords="530,0,766,8" href="mailto:contato@laboratorioscreto.com" alt="" title=""    />
						</map>
					</div>
				
				</div>
			</div>
			
			<div class="content">
				<?=$inner_view?>
			</div>
			
			<br clear="all"/>
			
		</div>
		
	</body>
</html>