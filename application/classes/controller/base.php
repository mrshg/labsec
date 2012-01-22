<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller {
	
    public function get_grid_2($param=array()) {	
		$view_out = $param['inner_view']->render();
		$menu_out = $param['itens_menu']->render();
		$base_params = array('inner_view' => "<div class='texto'>$view_out</div><div class='menu'>$menu_out</div>");
    	return View::factory('labsec/base_projetos', $base_params)->render();
    }

    public function get_grid_3($param=array()) {	
		$view_out = $param['inner_view']->render();
		$menu_out = View::factory('labsec/painel_menu', array('user'=>isset($param['user'])?$param['user']:null));
		$base_params = array('inner_view' => "
								<table class='canvas_admin' cellpadding='0' cellspacing='0' border='0'>
									<tr>
										<td width='200' rowspan='2' valign='top'>$menu_out</td>
										<td width='560' height='40' align='right'>
											<strong>
												<a href='/painel/projeto/novo' style='font-size:18px;text-decoration:none;'>inserir novo álbum</a>
											</strong>
										</td>
									</tr>
									<tr>
										<td valign='top'>$view_out</td>
									</tr>
								</table>");
    	return View::factory('labsec/base_painel', $base_params)->render();
    }
    
    public function validate_uploaded_image($upload, $maxkbsize=64) {
    	$out = array(
	    	'errors'=>null,
	    	'mime'=>null,
	    	'data'=>null,
    	);
		if(is_uploaded_file($upload['tmp_name'])) {
		     if($upload['size']>($maxkbsize*1024)) { // se for maior de 64k
		           $out['errors'] = 'Arquivo de imagem deve ser menor que '.$maxkbsize.'Kb!';
		     }else{
			      $_image_size = getimagesize($upload['tmp_name']);
		    	 $out['data'] = file_get_contents($upload['tmp_name']);
		    	 $out['mime'] = $_image_size['mime'];
		     }
		}
		return $out;
    }
    

}
