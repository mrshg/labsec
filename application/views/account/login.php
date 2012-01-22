			<div class="box-logo"></div>
			
			<?
			if(isset($error)){
				?>
				<div>
					<center>
						Login ou senha inválidos
					</center>
				</div>
				<?
			}
			?>
			
			<div class="box-menu">
			<form method= "post">
				<p>
				<label for="name">nome de usuário:</label>
				<input type="text" id="username" name="username" class="input_text" value="laboratoriosecreto">
				</p>

				<p>
				<label for="senha">senha:</label>
				<input type="text" id="password" name="password" class="input_text" value="mmartinez123">
			    <dt>
			    <?php echo Form::checkbox('remember', NULL, ! empty($post['remember'])) ?>
			    <span>Lembrar meu login</span>
			    </dt>
				</p>

				<center>
				<input type="image" src="/estaticos/img/fazer_login.jpg" value="fazer_login">
				
				<label><?php echo HTML::anchor('login/reset', 'esqueceu sua senha?'); ?></label>
				<label><?php echo HTML::anchor('login/create', 'não tem uma conta?'); ?></label>
				</center>
			</form>
			</div>
			
			<br clear="all"/>
			<br clear="all"/>
			<br clear="all"/>
			<br clear="all"/>
			<br clear="all"/>
			<br clear="all"/>
			<br clear="all"/>
			










