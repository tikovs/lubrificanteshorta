		
		
					
					<div class="tab-content mobile-spacing-10"
			id="contactFormsContainer">
			<div class="inner-slide-pane">
				<div class="slide-pane">
					<form method="post" name="form_contato" action="enviar_email.php">
						
						<div class="controls controls-row row">
							<div class="span3 control-group">
								<label for="name" class="control-label">Nome <span class="green">*</span></label>
								<input id="name" name="name" type="text" class="span3" value=""
									required>
							</div>
							<div class="span3 control-group">
								<label for="email" class="control-label">E-mail <span
									class="grey"></span> <span class="green">*</span></label> <input
									id="email" name="email" type="email" class="span3"
									placeholder="email@exemplo.com" value="" required>
							</div>
							<div class="span3 control-group">
								<label for="telefone" class="control-label">Telefone <span
									class="grey"></span></label> <input id="telefone"
									name="telefone" type="tel" class="span3" value="" required
									placeholder="3134624820">
							</div>
						</div>
						<div class="controls control-group">
							<label for="message" class="control-label">Sua mensagem <span
								class="green">*</span></label>
							<textarea id="message" name="message" class="span9" rows="8"
								required></textarea>
						</div>

						<div class="controls">
							<button id="contact-submit-2" type="submit"
								class="btn btn-green pull-left move-9">Enviar</button>
						</div>
						</br></br></br>
					</form>
				</div>

			</div>
			<!-- end row -->
		</div>
	</div>
</div>
<!-- /container -->
<?php include("rodape.php"); ?>