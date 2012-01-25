<?
// Cache for 5 minutes, and cache each language
if ( ! Fragment::load('cached_home', Date::MINUTE * 5, true))
{
    ?>
		<div class="lista-projetos">
		<?
		foreach($projetos as $projeto){
			
			$cntt = Cache::instance('file')->get('cached_imagem_'.$projeto['id']);
			
			if(!$cntt){
				$cntt = Cache::instance('file')->set('cached_imagem_'.$projeto['id'], '/labsec/projetothumb/'.$projeto['id']);
			}
			
			echo "<span><a href='/trabalho/{$projeto['id']}'><img src='$cntt' border='0'></a></span> \n";

		}
		?>
		</div>
    <?
    Fragment::save();
}
?>