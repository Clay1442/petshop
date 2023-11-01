<!DOCTYPE html>
<html lang="pt-br">

<head>
<?php
		include 'parts/header.php';
	?>

<body>
<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Faça seu registro</h1>
							<p class="lead">
								Preencha os formularios a seguir para criar sua conta.
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form>
										<div class="mb-3">
											<label class="form-label">Nome completo</label>
											<input class="form-control form-control-lg" type="text" name="nome" placeholder="Coloque seu nome" requered autocomplete="off"/>
										</div>
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Coloque seu email" required autocomplete="off"/>
										</div>
										<div class="mb-3">
											<label class="form-label">Senha</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Coloque sua senha"   required autocomplete="off"/>
										</div>
										<div class="d-grid gap-2 mt-3">
											<a href="index.php" class="btn btn-lg btn-primary">Registre-se</a>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="text-center mb-3">
							Already have account? <a href="pages-sign-in.html">Log In</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>


	<script src="js/app.js"></script>

</body>

</html>