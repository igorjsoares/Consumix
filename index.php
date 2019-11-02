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
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="https://getbootstrap.com.br/favicon.ico">

	<title>Autovip Digital</title>

	<!-- Principal CSS do Bootstrap -->
	<link href="bootstrap_files/bootstrap.min.css" rel="stylesheet">

	<!-- Para os simbolos utilizados no Materialize -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Estilos customizados para esse template -->
	<link href="bootstrap_files/signin.css" rel="stylesheet">
	<script type="text/javascript" src="chrome-extension://aggiiclaiamajehmlfpkjmlbadmkledi/popup.js" async=""></script><script type="text/javascript" src="chrome-extension://aggiiclaiamajehmlfpkjmlbadmkledi/tat_popup.js" async=""></script></head>

	<body class="text-center" cz-shortcut-listen="true">

		<form class="form-signin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<i style="font-size: 5em; color: #b388ff" class="large material-icons">fingerprint</i>
			<h1 class="h3 mb-3 font-weight-normal text-monospace">AutoVip digital</h1>
			<label for="inputEmail" class="sr-only">Endereço de email</label>
			<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Seu email" required="true" autofocus="true">
			<label for="inputPassword" class="sr-only">Senha</label>
			<input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required="">
			<div class="">
				<!--
				<div class="checkbox mb-3">
					<label>
						<input type="checkbox" value="remember-me"> Lembrar de mim
					</label>
				</div>
			-->
			<button class="btn btn-lg btn-primary mb-3 btn-block" type="submit" name="btn-entrar">Login</button>
			<a href="cadastro.php">Fazer cadastro</a><br>
			<a href="senha.php">Esqueci a senha</a>
			<p class="mt-5 mb-3 text-muted">© by Igor Soares - v3 - 2019-2020</p>
		</form>
		<?php
		if(isset($_SESSION['alert_tipo'])):
			?>
			<div class="alert alert-<?=$_SESSION['alert_tipo']?> hidden" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong><?=$_SESSION['alert_titulo']?></strong> - <?=$_SESSION['alert_menssagem'];?>
			</div>
			<?php
      		//unset($_SESSION['alert_tipo']);
		endif;
		?>

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
