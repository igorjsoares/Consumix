<?php

//echo "index";
require_once 'vendor/autoload.php';


//Iniciando a sessão
session_start();

$usuario = new \App\Model\Usuario();
$usuariosDao = new \App\Model\usuariosDao();


if(isset($_GET['tipo']) && $_GET['tipo'] == 'deslogar'){
	$_SESSION['painellogado'] == false;
	session_destroy();
}

//Clicou no botao
if(isset($_POST['btn-entrar'])):

	$usuario->setEmail($_POST['email']);
	$usuario->setSenha($_POST['senha']);

    $resultado = $usuariosDao->logar($usuario);
    
var_dump($resultado);

	if($resultado != 0 AND $resultado[0]['status'] == '1'):

		$_SESSION['painellogado'] = true;
		$_SESSION['id_usuario'] = $resultado[0]['id_usuario'];
		$_SESSION['nome'] = $resultado[0]['nome'];
		$_SESSION['email'] = $resultado[0]['email'];
		$_SESSION['perfil'] = $resultado[0]['perfil'];
		unset($_SESSION['alert_tipo']);

		header('Location: painel/index.php');

	else:
		$_SESSION['painellogado'] = false;
		$_SESSION['alert_menssagem'] = "Não foi possível realizar o login, confira o usuário e senha.";
		$_SESSION['alert_titulo'] = "OPS!";
		$_SESSION['alert_tipo'] = "danger";

		header('Location: index.php');
	endif;
endif

?>
<!DOCTYPE html>
<!-- saved from url=(0054)https://getbootstrap.com.br/docs/4.1/examples/sign-in/ -->
<html lang="pt-br">

<?php
include 'head.php';
?>

<body class="hold-transition login-page">

	<div class="login-box">
		<div class="login-logo">
			<a href="../../index2.html"><b>Consu</b>MIX</a>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

					<div class="input-group mb-3">
						<input type="email" class="form-control" placeholder="Seu email" required="true" autofocus="true">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>

					<div class="input-group mb-3">
						<input type="password" class="form-control" placeholder="Senha">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>

					<div class="col-12">
						<button type="submit" class="btn btn-primary btn-block" name="btn-entrar">ENTRAR</button>
					</div>

			</div>
			</form>

			<div style="margin-left: 20px; margin-botton:20px;">
				<p class="mb-1">
					<a href="cadastro.php">Fazer cadastro</a>
				</p>
				<p class="mb-0">
					<a href="senha.php" class="text-center">Esqueci a senha</a>
				</p>
			</div>
			<!-- <p class="mt-5 mb-3 text-muted">© by Igor Soares - v3 - 2019-2020</p> -->

		</div>
		<!-- /.login-card-body -->
	</div>



	<?php
		if(isset($_SESSION['alert_tipo'])):
			?>
	<!--
			<div class="alert alert-<?=$_SESSION['alert_tipo']?> hidden" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong><?=$_SESSION['alert_titulo']?></strong> - <?=$_SESSION['alert_menssagem'];?>
			</div>
            -->
	<?php
      		//unset($_SESSION['alert_tipo']);
		endif;
		?>
	</div>
	<!-- /.login-box -->
	<!-- jQuery 3 -->
	<script src="painel/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="painel/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<script type="text/javascript" DEFER="DEFER">
		//FUNÇAO DE EXECUTA UM ALERT ASSIM QUE A PAGINA E CARREGADA
function posCarregamento() {
	$(".alert").fadeTo(1, 1).removeClass('hidden');
	window.setTimeout(function() {
		$(".alert").fadeTo(500, 0).slideUp(500, function(){
			$(".alert").addClass('hidden');
		});
	}, 1000);

}

// Chamada da função
posCarregamento();
	</script>




</body>

</html>