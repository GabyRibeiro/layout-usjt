<?php
	$urlcanonical ="/paciente-agendamento.php";
	$sessao = "paciente-logado";
	include 'heads.php';
	?>
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
	<div class="badge">
		Atenção, você já faltou a XX consultas
	</div>
	<div class="container pt-3 pb-3">
		<div class="heading-section heading-section-white wow fadeIn  text-center">
			<h2 class="mb-4">Olá, Fulano</h2>
			<span class="subheading">Seus agendamentos</span>
		</div>
	</div>
</section>
<section class="ftco-section ftco-no-pt" id="">
	<div class="container-fluid mt-5" id="">
		<div id='paciente-agendamentos'></div>
	</div>
</section>
<?php include 'footer.php';?>
