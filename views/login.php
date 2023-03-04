<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body >
<div class="container">	
	<div class="row justify-content-center pt-5 mt-5 mr-1">
		<div class="col-md-4 formulario">
			<form action="" method="post" >
			<div class="form-group text-center">
				<h1 class="text-light">Login</h1>
			</div>
			<div class=" mx-sm-4">
				<input type="email" class="form-control" id="correo"placeholder="Ingrese su usuario">
			</div>
			<div class=" mx-sm-4 pb-3">
				<input type="password" class="form-control "id="contra" placeholder="Ingrese su Contraseña">
			</div>
			<div class="  mx-sm-4 pb-3 ">
				<input type="sumbit" class="btn btn-block  " id="enviar" value="Iniciar sesion">
			</div>
			<div class="  mx-sm-4 pb-3 ">
			<a href="?view=signup"  type="sumbit color=white" class="btn btn-block "  value="Registrarse"></a>
			</div>

</body>
</html>
<script type="text/javascript" src="./scripts/login.js?v1.0.0"></script>