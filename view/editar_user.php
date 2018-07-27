<div class="row">
	<div class="col s12">
		<div class="card grey lighten-4">
            <div class="card-content ">
              <span class="card-title flow-text"><h3>Edição de usuário</h3></span>
              <p class="grey-text">Aqui você poderá editar o e-mail, senha e nome de seu usuário. Também poderá excluí-lo!</p>
            <br>
            <hr class="hr-light">	
            	<div class="row">
            		<div class="col s12">

            			<form action='' method="post">

	            			<div class="input-field col s12 m6 l4">
	            				<input type="text" id='nome' name="nome" value="<?php echo $nome; ?>">
	            				<label for="nome">Nome:</label>
	            			</div>

	            			<div class="input-field col s12 m6 l8">
	            				<input type="text" id='email' name="email" value="<?php echo $email; ?>">
	            				<label for="email">Email:</label>
	            			</div>

	            			<div class="input-field col s12 m6">
	            				<input type="password" id="nova_senha" name="nova_senha">
	            				<label for="nova_senha">Nova senha</label>
	            			</div>

	            			<div class="input-field col s12 m3 offset-m3">
	            				<input type='submit' value='salvar' name='botao' class="btn red lighten-2">
	            			</div>

	            			<div class="input-field col s12">
	            				<hr class="hr-light">
	            				<input type='submit' value="excluir" class="btn red" name='botao'>
	            			</div>

	            		</form>

            		</div>
            		
            	</div>
            </div>
            
          </div>
	</div>
</div>
<?php echo isset($msg)?$msg:""; ?>