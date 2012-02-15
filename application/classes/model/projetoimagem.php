<?php defined('SYSPATH') or die('No direct script access.');

	class Model_Projetoimagem extends ORM
	{
		protected $_table_name = 'projetos_imagens';
		protected $_primary_key = 'id';
		
		protected $_belongs_to = array(
		    'projeto' => array(
		        'model'       => 'projeto',
		        'foreign_key' => 'proneto_id',
		    ),
		);

	    public function rules()
	    {
	        return array(
	            'id'       	  => array(array('digit'),),
	            'projeto_id'  => array(array('digit'),),
	            'img_tipo'  => array(array('min_length', array(':value', 4)),array('max_length', array(':value', 20)),array(array($this, 'thumb_allowed_types')),),
	            'img_bin'   => array(),
	        );
	    }
		
	    public function thumb_allowed_types($thumb_tipo)
	    {
	    	$allowed = array('image/jpeg','image/jpg','image/gif','image/png');
	    	return in_array($thumb_tipo,$allowed);
	    }
	    
	}

