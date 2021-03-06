<?php
	$urlcanonical ="/paciente-agendamento.php";
	$sessao = "paciente-logado";
	include 'heads.php';
	?>
	<div class="modal"  id="avaliar" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Por favor deixe seu feedback sobre a consulta</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">
					<p>De 0 a 5 estrela, como você avalia a consulta?</p>
					<div class="rating d-flex align-items-center justify-content-center"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label></div>
					 
						<p>Comentários:</p>
						<textarea class="form-control" name="name" rows="5" cols="60"></textarea> <br>
					<button type="submit" class="btn btn-secondary closeActual">Avaliar</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal">Não, obrigado</button>

			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
	<div class="badge">
		Atenção, você já faltou a XX consultas
	</div>
	<div class="container pt-3 pb-3">
		<div class="heading-section heading-section-white wow fadeIn  text-center">
			<h2 class="mb-4">Olá, Fulano</h2>
			<span class="subheading">Suas consultas realizadas</span>
		</div>
	</div>
</section>
<section class="ftco-section ftco-no-pt" id="">
	<div class="container-fluid mt-5" id="">
		<div class="row text-center">
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="box">

					<div class="especialidade mt-2">
						Neurologista
					</div>
					<div class="nome-doutor">
						Dr. Juliana
					</div>
					<div class="data-hora">
						00:00 <br>
						00/00/0000
					</div>
					<div class="endereco mt-3">
						<span class="icon-map"></span> Rua XXXXXXXXXX, <br> XX, XXXXX - XX, XX
					</div>
					<!-- Botao de avaliar -->
					<a href="#" data-toggle="modal" data-target="#avaliar" class="btn btn-secondary px-4 mt-4"><span class="icon-star-full"></span> Avaliar</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="box">

					<div class="especialidade mt-2">
						Neurologista
					</div>
					<div class="nome-doutor">
						Dr. Juliana
					</div>
					<div class="data-hora">
						00:00 <br>
						00/00/0000
					</div>
					<div class="endereco mt-3">
						<span class="icon-map"></span> Rua XXXXXXXXXX, <br> XX, XXXXX - XX, XX
					</div>
					<!-- Botao de avaliar -->
					<a href="#" data-toggle="modal" data-target="#avaliar" class="btn btn-secondary px-4 mt-4"><span class="icon-star-full"></span> Avaliar</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="box">

					<div class="especialidade mt-2">
						Neurologista
					</div>
					<div class="nome-doutor">
						Dr. Juliana
					</div>
					<div class="data-hora">
						00:00 <br>
						00/00/0000
					</div>
					<div class="endereco mt-3">
						<span class="icon-map"></span> Rua XXXXXXXXXX, <br> XX, XXXXX - XX, XX
					</div>
					<!-- Botao de avaliar -->
					<a href="#" data-toggle="modal" data-target="#avaliar" class="btn btn-secondary px-4 mt-4"><span class="icon-star-full"></span> Avaliar</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="box">

					<div class="especialidade mt-2">
						Neurologista
					</div>
					<div class="nome-doutor">
						Dr. Juliana
					</div>
					<div class="data-hora">
						00:00 <br>
						00/00/0000
					</div>
					<div class="endereco mt-3">
						<span class="icon-map"></span> Rua XXXXXXXXXX, <br> XX, XXXXX - XX, XX
					</div>
					<!-- Botao de avaliar -->
					<a href="#" data-toggle="modal" data-target="#avaliar" class="btn btn-secondary px-4 mt-4"><span class="icon-star-full"></span> Avaliar</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'footer.php';?>
