<ul class="admin_lista_projetos">

<? for($i=1; $i<50; $i++){ ?>
	<li<?=($i%3==0?' style="margin:0px;"':'')?>>
		<div>
		<img src="/estaticos/img/<?=$i?>.jpg">
		</div>
		<span class="tit">Almanaque anos 80</span>
		<span class="txt">8 imagens</span>
	</li>
<? } ?>


</ul>