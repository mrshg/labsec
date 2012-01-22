<ul class="admin_lista_projetos">
<?
	if(isset($projetos) && !empty($projetos)){
		$i=0;
		echo "<table border=0>";
		foreach($projetos as $projeto){
			$url_admin = '/'.Route::get('default')->uri(array('controller'=>'painel', 'action' => 'projeto', 'id' => $projeto->id));
			if($i==0){
				echo "<tr valign='top'>";
			}
			echo "<td".($i==2?' style="margin:0px;"':'').">";
			echo "<a href='$url_admin'><div><img src='/labsec/projetothumb/{$projeto->id}'></div></a>";
			echo "<a href='$url_admin'><span class='tit'>{$projeto->nome}</span></a>";
			echo "<span class='txt'>{$projeto->images_count} imagens</span>";
			echo "</td>";
			if($i++==2){
				echo "</tr>";
				$i=0;
			}
		}
		echo "</table>";
	}
?>

</ul>