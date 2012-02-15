<script type="text/javascript" src="/estaticos/js/jquery-ui-personalized-1.6rc4.min.js"></script>
<script type="text/javascript" src="/estaticos/js/jquery.filestyle.mini.js"></script>
<script type="text/javascript" src="/estaticos/js/jquery.slugit.js"></script>

<script type="text/javascript" src="/estaticos/js/jquery.autocomplete-min.js"></script>
<link type="text/css" href="/estaticos/js/jquery.autocomplete-min.css" rel="stylesheet" />

<script type="text/javascript">
  $(document).ready(function() {
  	
	jQuery(function(){
	  options = { serviceUrl:'/painel/autocomplete' };
	  a = $('#categorias').autocomplete({ 
		    serviceUrl:'/painel/autocomplete',
		    delimiter: /(,|;)\s*/, // regex or character,
		    left:'480.5px'
	  });
	});
  	

    $('#nome').slugIt( { output: '#slug' } );

  	$("#salvar_album").bind('click',function(){
  		$("#frmproj").submit();
  	});
  	
  	/*
    $("#test-list").sortable({
      handle : '.handle',
      update : function () {
		var order = $('#test-list').sortable('serialize');
		$("#info").load("process-sortable.php?"+order);
      }
    });
  	*/
    
	$("input[type=file]").filestyle({ 
	     image: "/estaticos/img/input_file.png",
	     imageheight : 40,
	     imagewidth : 165,
	     width : 205
	});
    
    $(".image_fields").sortable({
      handle : '.handle',
      update : function () {
		var order = $('#test-list').sortable('serialize');
//		$("#info").load("process-sortable.php?"+order);
      }
    });
    
});
</script>


<ul class="admin_form_projeto">
<form method="post" id="frmproj" enctype="multipart/form-data" >
	<?
		if(isset($errors)){
			echo "<ul class='errors' style='margin:15px;'>";
			foreach($errors as $error){
				echo "<li>$error</li>";
			}
			echo "</ul>";
		}elseif(isset($sucesso)){
			echo "<span class='sucesso' style='margin:0px;'>$sucesso</span>";
		}
	?>
	<div class="text_fields">
		<label for="nome_do_projeto">nome do projeto</label>
		<input type="text" name="nome" id="nome" value="<?=$projeto->nome?>">
		
		<label for="nome_do_projeto">slug (url)</label>
		<input type="text" name="slug" id="slug" value="<?=$projeto->slug?>">
		
		<label>cliente/ano</label>
		<input type="text" name="cliente_ano" id="cliente_ano" value="<?=$projeto->cliente_ano?>">
		
		<label>créditos</label>
		<input type="text" name="creditos" id="creditos" value="<?=$projeto->creditos?>">
		
		<label>categorias (separe por vírgulas)</label>
		<input type="text" name="categorias" id="categorias" value="<?=$projeto->categorias?>">

		<label>menções</label>
		<ul id="lista_mencoes">
		<?
			if($projeto->mencoes){
				foreach($projeto->mencoes as $mencao){
					echo "<li><input type='text' name='mencoes[]' value='$mencao'></li>";
				}
			}
		?>
		</ul>
		<div class="add_field_link"><a href="#add_mencao" id="add_mencao">adicionar campo</a></div>
		
	</div>
	
	<div class="block_title">Upload do thumbnail</div>
	<div class="image_fields">
		<table>
			<tr>
				<td width="140" rowspan="2">
				<img width="140" height="140" border="0" id="thumb_preview" src="<?=($projeto->thumb_tipo) ? "/labsec/projetothumb/{$projeto->id}" : "/estaticos/img/noimage.gif"?>">
				</td>
				<td rowspan="2" width="15"></td>
				<th>
					<a href="#" id="remover_thumb">remover</a>
					<input type='hidden' name='remove_thumb' id='remove_thumb' value='0'>
				</th>
			</tr>
			<tr>
				<td valign='top' style="padding-top:20px;">
					<input type='file' name='thumb' id='thumb'>
					<?
					/*
					<br>Dimensões recomendadas: 150×200 pixels
					<br>Tamanho máximo 64kb
					*/
					?>
				</td>
			</tr>
		</table>
	</div>

	<div class="block_title">Upload de imagens</div>
	<ul class="image_fields">
	<?
	if($projeto->imagens){
		foreach($projeto->imagens as $img){
			?>
			<li>
			<table>
				<tr>
					<td rowspan="2" width="15"><img src="/estaticos/img/dotted.jpg" alt="move" width="16" height="140" class="handle" /></td>
					<td rowspan="2" width="140"><img width='140' height='140' border='0' src='<?="/labsec/projetoimg/{$img}"?>'></td>
					<th ><a href="#" id="remover_imagem">remover</a></th>
				</tr>
				<tr><td><input type="file" name="image_stored[<?=$img?>]" id="stored_image_"></td></tr>
			</table>
			</li>
			<?
		}
	}
	?>
		<li>
		<table>
			<tr>
				<td rowspan='2' width='15'><img src='/estaticos/img/dotted.jpg' alt='move' width='16' height='140' class='handle' /></td>
				<td rowspan='2' width="140"><img width='140' height='140' border='0' src='/estaticos/img/newimage.gif'></td>
				<th >&nbsp;</th>
			</tr>
			<tr>
				<td valign='middle'>
					<input type='file' name='image_stored[-1]' id='stored_image'>
					<?
					/*
					<br>Dimensões recomendadas: 575×315 pixels
					<br>Tamanho máximo 2M
					*/
					?>
				</td>
			</tr>
		</table>
		</li>
	</ul>
	
	<br><br>	
	<div class="submit_fields">
		<table width="100%">
		<tr valign="top">
		<td align="left">
		<input type="button" id="excluir_projeto" style="background: url('/estaticos/img/excluir_projeto.png') no-repeat scroll 0 0 transparent;border: medium none;cursor: pointer;height: 45px;width: 85px;">
		</td>
		<td align="right">
		<input type="image" src='/estaticos/img/salvar_projeto.png' style="width:124px;height:44px;border:none;">
		</td>
		</tr>
		</table>
	</div>
	
	
	<script>
	$(document).ready(function(){
		
		$("#add_mencao").bind("click",function(){
			$("#lista_mencoes").append("<li><input type='text' name='mencoes[]'></li>");
			return false;
		});

		$("#lista_mencoes a").live('click',function(){
			$(this).parents("#lista_mencoes li").remove();
			return false;
		});
		
		$("#lista_mencoes li").hover(
			function(){
				$("input",$(this)).css("width",440);
				$(this).append("<a href='#'></a>")
			},
			function(){
				$("a",$(this)).remove();
				$("input",$(this)).css("width",490);
			}
		);
		
		$("#remover_thumb").bind('click',function(){
			$("#remove_thumb").val(1);
			$("#thumb_preview").attr("src","/estaticos/img/noimage.gif");
			return false;
		});
		
		$("#remover_imagem").live('click',function(){
			if(confirm("Tem certeza que deseja remover esta imagem?")){
				$(this).parents("li").remove();
			}
			return false;
		});
		
		$("#excluir_projeto").bind("click",function(){
			if(confirm("Esta operação não poderá ser desfeita.\n Tem certeza que deseja excluir este projeto?")){
				$("form#frmproj").append("<input type='hidden' value='1' name='excluir_projeto'>");
				$("form#frmproj").submit();
			}
		});
		
	});
	</script>
</form>
</ul>