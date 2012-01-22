<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Painel extends Controller_Base {
	
	public function before()
	{
		parent::before();
		
			if (! Auth::instance()->logged_in('admin'))
			{
				Request::current()->redirect( Kohana::$base_url . 'login/' );
			}

	}
	
    public function action_testes() {

		$model = ORM::factory('user');
		
		try{
			$model->create_user(array(
			    'username' => 'laboratoriosecreto',
			    'password' => 'mmartinez123',
		    	'password_confirm' => 'mmartinez123',
		        'email' => 'mm@laboratoriosecreto.com',
			),array(
			    'username',
			    'password',
		        'email',
			));
			
			$model->save();

			$model->add('roles', ORM::factory('role')->where('name', '=', 'login')->find());
			$model->add('roles', ORM::factory('role')->where('name', '=', 'admin')->find());

			print_r('Sucesso!');
		}
		catch (ORM_Validation_Exception $e)
		{
		    $errors = $e->errors('models');
		    print_r($errors);
		}				
    	
		$this->response->body("Feito");
    }
            

    public function action_projetos() {	
    	$projetos = ORM::factory('projeto')->find_all();
    	
		$base_params = array(
			'user' => Auth::instance()->get_user(),
			'inner_view' => View::factory('labsec/painel_projetos', array(
				'projetos'=>$projetos,
				'projetos_imagens'=>array()
			)),
		);
		$this->response->body($this->get_grid_3($base_params));
    }

    public function action_projeto() {
    	$errors = Session::instance()->get('errors');
    	$sucesso = Session::instance()->get('sucesso');
	    Session::instance()->delete('errors');
	    Session::instance()->delete('sucesso');

		if(is_numeric($this->request->param('id')) || $this->request->param('id')=='novo'){ 
	    	
	    	$projeto = ORM::factory('projeto')->where('id', '=', $this->request->param('id'))->find();
	    	
	    	if(isset($_POST) && !empty($_POST)){
	    		
	    		$projeto->nome = $_POST['nome'];
	    		$projeto->cliente_ano = $_POST['cliente_ano'];
	    		$projeto->creditos = $_POST['creditos'];
	    		$projeto->categorias = $_POST['categorias'];
	    		$projeto->mencoes = isset($_POST['mencoes']) ? $_POST['mencoes'] : null;
	
				if(isset($_POST['remove_thumb']) && $_POST['remove_thumb']==1){
					$projeto->thumb_tipo = null;
					$projeto->thumb_bin = null;
				}
    			
    			if(isset($_FILES['thumb']) && $_FILES['thumb']['error']==0){
					$thumb_info = $this->validate_uploaded_image($_FILES['thumb'], 64);
					if(!$thumb_info['errors']){
						$projeto->thumb_tipo = $thumb_info['mime'];
						$projeto->thumb_bin = $thumb_info['data'];
					}else{
						$errors = array("A imagem em miniatura deve ser menor que 64kb");
					}
    			}

    			try
    			{
		    		$projeto->save();
		    		$sucesso = "Informações salvas com sucesso";
	    			
	    			if(isset($_FILES['image_stored'])){
	    				$ind = 0;
	    				$remanescentes = implode(',',array_keys($_FILES['image_stored']['name']));
	    				$query_limpeza = "delete from projetos_imagens where projeto_id={$projeto->id} and id not in ($remanescentes)";
						DB::query(Database::DELETE,$query_limpeza)->execute();
	
	    				foreach(array_keys($_FILES['image_stored']['name']) as $imageid){
	    					if($imageid < 0){
	    						if($_FILES['image_stored']['error'][$imageid]==0){
		    						//adicionar imagem
		    						$projetoimg = ORM::factory('projetoimagem'); 
									$thumb_info = $this->validate_uploaded_image(array('name'=>$_FILES['image_stored']['name'][$imageid],'type'=>$_FILES['image_stored']['type'][$imageid],'tmp_name'=>$_FILES['image_stored']['tmp_name'][$imageid],'error'=>$_FILES['image_stored']['error'][$imageid],'size'=>$_FILES['image_stored']['size'][$imageid]), 2030); 
	    							if(!$thumb_info['errors']){
										$projetoimg->projeto_id = $projeto->id;
										$projetoimg->img_tipo = $thumb_info['mime'];
										$projetoimg->img_bin = $thumb_info['data'];
										$projetoimg->save();
										$imageid = $projetoimg->id; 
	    							}else{
	    								$errors = array($thumb_info['errors']);
	    							}
	    						}
	    					}else{
	    						if($_FILES['image_stored']['error'][$imageid]==0 && $_FILES['image_stored']['size'][$imageid]>0){
	    							//atualizar imagem
	    							$projetoimg = ORM::factory('projetoimagem')->where('id', '=', $imageid)->find();
									$thumb_info = $this->validate_uploaded_image(array('name'=>$_FILES['image_stored']['name'][$imageid],'type'=>$_FILES['image_stored']['type'][$imageid],'tmp_name'=>$_FILES['image_stored']['tmp_name'][$imageid],'error'=>$_FILES['image_stored']['error'][$imageid],'size'=>$_FILES['image_stored']['size'][$imageid]), 2030);
	    							if(!$thumb_info['errors']){
										$projetoimg->img_tipo = $thumb_info['mime'];
										$projetoimg->img_bin = $thumb_info['data'];
										$projetoimg->save();
	    							}else{
	    								$errors = array($thumb_info['errors']);
	    							}
	    						}
	    					}
	    					DB::query(Database::UPDATE,"update projetos_imagens set ordem=".++$ind." where id=$imageid")->execute();
	    				}
	    				
	    				DB::query(Database::UPDATE,"update projetos p set p.images_count=(select count(id) from projetos_imagens where projeto_id=p.id) where p.id={$projeto->id}")->execute();

	    				$session = Session::instance();
	    				$session->set('errors', $errors);
	    				$session->set('sucesso', $sucesso);
	    				
	    				Request::current()->redirect( "/painel/projeto/{$projeto->id}" );

	    			}
    			}
				catch (ORM_Validation_Exception $e)
				{
				    $errors = $e->errors('models');
				}				
	    	}
	    	
			$base_params = array(
				'user' => Auth::instance()->get_user(),
				'inner_view' => View::factory('labsec/painel_projeto', array(
					'projeto'=>$projeto,
					'sucesso'=>$sucesso,
					'errors'=>$errors
				)),
			);
			$this->response->body($this->get_grid_3($base_params));
    	}else{
			Request::current()->redirect( '/painel/projetos' );
    	}
    }

    public function action_projetothumb($param=array()) {	
		$projeto = ORM::factory('projeto')->where('id', '=', $this->request->param('id'))->find();
		header('Content-Type: '. $projeto->thumb_tipo);
		echo $projeto->thumb_bin;
		exit();
    }

    public function action_projetoimg($param=array()) {	
    	$Qry = "select id,projeto_id,img_tipo,img_bin,ordem from projetos_imagens where id={$this->request->param('id')}";
		$Res = DB::query(Database::SELECT,$Qry)->execute()->current();
		header('Content-Type: '. $Res['img_tipo']);
		echo $Res['img_bin'];
		exit();
    }


}
