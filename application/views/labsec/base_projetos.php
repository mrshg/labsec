<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xml:lang="pt-br" lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
	<head>
	    <title>Marcelo Martinez / Laboratório Secreto Design Studio</title>
	    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	    <meta name="description" content="Portfólio do estúdio de design Laboratório Secreto, localizado no Rio de Janeiro e comandado pelo designer e ilustrador Marcelo Martinez."/>
	    <meta name="keywords" content="laboratorio, secreto, rio de janeiro, rj, marcelo, martinez, design, designer, ilustracao, ilustration, cartoon, livros, livro, book, books, sib, sociedade, ilustradores, brasil, almanaque, bernard, cornwell, boni"/>
		<link type="text/css" href="/estaticos/css/style.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'>
	</head>
	<body class="body-principal">
		
		<div class="canvas-principal">
		
			<div class="menu-top">
				<div class="menu-top-content">
					<span><a href="/<?=Route::get('site_aberto')->uri(array('action' => 'sobre'))?>">Marcelo Martinez / Laboratório Secreto Design Studio</a></span>
					<span>+5521 2539 3146</span>
					<span><a href="mailto:contato@laboratorioscreto.com">contato@laboratorioscreto.com</a></span>
					<span>Rio de Janeiro Brasil</span>
				</div>
			</div>
			
			<div class="content">
				<?=$inner_view?>
			</div>
			
			<br clear="all"/>
			
		</div>
		
	</body>
</html>