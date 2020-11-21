<?php
	$urlcanonical ="/paciente-dados.php";
	$sessao = "paciente-logado";
	include 'heads.php';
	?>


	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter imgmb-5" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="container" id="">
			<div class="row">
				<div class="col-md-12 py-5 pr-md-5">
					<div class="heading-section heading-section-white wow fadeIn mb-5">
						<span class="subheading">Doutor</span>
						<h2 class="mb-4">Alterar dados</h2>
						<p>Campos com (*) são obrigatórios</p>
					</div>
					<form action="#" method="POST" id="form_doutor" class="appointment-form wow fadeIn">
						<div class="d-md-flex">
							<div class="form-group">
								<input type="text" class="form-control apenas-letra" placeholder="Nome completo*" id="doutor_alterar_nome" name="doutor_alterar_nome">
								<span class="error error-message"></span>
							</div>

							<div class="form-group ml-md-4">
								<div class="form-field">
									<div class="select-wrap">
										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
										<select  id="doutor_alterar_especialidade" name="doutor_alterar_especialidade" class="form-control">
											<option value="">Especialidade Médica*</option>
										</select>
										<span class="error error-message"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<div class="form-field">
									<div class="select-wrap">
										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
										<select id="doutor_alterar_sexo" name="doutor_alterar_sexo" class="form-control">
											<option value="">Sexo*</option>
											<option value="fem">Feminino</option>
											<option value="masc">Masculino</option>
										</select>
										<span class="error error-message"></span>
									</div>
								</div>
							</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control" placeholder="CRM/CRO*" id="doutor_alterar_doc" name="doutor_alterar_doc">
								<span class="error error-message"></span>
							</div>
							<div class="form-group ml-md-4">
								<div class="input-wrap">
									<div class="icon"><span class="ion-md-calendar"></span></div>
									<input type="text" class="form-control appointment_date" placeholder="Data de nascimento*" id="doutor_alterar_dtNasc" name="doutor_alterar_dtNasc">
									<span class="error error-message"></span>
								</div>
							</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control format-telefone" placeholder="Telefone*" id="doutor_alterar_tel" name="doutor_alterar_tel">
								<span class="error error-message"></span>
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<input type="text" class="form-control formato-cep" placeholder="CEP*" id="doutor_alterar_cep" name="doutor_alterar_cep">
								<span class="error error-message"></span>
							</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control" placeholder="Endereço*" id="doutor_alterar_endereco" name="doutor_alterar_endereco">
								<span class="error error-message"></span>
							</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control" placeholder="Bairro*" id="doutor_alterar_bairro" name="doutor_alterar_bairro">
								<span class="error error-message"></span>
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Cidade*" id="doutor_alterar_cidade" name="doutor_alterar_cidade">
								<span class="error error-message"></span>
							</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control" placeholder="Estado*" id="doutor_alterar_uf" name="doutor_alterar_uf">
								<span class="error error-message"></span>
							</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control apenas-numeros" placeholder="Número*" id="doutor_alterar_numero" name="doutor_alterar_numero">
								<span class="error error-message"></span>
							</div>
						</div>
						<div class="d-md-flex col-md-5 ml-auto">
							<div class="form-group ml-md-4">
								<input type="submit" value="Alterar" class="btn btn-secondary py-3 px-4">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>


<?php include 'footer.php';?>
