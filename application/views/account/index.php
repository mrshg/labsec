			
			<div class="box-logo"></div>
			
			<?
			if(isset($loginerrors)){
				?>
				<div>
					<center style="color:red;">
						<?=$loginerrors?>
					</center>
				</div>
				<?
			}
			$post = (isset($post) && $post->data()) ? $post->data() : null;
			?>
			
			<div class="box-menu">
			<form method= "post">
				<p>
				<label for="name">nome de usuário:</label>
				<input type="text" id="username" name="username" class="input_text" value="<?=$post?$post['username']:''?>">
				</p>

				<p>
				<label for="senha">senha:</label>
				<input type="password" id="password" name="password" class="input_text" value="<?=$post?$post['password']:''?>">
				</p>

				<center>
				<input type="image" src="/estaticos/img/fazer_login.jpg" value="fazer_login">
				<label><a href="#">esqueceu sua senha?</a></label>
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
			

