<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$html= "O total de páginas são: " .
				"<br><a href='/labsec/home'>home</a>" .
				"<br><a href='/labsec/trabalhos'>interna dos trabalhos</a>" .
				"<br><a href='/labsec/sobre'>interna Sobre</a>" .
				"<br><a href='/labsec/premiacoes'>interna Premiações</a>" .
				"<br><a href='/labsec/publicacoes'>interna Publicações</a>" .
				"<br><a href='/labsec/exposicoes'>interna Exposições</a>" .
				"<br><a href='/labsec/palestras'>interna Palestras e Workshops</a>" .
				"<br><a href='/labsec/login'>login</a>" .
				"<br><a href='/labsec/admin/projetos'>cms com os arquivos cadastrados</a>" .
				"<br><a href='/labsec/admin/projeto'>tela de cadastro/edição de projeto</a>" ;
		
		$this->response->body($html);
	}

} // End Welcome
