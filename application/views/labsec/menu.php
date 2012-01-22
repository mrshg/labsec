<ul>
	<?
	if($itens_menu){
		foreach($itens_menu as $item){
			echo (isset($item) && !empty($item)) ? "<li>$item</li>" : "";
		}
	}
	?>
</ul>