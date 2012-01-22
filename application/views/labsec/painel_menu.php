<a href='<?=Kohana::$base_url?>'><img src="/estaticos/img/logo.png" style="position:relative;left:-20px;width:180px;"/></a>

<div class='dotted' style="width:145px;margin:10px 0 15px;"></div>

<?
if(isset($user)){
	?>
	Você está logado como<br>
	<strong><?=$user->username?></strong>
	<Br>
	<a href='/login/logout'>fazer logout</a>
	<div class='dotted' style="width:145px;margin:10px 0 15px;"></div>
	<?
}else{
	?>
	<a href='/login/logout'>fazer logout</a>
	<?
}
?>

<a href='/painel/projetos'><div style="border:1px solid #ddd;padding:3px;width:140px;text-decoration:none;">Projetos</div></a>



