<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>USJT</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta property="locale" content="pt-BR" />
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/aos.css">
		<link rel="stylesheet" href="css/bootstrap-datepicker.css">
		<link rel="stylesheet" href="css/jquery.timepicker.css">
		<link rel="stylesheet" href="css/icomoon.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/custom.css">
	</head>
	<body>
		<div class="modal"  id="esqueci_senha" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>Confirme sua identidade</p>

            <form action="#" method="POST" id="form_esqueci">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">#</span>
                </div>
                <input type="text" id="esqueci_cpf" name="esqueci_cpf" class="form-control formato cpf" placeholder="CPF*" aria-label="Email" aria-describedby="basic-addon1">
                <span class="error error-message"></span>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">#</span>
                </div>
                <input type="text" id="esqueci_dtNasc" name="esqueci_dtNasc" class="form-control appointment_date" placeholder="Data de nascimento*" aria-label="Data" aria-describedby="basic-addon1">
                <span class="error error-message"></span>
              </div>
            </form>

					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Validar</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				</button>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active"><a href="#home" class="nav-link pl-0">Home</a></li>
						<li class="nav-item"><a href="#doutores" class="nav-link">Doutores</a></li>
						<li class="nav-item"><a href="#section-counter" class="nav-link show-doutor">Trabalhe Conosco</a></li>
					</ul>
				</div>
				<div class=" d-flex align-items-center mb-0">
					<div class="dropdown">
						<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Login
						</a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item" href="#section-counter" id="show_loginPaciente">Paciente</a>
							<a class="dropdown-item" href="#section-counter" id="show_loginDoutor">Doutor</a>
						</div>
					</div>
					<a href="#section-counter" class="btn btn-secondary ml-3 py-2 px-3 show-paciente">Marque sua consulta</a>
				</div>
			</div>
		</nav>
		<!-- END nav -->
