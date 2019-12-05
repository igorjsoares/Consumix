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
//var_dump($_POST);

	$usuario->setEmail($_POST['email']);
	$usuario->setSenha($_POST['senha']);

    $resultado = $usuariosDao->logar($usuario);
    
//var_dump($resultado);

	if($resultado != 0 AND $resultado[0]['status'] == '1'){

		$_SESSION['painellogado'] = true;
		$_SESSION['id_usuario'] = $resultado[0]['id_usuario'];
		$_SESSION['nome'] = $resultado[0]['nome'];
		$_SESSION['email'] = $resultado[0]['email'];
		$_SESSION['perfil'] = $resultado[0]['perfil'];
		unset($_SESSION['alert_text']);

		//header('Location: painel/index.php');

    }elseif($resultado != 0 AND $resultado[0]['status'] != '1'){
		$_SESSION['alert_text'] = "Este usuário está bloqueado. Entre em contato com o administrador do sistema.";

		header('Location: index.php');
    }else{
        $_SESSION['alert_text'] = "Algo errado com o e-mail ou senha.";

		header('Location: index.php');
    }
    
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
			<a href="../../index2.html"><b>consu</b>MIX</a>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

					<div class="input-group mb-3">
						<input type="email" class="form-control" placeholder="Seu email" name="email" required="true" autofocus="true">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>

					<div class="input-group mb-3">
						<input type="password" class="form-control" name="senha" placeholder="Senha">
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

			<div style="margin-left: 20px; margin-bottom: 20px;">
				<div class="mb-12 text-center">
					<a href="cadastro.php">Fazer cadastro</a>
				</div>
				<div class="mb-12 text-center">
					<a href="senha.php" class="text-center">Esqueci a senha</a>
				</div>
			</div>

		</div>
		<!-- /.login-card-body -->
	</div>

	<?php
		if(isset($_SESSION['alert_text'])):
			?>
	<script type="text/javascript">
        
		//console.log('Teste de console.');
        
        toastr.error(<?=$_SESSION['alert_text']?>, 'Ops!!!', {
            positionClass: "toast-top-center",
            preventDuplicates: true,
            showDuration: "300",
            hideDuration: "1000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
            timeOut: 3000
            })
	</script>

	<?php
        //unset($_SESSION['alert_tipo']);
		endif;
    ?>
	</div>
	<!-- /.login-box -->

	

	<script type="text/javascript" DEFER="DEFER">
        //FUNÇAO DE EXECUTA UM ALERT ASSIM QUE A PAGINA E CARREGADA
        
	</script>




</body>

</html>