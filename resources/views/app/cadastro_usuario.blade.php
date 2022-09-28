<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cadastro-Usuario</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="{{route('app.home')}}">
					<img src="img/logo.png" width="40" height="30" class="d-inline-block align-top" alt="">
					Passagem Rapida
				</a>
			</div>
			<div>
				<a href="{{route('site.sair')}}" class="btn btn-dark"> Sair</a>
			</div>
		</nav>

		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
                        <li class="list-group-item "><a href="{{route('app.home')}}">Home</a></li>
						<li class="list-group-item"><a href="{{route('app.cotacao')}}">Cotações</a></li>
						<li class="list-group-item active"><a href="{{route('app.usuario')}}">Usuarios</a></li>						
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Usuarios</h4>
								<hr />
								@include('layouts._components.form_usuario')								
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</body>
</html>