<?php
	$urlcanonical ="/orcamento.php";
	$sessao = "logado";
	include 'heads.php';
	?>
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter imgmb-5 mb-5" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
	<div class="container pt-5 pb-3">
		<div class="heading-section heading-section-white wow fadeIn mb-5 text-center">
			<h2 class="mb-4">Olá, Fulano</h2>
			<span class="subheading">Bem-vindo a Área do Paciente, onde você poderá ver seus agendamentos, histórico e resultados de exames.
			Todo nosso relacionamento poderá ser feito de maneira fácil e rápida por aqui.</span>
		</div>
		<form action="#" method="POST" id="form_busca" class="appointment-form">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="form-group">
						<div class="form-field">
							<div class="select-wrap">
								<select id="busca_medico" name="busca_medico" class="form-control">
									<option value="">Especialidade*</option>
									<option value="x">x</option>
									<option value="y">y</option>
									<option value="z">z</option>
								</select>
								<span class="error error-message"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="form-group">
						<div class="input-wrap">
							<div class="icon"><span class="ion-md-calendar"></span></div>
							<input type="text" class="form-control appointment_date apenas-numeros" placeholder="Data desejada*"  id="paciente_dtNasc" name="paciente_dtNasc">
							<span class="error error-message"></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="form-group">
						<div class="input-wrap">
							<div class="icon"><span class="ion-ios-clock"></span></div>
							<input type="text" class="form-control appointment_time" placeholder="Horário*">
						</div>
						<span class="error error-message"></span>
					</div>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="form-group">
						<div class="form-field">
							<div class="select-wrap">
								<select id="busca_medico" name="busca_medico" class="form-control">
									<option value="">Ordenar por*</option>
									<option value="x">Perto de mim</option>
									<option value="y">Preço</option>
									<option value="z">Avaliação</option>
								</select>
								<span class="error error-message"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center">
				<a href="#" class="btn btn-secondary px-4 buscar">Buscar <i class="icon-search"></i></a>
			</div>
		</form>
	</div>
</section>
<section class="ftco-section ftco-no-pt " id="resultados-paciente">
	<div class="container-fluid" id="resultados-paciente-busca" style="display: none;">
		<h5 class="text-center mb-5">xx Resultados</h5>
		<div class="row">
			<div class="col-lg-7 col-md-7">
				<div class="row text-center">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="box">
							<div class="icon">
								<img src="images/icon.png" class="img-fluid" alt="">
							</div>
							<div class="especialidade mt-2">
								Neurologista
							</div>
							<div class="nome-doutor">
								Dr. Juliana
							</div>
							<div class="endereco mt-3">
								<span class="icon-map"></span> Rua XXXXXXXXXX, <br> XX, XXXXX - XX, XX
							</div>

							<!-- Botao de agendar -->
							<a href="#" data-toggle="modal" data-target="#agendamento_paciente" class="btn btn-secondary px-4 mt-4 agendar">Agendar</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="box">
							<div class="icon">
								<img src="images/icon.png" class="img-fluid" alt="">
							</div>
							<div class="especialidade mt-2">
								Neurologista
							</div>
							<div class="nome-doutor">
								Dr. Juliana
							</div>
							<div class="endereco mt-3">
								<span class="icon-map"></span> Rua XXXXXXXXXX, <br> XX, XXXXX - XX, XX
							</div>
							<a href="#" data-toggle="modal" data-target="#agendamento_paciente" class="btn btn-secondary px-4 mt-4 agendar">Agendar</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="box">
							<div class="icon">
								<img src="images/icon.png" class="img-fluid" alt="">
							</div>
							<div class="especialidade mt-2">
								Neurologista
							</div>
							<div class="nome-doutor">
								Dr. Juliana
							</div>
							<div class="endereco mt-3">
								<span class="icon-map"></span> Rua XXXXXXXXXX, <br> XX, XXXXX - XX, XX
							</div>
							<a href="#" data-toggle="modal" data-target="#agendamento_paciente" class="btn btn-secondary px-4 mt-4 agendar">Agendar</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-5">
				Mapa
			</div>
		</div>
	</div>
	<div class="container-fluid hidden mt-5" id="resultados-paciente-agendamento">
		<h5>Instruções</h5>
		<div id='paciente-agendar'></div>
	</div>
</section>
<?php include 'footer.php';?>
