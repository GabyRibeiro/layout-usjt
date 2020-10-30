<?php
	$urlcanonical ="";
	$sessao = "deslogado";
	include 'heads.php';
?>
		<section class="home-slider owl-carousel" id="home">
			<div class="slider-item" style="background-image:url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
						<div class="col-md-6 text wow fadeIn">
							<h1 class="mb-4">Ajudando você <span>A se manter bem</span></h1>
							<p><a href="#doutores" class="btn btn-secondary px-4 py-3 mt-3">Veja nossos profissionais</a>
								<a href="#section-counter" class="btn btn-secondary px-4 py-3 mt-3 show-paciente">Marque sua consulta</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="slider-item" style="background-image:url(images/bg_2.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
						<div class="col-md-6 text wow fadeIn">
							<h1 class="mb-4">Nós importamos<span>Com sua saúde</span></h1>
							<p><a href="#doutores" class="btn btn-secondary px-4 py-3 mt-3">Veja nossos profissionais</a>
								<a href="#section-counter" class="btn btn-secondary px-4 py-3 mt-3 show-paciente">Marque sua consulta</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter imgmb-5" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="container" id="formulario_paciente">
				<div class="row">
					<div class="col-md-12 py-5 pr-md-5">
						<div class="heading-section heading-section-white wow fadeIn mb-5">
							<span class="subheading">Cadastro de paciente</span>
							<h2 class="mb-4">Dados pessoais</h2>
							<p>Campos com (*) são obrigatórios</p>
						</div>
						<form action="#" method="POST" id="form_paciente" class="appointment-form wow fadeIn">
							<div class="d-md-flex">
								<div class="form-group">
									<input type="text" class="form-control apenas-letra" placeholder="Nome completo*" id="paciente_nome" name="paciente_nome">
									<span class="error error-message"></span>
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control formato-cpf" placeholder="CPF*"  id="paciente_cpf" name="paciente_cpf">
									<span class="error error-message"></span>
								</div>
								<div class="form-group ml-md-4">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="ion-ios-arrow-down"></span></div>
											<select id="paciente_convenio" name="paciente_convenio" class="form-control">
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
											<select  id="paciente_sexo" name="paciente_sexo" class="form-control">
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
										<input type="text" class="form-control appointment_date apenas-numeros" placeholder="Data de nascimento*"  id="paciente_dtNasc" name="paciente_dtNasc">
										<span class="error error-message"></span>
									</div>
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control formato-telefone" placeholder="Telefone*" id="paciente_tel" name="paciente_tel">
									<span class="error error-message"></span>
								</div>
							</div>
							<div class="d-md-flex">
								<div class="form-group">
									<input type="text" class="form-control formato-cep" placeholder="CEP*" id="paciente_cep" name="paciente_cep">
									<span class="error error-message"></span>
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control" placeholder="Endereço*" id="paciente_endereco" name="paciente_endereco">
									<span class="error error-message"></span>
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control" placeholder="Bairro*" id="paciente_bairro" name="paciente_bairro">
									<span class="error error-message"></span>
								</div>
							</div>
							<div class="d-md-flex">
								<div class="form-group">
									<input type="text" class="form-control apenas-letra" placeholder="Cidade*" id="paciente_cidade" name="paciente_cidade">
									<span class="error error-message"></span>
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control apenas-letra" placeholder="Estado*" id="paciente_uf" name="paciente_uf">
									<span class="error error-message"></span>
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control" placeholder="Número*" id="paciente_numero" name="paciente_numero">
									<span class="error error-message"></span>
								</div>
							</div>
							<div class="d-md-flex col-md-5 ml-auto">
								<div class="form-group ml-md-4">
									<input type="submit" value="Cadastrar" class="btn btn-secondary py-3 px-4">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="container" id="formulario_doutor" style="display: none;">
 				<div class="row">
					<div class="col-md-12 py-5 pr-md-5">
						<div class="heading-section heading-section-white wow fadeIn mb-5">
							<span class="subheading">Cadastro de Profissionais</span>
							<h2 class="mb-4">Dados pessoais</h2>
							<p>Campos com (*) são obrigatórios</p>
						</div>
						<form action="#" method="POST" id="form_doutor" class="appointment-form wow fadeIn">
							<div class="d-md-flex">
								<div class="form-group">
									<input type="text" class="form-control apenas-letra" placeholder="Nome completo*" id="doutor_nome" name="doutor_nome">
									<span class="error error-message"></span>
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control formato-cpf" placeholder="CPF*" id="doutor_cpf" name="doutor_cpf">
									<span class="error error-message"></span>
								</div>
								<div class="form-group ml-md-4">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="ion-ios-arrow-down"></span></div>
											<select  id="doutor_especialidade" name="doutor_especialidade" class="form-control">
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
											<select id="doutor_sexo" name="doutor_sexo" class="form-control">
												<option value="">Sexo*</option>
												<option value="fem">Feminino</option>
												<option value="masc">Masculino</option>
											</select>
											<span class="error error-message"></span>
										</div>
									</div>
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control" placeholder="CRM/CRO*" id="doutor_doc" name="doutor_doc">
									<span class="error error-message"></span>
								</div>
								<div class="form-group ml-md-4">
									<div class="input-wrap">
										<div class="icon"><span class="ion-md-calendar"></span></div>
										<input type="text" class="form-control appointment_date" placeholder="Data de nascimento*" id="doutor_dtNasc" name="doutor_dtNasc">
										<span class="error error-message"></span>
									</div>
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control format-telefone" placeholder="Telefone*" id="doutor_tel" name="doutor_tel">
									<span class="error error-message"></span>
								</div>
							</div>
							<div class="d-md-flex">
								<div class="form-group">
									<input type="text" class="form-control formato-cep" placeholder="CEP*" id="doutor_cep" name="doutor_cep">
									<span class="error error-message"></span>
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control" placeholder="Endereço*" id="doutor_endereco" name="doutor_endereco">
									<span class="error error-message"></span>
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control" placeholder="Bairro*" id="doutor_bairro" name="doutor_bairro">
									<span class="error error-message"></span>
								</div>
							</div>
							<div class="d-md-flex">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Cidade*" id="doutor_cidade" name="doutor_cidade">
									<span class="error error-message"></span>
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control" placeholder="Estado*" id="doutor_uf" name="doutor_uf">
									<span class="error error-message"></span>
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control apenas-numeros" placeholder="Número*" id="doutor_numero" name="doutor_numero">
									<span class="error error-message"></span>
								</div>
							</div>
							<div class="d-md-flex col-md-5 ml-auto">
								<div class="form-group ml-md-4">
									<input type="submit" value="Cadastrar" class="btn btn-secondary py-3 px-4">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="container" id="login_doutor" style="display: none;">
				<div class="row">
					<div class="col-md-12 py-5 pr-md-5">
						<div class="heading-section heading-section-white wow fadeIn mb-5">
							<span class="subheading">Login de Profissionais</span>
							<p>Campos com (*) são obrigatórios</p>
						</div>
						<form action="#" method="POST" id="form_loginDoutor" class="appointment-form wow fadeIn">
							<div class="d-md-flex">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="CPF*" id="doutor_loginDoc" name="doutor_loginDoc">
									<span class="error error-message"></span>
								</div>
								<div class="form-group ml-md-4">
									<input type="password" class="form-control" placeholder="Senha*" id="doutor_loginSenha" name="doutor_loginSenha">
									<span class="error error-message"></span>
								</div>
							</div>
							<div class="d-md-flex">
								<a href="#" class="text-white" data-toggle="modal" data-target="#esqueci_senha">Esqueci minha senha</a>
							</div>
							<div class="d-md-flex col-md-5 ml-auto">
								<div class="form-group ml-md-4">
									<input type="submit" value="Entrar" class="btn btn-secondary py-3 px-4">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="container" id="login_paciente" style="display: none;">
				<div class="row">
					<div class="col-md-12 py-5 pr-md-5">
						<div class="heading-section heading-section-white wow fadeIn mb-5">
							<span class="subheading">Login de paciente</span>
							<p>Campos com (*) são obrigatórios</p>
						</div>
						<form action="#" method="POST" id="form_loginPaciente" class="appointment-form wow fadeIn">
							<div class="d-md-flex">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="CPF*" id="paciente_loginCPF" name="paciente_loginCPF">
									<span class="error error-message"></span>
								</div>
								<div class="form-group ml-md-4">
									<input type="password" class="form-control" placeholder="Senha*" id="paciente_loginSenha" name="paciente_loginSenha">
									<span class="error error-message"></span>
								</div>
							</div>
							<div class="d-md-flex">
								<a href="#" class="text-white">Esqueci minha senha</a>
							</div>
							<div class="d-md-flex col-md-5 ml-auto">
								<div class="form-group ml-md-4">
									<input type="submit" value="Entrar" class="btn btn-secondary py-3 px-4">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<section class="ftco-section ftco-no-pt  mt-5 " id="doutores">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
					<div class="col-md-8 text-center heading-section wow fadeIn">
						<span class="subheading">Doutores</span>
						<h2 class="mb-4">Nossos profissionais qualificados</h2>
						<p>
							<a href="#section-counter" class="btn btn-secondary px-4 py-3 mt-3 show-doutor">Quero ser um doutor</a>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-3 wow fadeIn">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-1.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Dr. Lloyd Wilson</h3>
								<span class="position mb-2">Pediatra</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 wow fadeIn">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-2.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Dr. Rachel Parker</h3>
								<span class="position mb-2">Neurologista</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 wow fadeIn">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-3.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Dr. Ian Smith</h3>
								<span class="position mb-2">Dentista</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 wow fadeIn">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-4.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Dr. Alicia Henderson</h3>
								<span class="position mb-2">Ortodontista</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php include 'footer.php';?>
