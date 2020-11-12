<?php
	$urlcanonical ="/paciente.php";
	$sessao = "paciente-logado";
	include 'heads.php';
	?>
<div class="modal"  id="confirmar_agendamento" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tem certeza?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Tem certeza que deseja agendar essa consulta? O não aparecimento resultará em .....</p>
				<button type="submit" class="btn btn-secondary closeActual"  data-toggle="modal" data-target="#confirmado_agendamento" >Agendar</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
			</div>
		</div>
	</div>
</div>
<div class="modal"  id="confirmado_agendamento" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Consulta agendada!</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>
					Sua contulta foi agendada! <br> O não aparecimento resultará em .....
				</p>
				<a class="btn btn-secondary closeActual" href="paciente-agendamentos.php">Meus agendamentos</a>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter imgmb-5 mb-5" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
	<div class="badge">
		Atenção, você tem uma consulta agendada próxima em: XX/XX/XX as XX:XX
	</div>
	<div class="container pt-5 pb-3">

		<div class="heading-section heading-section-white wow fadeIn mb-5 text-center">
			<h2 class="mb-4">Olá, Fulano</h2>
			<span class="subheading">Bem-vindo a Área do Paciente, onde você poderá ver seus agendamentos, histórico, e agendar novas consultas.
			Todo nosso relacionamento poderá ser feito de maneira fácil e rápida por aqui.</span>
		</div>
		<!-- Formulario de busca -->
		<form action="#" method="POST" id="form_busca_paciente" name="form_busca_paciente" class="appointment-form">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="form-group">
						<div class="form-field">
							<div class="select-wrap">
								<select id="busca_especialidade" name="busca_especialidade" class="form-control">
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
							<input type="text" class="form-control appointment_date apenas-numeros" placeholder="Data desejada*"  id="busca_dtConsulta" name="busca_dtConsulta">
							<span class="error error-message"></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="form-group">
						<div class="input-wrap">
							<div class="icon"><span class="ion-ios-clock"></span></div>
							<input type="text" class="form-control appointment_time" placeholder="Horário desejado*" id="busca_horario_paciente" name="busca_horario_paciente">
							<span class="error error-message"></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="form-group">
						<div class="form-field">
							<div class="select-wrap">
								<select id="busca_ordenacao_paciente" name="busca_ordenacao_paciente" class="form-control">
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
				<button type="submit" name="button" class="btn btn-secondary px-4 buscar">Buscar <i class="icon-search"></i></button>
			</div>
		</form>
	</div>
</section>
<section class="ftco-section ftco-no-pt " id="resultados-paciente">
	<div class="container-fluid wow animated fadeIn" id="resultados-paciente-busca" style="display: none;">
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
							<a href="#" data-toggle="modal" data-target="#confirmar_agendamento" class="btn btn-secondary px-4 mt-4 agendar">Agendar</a>
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
							<a href="#" data-toggle="modal" data-target="#confirmar_agendamento" class="btn btn-secondary px-4 mt-4 agendar">Agendar</a>
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
							<a href="#" data-toggle="modal" data-target="#confirmar_agendamento" class="btn btn-secondary px-4 mt-4 agendar">Agendar</a>
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
		<h5>Instruções xxxxxxxxxxxxxxxxxxxxx</h5>
	</div>
</section>
<?php include 'footer.php';?>
