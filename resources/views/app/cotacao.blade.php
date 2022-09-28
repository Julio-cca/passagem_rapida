<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cotação</title>

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
						<li class="list-group-item active"><a href="{{route('app.cotacao')}}">Cotações</a></li>
						<li class="list-group-item"><a href="{{route('app.usuario')}}">Usuarios</a></li>						
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Cotações pendentes</h4>
								<hr />
								<form method="post" action="{{ route('app.exibir.cotacao')}}">
									@csrf
									<span> <input type="text" name="nome" placeholder="Nome"> </span>
									<span> <input type="text" name="email" placeholder="Email"> </span>
									<span> <input type="text" name="telefone" placeholder="Telefone"> </span>
									<span> <input type="text" name="partida" placeholder="Partida"> </span>
									<span> <input type="text" name="destino" placeholder="Destino"> </span>
									<span> <input type="text" name="qtdpassageiros" placeholder="Quantidade de Passageiros"> </span>
									<div>
										<button class="btn btn-success mt-2">Pesquisar</button>
									</div>
								</form>								
							</div>
						</div>
					</div>
					@isset($cotacao)
					<div class="container pagina">						
						<table border 1px >
							<thead>
								<tr>
									<th>Nome</th>
									<th>Email</th>
									<th>Telefone</th>
									<th>Partida</th>
									<th>Destino</th>
									<th>Passageiros</th>
									<th>Atendimento</th>
									@if($_SESSION['permissao'] == 1)
										<th>Exluir</th>
									@endif
								</tr>
							</thead>
							<tbody>								
								@foreach ($cotacao as $cota)
									<tr>
										<td> {{$cota->nome}} </td>
										<td> {{$cota->email}} </td>
										<td> {{$cota->telefone}} </td>
										<td> {{$cota->partida}} </td>
										<td> {{$cota->destino}} </td>
										<td> {{$cota->qtdpassageiros}} </td>
										@if($cota->estado == 1)
											<td><a href="{{route('app.atendimento', ['id' => $cota->id])}}" class="btn btn-success">Atendido</a></td>
										@else
											<td>Atendido</td>
										@endif
										@if($_SESSION['permissao'] == 1)
											<td><a href="{{route('app.Excluir.cotacao', ['cotacao' => $cota->id])}}" class="btn btn-danger">Excluir</a></td>
										@endif
										
									</tr>
								@endforeach							
							</tbody>
						</table>						
					</div>
					@endisset
				</div>
			</div>
		</div>
	</body>
</html>