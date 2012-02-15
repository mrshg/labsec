<div class="<?=isset($floating_menu) ? "floating-menu" : ""?>">
	<ul style='width: 300px;'>
		<?
		if($itens_menu){
			foreach($itens_menu as $item){
				echo (isset($item) && !empty($item)) ? "<li>$item</li>" : "";
			}
		}
		?>
	</ul>
	<?
		if(isset($compartilhe)){
			?>
			<div style="width:144px;text-align:left;margin:10px 0px;">
			<?=isset($compartilhe['facebook']) ? "<a href='{$compartilhe['facebook']}' target='_blank'><img src='/estaticos/img/btn_facebook.jpg' border='0' alt='' style='margin-right:10px;' /></a>" : ''?>
			<?=isset($compartilhe['twitter']) ? "<a href='{$compartilhe['twitter']}' target='_blank'><img src='/estaticos/img/btn_twitter.jpg' border='0' alt='' style='margin-right:10px;' /></a>" : ''?>
			</div>
			<?
		}
	
		if(isset($navegacao)){
			?>
			<div style="width:144px;text-align:left;margin:32px 0px;">
				<img id="Image-Maps_5201201262054148" src="/estaticos/img/naveg.jpg" usemap="#Image-Maps_5201201262054148" border="0" width="144" height="60" alt="" />
				<map id="_Image-Maps_5201201262054148" name="Image-Maps_5201201262054148">
					<area shape="rect" coords="0,0,40,55" href="<?=$navegacao['anterior']?>" alt="" title="<?=$navegacao['ant_nome']?>"    />
					<area shape="rect" coords="99,0,139,55" href="<?=$navegacao['proximo']?>" alt="" title="<?=$navegacao['pro_nome']?>"    />
				</map>
			</div>
			<?
		}
	?>
</div>
