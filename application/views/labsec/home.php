
	<div class="lista-projetos">
	<?
	$url_categoria = isset($categoria) && ! empty($categoria) ? "/$categoria" : "";
	
	foreach($projetos as $projeto){
		
		$cntt = Cache::instance('file')->get('cached_imagem_'.$projeto['id']);
		
		if(!$cntt){
			$cntt = Cache::instance('file')->set('cached_imagem_'.$projeto['id'], '/labsec/projetothumb/'.$projeto['id']);
		}
		
		echo "<span><a href='/trabalho/{$projeto['id']}$url_categoria'><img src='$cntt' border='0'></a></span> \n";

	}
	?>
	</div>
  
