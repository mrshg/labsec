<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Labsec extends Controller_Base {
	
	private $itens_menu;

	public function before(){
    	$this->itens_menu = array(
		"<a href='/".Route::get('site_aberto')->uri(array('action' => 'home'))."'><img src='/estaticos/img/logo-menu.jpg'></a>",
		"<a href='/".Route::get('site_aberto')->uri(array('action' => 'sobre'))."'>sobre</a>",
		"<a href='/".Route::get('site_aberto')->uri(array('action' => 'premiacoes'))."'>premiações</a>",
		"<a href='/".Route::get('site_aberto')->uri(array('action' => 'publicacoes'))."'>publicações</a>",
		"<a href='/".Route::get('site_aberto')->uri(array('action' => 'exposicoes'))."'>exposições</a>",
		"<a href='/".Route::get('site_aberto')->uri(array('action' => 'palestras'))."'>palestras e workshops</a>",
    	);
	}
	
	public function action_mapa()
	{
		$html= "Páginas disponíveis:" .
				"<br><a href='/home'>home</a>" .
				"<br><a href='/trabalho'>interna dos trabalhos</a>" .
				"<br><a href='/sobre'>interna Sobre</a>" .
				"<br><a href='/premiacoes'>interna Premiações</a>" .
				"<br><a href='/publicacoes'>interna Publicações</a>" .
				"<br><a href='/exposicoes'>interna Exposições</a>" .
				"<br><a href='/palestras'>interna Palestras e Workshops</a>" .
				"<br><a href='/login/'>login</a>" .
				"<br><a href='/login/logout'>logout</a>" .
				"<br><a href='/painel/projetos'>cms com os arquivos cadastrados</a>" .
				"<br><a href='/painel/projeto'>tela de cadastro/edição de projeto</a>" ;
				
		$this->response->body($html);
	}

	public function action_home()
	{
		$Res = DB::query(Database::SELECT,"select id from projetos")->cached('cached_thumb',84600)->execute()->as_array();
		$base_params = array('inner_view' => View::factory('labsec/home', array('projetos' => $Res)));
		$this->response->body(View::factory('labsec/base_projetos', $base_params)->render());
	}

	public function action_sobre()
	{
		$base_params = array(
			'inner_view' => View::factory('labsec/sobre', array()),
			'itens_menu' => View::factory('labsec/menu', array('itens_menu'=>$this->itens_menu))
		);

		$this->response->body($this->get_grid_2($base_params));
	}

	public function action_premiacoes()
	{
		$base_params = array(
			'inner_view' => View::factory('labsec/premiacoes', array()),
			'itens_menu' => View::factory('labsec/menu', array('itens_menu'=>$this->itens_menu))
		);

		$this->response->body($this->get_grid_2($base_params));
	}

	public function action_publicacoes()
	{
		$base_params = array(
			'inner_view' => View::factory('labsec/publicacoes', array()),
			'itens_menu' => View::factory('labsec/menu', array('itens_menu'=>$this->itens_menu))
		);

		$this->response->body($this->get_grid_2($base_params));
	}

	public function action_palestras()
	{
		$base_params = array(
			'inner_view' => View::factory('labsec/palestras', array()),
			'itens_menu' => View::factory('labsec/menu', array('itens_menu'=>$this->itens_menu))
		);

		$this->response->body($this->get_grid_2($base_params));
	}

	public function action_exposicoes()
	{
		$base_params = array(
			'inner_view' => View::factory('labsec/exposicoes', array()),
			'itens_menu' => View::factory('labsec/menu', array('itens_menu'=>$this->itens_menu))
		);

		$this->response->body($this->get_grid_2($base_params));
	}

	public function action_trabalho()
	{
		
			if(is_numeric($this->request->param('id'))){ 
		    	
		    	$projeto = ORM::factory('projeto')->where('id', '=', $this->request->param('id'))->find();
	    		$projeto->mencoes = ($projeto->mencoes) ? "&#9733; ".implode("<br>&#9733; ",$projeto->mencoes) : null;
		    	
				$itens_menu = array(
					"<a href='/".Route::get('site_aberto')->uri(array('action' => 'home'))."'><img src='/estaticos/img/logo-menu.jpg'></a><br><br><strong>{$projeto->nome}</strong>",
					$projeto->cliente_ano,
					$projeto->mencoes,
					$projeto->creditos,
					($projeto->categorias) ? "<i>{$projeto->categorias}</i>" : null,
				);
				
				$base_params = array(
					'inner_view' => View::factory('labsec/trabalho', array('imagens'=>$projeto->imagens)),
					'itens_menu' => View::factory('labsec/menu', array('itens_menu'=>$itens_menu))
				);
		
				$this->response->body($this->get_grid_2($base_params));
				
	    	}else{
				Request::current()->redirect( Kohana::$base_url );
	    	}
	    	

	}

    public function action_projetothumb($param=array()) {
		$projeto = ORM::factory('projeto')->where('id', '=', $this->request->param('id'))->cached('cached_thumb',84600)->find();
		header('Content-Type: '. $projeto->thumb_tipo);
		echo $projeto->thumb_bin;
		exit();
    }

    public function action_projetoimg($param=array()) {	
    	$Qry = "select id,projeto_id,img_tipo,img_bin,ordem from projetos_imagens where id={$this->request->param('id')}";
		$Res = DB::query(Database::SELECT,$Qry)->cached('cached_thumb',84600)->execute()->current();
		header('Content-Type: '. $Res['img_tipo']);
		echo $Res['img_bin'];
		exit();
    }

    public function action_importdata($param=array()) {	
    	$sav = true;
		$dir = '/Users/marcelo/Desktop/imglabsec';
		echo "<table border=1>";
		foreach(new DirectoryIterator($dir) as $file){

	
				if($file!='.' && $file!='..' && $file!='.DS_Store'){
					
					$id = intval(substr($file,0,3));
					
					if(false){ 
//					if($id >= -1 && $id<20){
//					if($id >= 20 && $id<40){
//					if($id >= 40 && $id<50){
//					if($id >= 50 && $id<60){
//					if($id >= 60 && $id<70){
//					if($id >= 70 && $id<80){
//					if($id >= 80 && $id<90){
//					if($id >= 90 && $id<100){
//					if($id >=100 && $id<120){
//					if($id >=120 && $id<140){
						
						$nome = substr($file,5);
						$isdir = is_dir($dir.'/'.$file);
						
						$list = '';
						
				    	$projeto = ORM::factory('projeto');
			            $projeto->id =intval($id) ;
			            $projeto->nome = trim($nome);
			            $projeto->cliente_ano = '-';
			            if($sav) $projeto->save();
		
						if($isdir){
							foreach(new DirectoryIterator($dir.'/'.$file) as $file2){
								if($file2!='.' && $file2!='..'){
														
									if(is_file("$dir/$file/$file2")) {
										$a = getimagesize("$dir/$file/$file2");
										$s = filesize("$dir/$file/$file2");
										
										$list .= "$dir/$file/$file2 <br>";
										
			    						$projetoimg = ORM::factory('projetoimagem'); 
										$projetoimg->projeto_id = $projeto->id;
										$projetoimg->img_tipo = $a['mime'];
										$projetoimg->img_bin = file_get_contents("$dir/$file/$file2");
										$projetoimg->ordem = intval(substr($file2,-6,2));
										if($sav) $projetoimg->save();
		
										if(intval(substr($file2,-6,2)) == 0){
								            $projeto->thumb_tipo=$a['mime'];
								            $projeto->thumb_bin=file_get_contents("$dir/$file/$file2");
								            if($sav) $projeto->save();
										}
		
									}
									
								}
							}
						}
						
						echo "<tr><td>$file</td><td>$id</td><td>$nome</td><td>".($isdir==1?'Dir':'file')."</td><td>$list</td></tr>";
					}
				}
			
			
			
		}
		echo "</table>";
    	
		exit();
    }


}
