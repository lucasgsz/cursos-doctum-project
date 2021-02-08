<?php 
$cursos;
$link = mysqli_connect("127.0.0.1", "admin", "123456", "doctum_project_bd");
$teste = "SELECT * FROM usuario";
$rs =mysqli_query($link, $teste);
$cursos = $link->query($teste);
?>
<head>
	<title>Faça seu Login</title>
	<link rel="stylesheet" type="text/css" href="css/style-login.css">
</head>
<body>
	<?php 
		include "cabecalho.php";
	?>
	<form>
		<p>Login - Admin</p>
		<div>
			<label>Usuario</label>
			<input name="usuario" type="text" placeholder="Insira seu usuario:">
		</div>
		<div>
			<label>Senha</label>
			<input name="senha" type="text" placeholder="Insira sua senha:">
		</div>
		<button>Entrar</button>
	</form>
</body>