<?php
	$urlcanonical ="/doutor-agenda.php";
	$sessao = "doutor-logado";
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
				<p>Tem certeza que deseja disponibilizar essa agenda? O não aparecimento resultará em .....</p>
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
					Horários adicionados a sua agenda! <br> O não aparecimento resultará em .....
				</p>
				<a class="btn btn-secondary closeActual" href="doutor.php">Meus agendamentos</a>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
	<div class="container pt-5 pb-3">
		<div class="heading-section heading-section-white wow fadeIn mb-5 text-center">
			<h2 class="mb-4">Olá, Dr.</h2>
			<span class="subheading">
			<b>Ultimo acesso as xx:xx</b>
			</span>
			<br>
			<span class="subheading">Bem-vindo a Área do Profissional, onde você poderá ver suas consultas agendadas, e agendar novas consultas.
			Todo nosso relacionamento poderá ser feito de maneira fácil e rápida por aqui. <br><br>
			Para cadastrar seus horários selecione abaixo a localidade. <br><br>
			</span>
			<!-- Formulario de localidade -->
			<form action="#" method="POST" id="form_localidade" name="form_localidade">
				<div class="localidade">
					<div class="row mx-auto">
						<div class="col-lg-9 col-md-9">
							<div class="form-group">
								<div class="form-field">
									<div class="select-wrap">
										<select id="doutor_localidade" name="doutor_localidade" class="form-control">
											<option value="">Localidade*</option>
											<option value="x">x</option>
											<option value="y">y</option>
											<option value="z">z</option>
										</select>
										<span class="error error-message"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 mr-auto justify-content-center align-items-center d-flex">
							<div class="text-left">
								<button type="submit" class="btn btn-secondary btn-block px-4" style="width: 200px;" name="button">Acessar</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<form action="#" method="POST" id="form_agendar_doutor" name="form_agendar_doutor" class="appointment-form">

				<div class="hidden dados-agendamento">
					<br><br>
					<div class="row">
						<div class="col-lg-6 col-md-6 mx-auto">
							<div class="form-group">
								<div class="input-wrap">
									<div class="icon"><span class="ion-md-calendar"></span></div>
									<input type="text" class="form-control appointment_date apenas-numeros" placeholder="Data*"  id="agendar_doutor_dtConsulta" name="agendar_doutor_dtConsulta">
									<span class="error error-message"></span>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 mx-auto">
							<div class="form-group">
								<select id="agendar_horario_doutor" name="agendar_horario_doutor" multiple="multiple">
									<option value="1">08:00</option>
									<option value="2">09:00</option>
									<option value="3">10:00</option>
									<option value="4">11:00</option>
									<option value="5">12:00</option>
									<option value="6">13:00</option>
									<option value="6">14:00</option>
									<option value="6">15:00</option>
									<option value="6">16:00</option>
									<option value="6">17:00</option>
									<option value="6">18:00</option>
								</select>
								<span class="error error-message"></span>
							</div>
						</div>
					</div>
					<div class="text-center">
						<button type="submit" name="button" class="btn btn-secondary px-4 buscar">Agendar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<?php include 'footer.php';?>
