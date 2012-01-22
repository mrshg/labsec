	
	<div class="lista-projetos">
	<?
	foreach($projetos as $projeto){
		echo "<span><a href='/trabalho/{$projeto->id}'><img src='/labsec/projetothumb/{$projeto->id}' border='0'></a></span> \n";
	}
	?>
	</div>