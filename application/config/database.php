<?php defined('SYSPATH') or die('No direct access allowed.');

	$defaultl = array(
				'type'       => 'mysql',
				'connection' => array(
					'hostname'   => '127.0.0.1',
					'database'   => 'labsec',
					'username'   => 'root',
					'password'   => FALSE,
					'persistent' => FALSE,
				),
				'table_prefix' => '',
				'charset'      => 'utf8',
				'caching'      => FALSE,
				'profiling'    => TRUE,
			);

	$default = array(
				'type'       => 'mysql',
				'connection' => array(
					'hostname'   => 'dbmy0020.whservidor.com',
					'database'   => 'efixis_16',
					'username'   => 'efixis_16',
					'password'   => 'efixiscom',
					'persistent' => FALSE,
				),
				'table_prefix' => '',
				'charset'      => 'utf8',
				'caching'      => FALSE,
				'profiling'    => TRUE,
			);
		
	return array
	(
		'default' => $defaultl
	);