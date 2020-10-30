<?php
	$urlcanonical ="/orcamento.php";
	$sessao = "logado";
	include 'heads.php';
	?>
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter imgmb-5 mb-5" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
	<div class="container pt-5 pb-3">
		<div class="heading-section heading-section-white wow fadeIn mb-5 text-center">
			<h2 class="mb-4">Olá, Fulano</h2>
			<span class="subheading">Seus agendamentos</span>
		</div>
	</div>
</section>
<section class="ftco-section ftco-no-pt " id="resultados-paciente">
	<div class="container-fluid mt-5" id="resultados-paciente-agendamento">
		<h5>Instruções</h5>
		<div id='paciente-meus-agendamentos'></div>
	</div>
</section>
<?php include 'footer.php';?>
