<?php defined('SYSPATH') or die('No direct script access.');

	class Model_Projeto extends ORM
	{
		protected $_table_name = 'projetos';
		protected $_primary_key = 'id';
		public $mencoes;
		public $imagens;

	    public function rules()
	    {
	        return array(
	            'id'       	  => array(array('digit'),),
	            'nome'		  => array(array('not_empty'),array('max_length', array(':value', 128))),
	            'cliente_ano' => array(array('not_empty'),array('max_length', array(':value', 128))),
	            'creditos'    => array(array('max_length', array(':value', 256))),
	            'categorias'  => array(array('max_length', array(':value', 256))),
	            'thumb_tipo'  => array(
	                array('min_length', array(':value', 4)),
	                array('max_length', array(':value', 20)),
	                array(array($this, 'thumb_allowed_types')),
	            ),
	            'thumb_bin'   => array(
	            ),
	            'images_count'=> array(array('digit'),),
	        );
	    }
	    
	    public function find(){
			$finded = parent::find();
			if($finded->id){
				$finded->mencoes = array();
				$qry = "select id,projeto_id,texto from projetos_mencoes where projeto_id={$finded->id} order by ordem";
				$res = DB::query(Database::SELECT,$qry)->execute()->as_array();
				foreach($res as $ite){
					array_push($finded->mencoes,$ite['texto']);
				}
				#--
				$finded->imagens = array();
				$qri = "select id from projetos_imagens where projeto_id={$finded->id} order by ordem";
				$rei = DB::query(Database::SELECT,$qri)->execute()->as_array();
				foreach($rei as $iti){
					array_push($finded->imagens,$iti['id']);
				}
			}
			return $finded;
	    }
	    
		public function save(Validation $validation = NULL)
		{
			$saved = parent::save($validation);
			if($saved){
				$del = DB::query(Database::DELETE,"delete from projetos_mencoes where projeto_id={$this->id}")->execute();
				if($this->mencoes){
					$valueslist = array();
					foreach($this->mencoes as $mencao){
						array_push($valueslist,"({$this->id}, '$mencao', ".(count($valueslist)+1).")");
					}
					$qry = 'insert into projetos_mencoes (projeto_id,texto,ordem) values ' . implode(',',$valueslist);
					$ins = DB::query(Database::INSERT,$qry)->execute();
				}
			}
			return $saved;
		}
		
	    public function thumb_allowed_types($thumb_tipo)
	    {
	    	$allowed = array('image/jpeg','image/jpg','image/gif','image/png');
	    	return in_array($thumb_tipo,$allowed);
	    }
	    
	}

