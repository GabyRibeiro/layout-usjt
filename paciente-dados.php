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
						<span class="subheading">Paciente</span>
						<h2 class="mb-4">Alterar dados</h2>
						<p>Campos com (*) são obrigatórios</p>
					</div>
					<form action="#" method="POST" id="form_alterar_paciente" class="appointment-form wow fadeIn">
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<input type="file" class="form-control" placeholder="Selecione sua foto*" id="paciente_alterar_img" name="paciente_alterar_img"  onchange="loadFile2(event)">
									<span class="error error-message"></span>
								</div>
							</div>

							<div class="col-md-4">
								<img id="preview2"/>
							</div>
						</div>

						<div class="d-md-flex">


							<div class="form-group">
								<input type="text" class="form-control apenas-letra" placeholder="Nome completo*" id="paciente_alterar_nome" name="paciente_alterar_nome">
								<span class="error error-message"></span>
							</div>

							<div class="form-group ml-md-4">
								<div class="form-field">
									<div class="select-wrap">
										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
										<select id="paciente_alterar_convenio" name="paciente_alterar_convenio" class="form-control">
											<option value="">Convenio*</option>
											<option value="x">x</option>
											<option value="y">y</option>
											<option value="z">z</option>
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
										<select  id="paciente_alterar_sexo" name="paciente_alterar_sexo" class="form-control">
											<option value="">Sexo*</option>
											<option value="fem">Feminino</option>
											<option value="masc">Masculino</option>
										</select>
										<span class="error error-message"></span>
									</div>
								</div>
							</div>
							<div class="form-group ml-md-4">
								<div class="input-wrap">
									<div class="icon"><span class="ion-md-calendar"></span></div>
									<input type="text" class="form-control appointment_date apenas-numeros" placeholder="Data de nascimento*"  id="paciente_alterar_dtNasc" name="paciente_alterar_dtNasc">
									<span class="error error-message"></span>
								</div>
							</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control formato-telefone" placeholder="Telefone*" id="paciente_alterar_tel" name="paciente_alterar_tel">
								<span class="error error-message"></span>
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<input type="text" class="form-control formato-cep" placeholder="CEP*" id="paciente_alterar_cep" name="paciente_alterar_cep">
								<span class="error error-message"></span>
							</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control" placeholder="Endereço*" id="paciente_alterar_endereco" name="paciente_alterar_endereco">
								<span class="error error-message"></span>
							</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control" placeholder="Bairro*" id="paciente_alterar_bairro" name="paciente_alterar_bairro">
								<span class="error error-message"></span>
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<input type="text" class="form-control apenas-letra" placeholder="Cidade*" id="paciente_alterar_cidade" name="paciente_alterar_cidade">
								<span class="error error-message"></span>
							</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control apenas-letra" placeholder="Estado*" id="paciente_alterar_uf" name="paciente_alterar_uf">
								<span class="error error-message"></span>
							</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control" placeholder="Número*" id="paciente_alterar_numero" name="paciente_alterar_numero">
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
