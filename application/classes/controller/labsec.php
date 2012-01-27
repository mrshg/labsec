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
	
	private function __obter_lista_projetos($categoria){
		$categoria = trim($this->request->param('categoria')); //TODO: mysql_real_escape_string
		
		if(!empty($categoria)){
			return DB::query(Database::SELECT,"select id,nome from projetos where categorias like '%$categoria%'")->cached('cached_thumb',84600)->execute()->as_array();
		}else{
			return DB::query(Database::SELECT,"select id,nome from projetos")->cached('cached_thumb',84600)->execute()->as_array();
		}
	}

	public function action_home()
	{
		$kAt = trim($this->request->param('categoria'));
		$Res = $this->__obter_lista_projetos($kAt);
		
		$base_params = array('inner_view' => View::factory('labsec/home', array('projetos' => $Res, 'categoria'=>$kAt)));
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
				
				$kAt = trim($this->request->param('categoria'));
				$Res = $this->__obter_lista_projetos($kAt);
				$nav = array('anterior'=>null, 'proximo'=>null, 'ant_nome'=>null, 'pro_nome'=>null);
				$cpt = array('twitter'=>null, 'facebook'=>null);
				for($i=0; $i<count($Res); $i++){
					if($Res[$i]['id'] == $this->request->param('id')){

						$cpt['twitter'] = "http://twitter.com/?status=".urlencode('Enquanto isso, no #LaboratórioSecreto:')." http://laboratoriosecreto.com/trabalho/{$Res[$i]['id']}"; 
						$cpt['facebook'] = "http://www.facebook.com/share.php?t=".urlencode('Enquanto isso, no #LaboratórioSecreto...')."&u=http://laboratoriosecreto.com/trabalho/{$Res[$i]['id']}";
						
						$nav['anterior'] = '/trabalho/'. (($i==0) ? $Res[count($Res)-1]['id'] : $Res[$i-1]['id']); 
						$nav['proximo'] = '/trabalho/'. (($i==count($Res)-1) ? $Res[0]['id'] : $Res[$i+1]['id']); 
						$nav['ant_nome'] = (($i==0) ? $Res[count($Res)-1]['nome'] : $Res[$i-1]['nome']); 
						$nav['pro_nome'] = (($i==count($Res)-1) ? $Res[0]['nome'] : $Res[$i+1]['nome']); 
						if($kAt){
							$nav['anterior'] = $nav['anterior'] ? $nav['anterior'].'/'.$kAt : null;
							$nav['proximo'] = $nav['proximo'] ? $nav['proximo'].'/'.$kAt : null;
						}
					}
				}
				
		    	
		    	$projeto = ORM::factory('projeto')->where('id', '=', $this->request->param('id'))->find();
	    		$projeto->mencoes = ($projeto->mencoes) ? "&#9733; ".implode("<br>&#9733; ",$projeto->mencoes) : null;
	    		
	    		if($projeto->categorias){
	    			$cats_procs = array();
	    			$categs = explode(',',$projeto->categorias);
	    			foreach($categs as $categ){
	    				array_push($cats_procs, "<a href='/categoria/".(trim($categ))."'><i>".(trim($categ))."</i></a>");
	    			}
	    			$cats_procs = implode(', ',$cats_procs);
	    		}
		    	
				$itens_menu = array(
					"<a href='/".Route::get('site_aberto')->uri(array('action' => 'home'))."'><img src='/estaticos/img/logo-menu.jpg'></a><strong style='font-weight: bold;clear:both;display:block;'>{$projeto->nome}</strong>",
					$projeto->cliente_ano,
					$projeto->mencoes,
					$projeto->creditos,
					($cats_procs) ? $cats_procs : null,
				);
				
				$base_params = array(
					'inner_view' => View::factory('labsec/trabalho', array('imagens'=>$projeto->imagens)),
					'itens_menu' => View::factory('labsec/menu', array('itens_menu'=>$itens_menu, 'navegacao'=>$nav, 'compartilhe'=>$cpt))
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

}
