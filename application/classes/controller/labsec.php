<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Labsec extends Controller {
	
	private $itens_menu;

	public function before(){
    	$this->itens_menu = array(
		"<a href='/".Route::get('default')->uri(array('controller'=>'labsec', 'action' => 'home'))."'><img src='/estaticos/img/logo-menu.jpg'></a>",
		"<a href='/".Route::get('default')->uri(array('controller'=>'labsec', 'action' => 'sobre'))."'>sobre</a>",
		"<a href='/".Route::get('default')->uri(array('controller'=>'labsec', 'action' => 'premiacoes'))."'>premiações</a>",
		"<a href='/".Route::get('default')->uri(array('controller'=>'labsec', 'action' => 'publicacoes'))."'>publicações</a>",
		"<a href='/".Route::get('default')->uri(array('controller'=>'labsec', 'action' => 'exposicoes'))."'>exposições</a>",
		"<a href='/".Route::get('default')->uri(array('controller'=>'labsec', 'action' => 'palestras'))."'>palestras e workshops</a>",
    	);
	}
	
	public function action_index()
	{
		$html= "O total de páginas são: " .
				"<br><a href='/labsec/home'>home</a>" .
				"<br><a href='/labsec/trabalho'>interna dos trabalhos</a>" .
				"<br><a href='/labsec/sobre'>interna Sobre</a>" .
				"<br><a href='/labsec/premiacoes'>interna Premiações</a>" .
				"<br><a href='/labsec/publicacoes'>interna Publicações</a>" .
				"<br><a href='/labsec/exposicoes'>interna Exposições</a>" .
				"<br><a href='/labsec/palestras'>interna Palestras e Workshops</a>" .
				"<br><a href='/labsec/login'>login</a>" .
				"<br><a href='/labsec/admin_projetos'>cms com os arquivos cadastrados</a>" .
				"<br><a href='/labsec/admin_projeto'>tela de cadastro/edição de projeto</a>" ;
		
		$this->response->body($html);
	}

	public function action_home()
	{
		$base_params = array('inner_view' => View::factory('labsec/home', array()));
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
		$itens_menu = array(
		"<a href='/".Route::get('default')->uri(array('controller'=>'labsec', 'action' => 'home'))."'><img src='/estaticos/img/logo-menu.jpg'></a><br><br><strong>Almanaque anos 70</strong>",
		"Ediouro, 2006",
		"&#9733; Galo de prata, 2a mosra de design e artes gráficas Latino-Americana - Buenos Aires, Argentina 2006<br>" .
			"&#9733; selecionado para a IX Bienal Brasileira de Design Gráfico - São Paulo, Brasil; Cidade do México, México; Xangai, China 2009<br>" .
			"&#9733; publicado no livro Anatomia d Design, Editora Blicher, 2009<br>" .
			"&#9733; exibido na Mostra Brasil Contemporary - Roterdã, Holanda 2009",
		"foto de capa: Marcelo Theobald",
		"<i>Livro, Não ficção, Almanaques e Cia</i>",
		);
		
		$base_params = array(
			'inner_view' => View::factory('labsec/trabalho', array()),
			'itens_menu' => View::factory('labsec/menu', array('itens_menu'=>$itens_menu))
		);

		$this->response->body($this->get_grid_2($base_params));
	}

    public function action_login() {	
		$base_params = array('inner_view' => View::factory('labsec/login', array()));
    	$this->response->body(View::factory('labsec/base_admin', $base_params)->render());
    }

    public function action_admin_projetos() {	
		$base_params = array(
			'inner_view' => View::factory('labsec/admin_projetos', array()),
		);
		$this->response->body($this->get_grid_3($base_params));
    }

    public function get_grid_2($param=array()) {	
		$view_out = $param['inner_view']->render();
		$menu_out = $param['itens_menu']->render();
		$base_params = array('inner_view' => "<div class='texto'>$view_out</div><div class='menu'>$menu_out</div>");
    	return View::factory('labsec/base_projetos', $base_params)->render();
    }

    public function get_grid_3($param=array()) {	
		$view_out = $param['inner_view']->render();
		$menu_out = View::factory('labsec/admin_menu', array());
		$base_params = array('inner_view' => "<table class='canvas_admin' cellpadding='0' cellspacing='0' border='0'><tr><td width='200' rowspan='2' valign='top'>$menu_out</td><td width='560' height='40' align='right'><strong><a href='#' style='font-size:18px;text-decoration:none;'>inserir novo álbum</a></strong></td></tr><tr><td valign='top'>$view_out</td></tr></table>");
    	return View::factory('labsec/base_admin', $base_params)->render();
    }

}
