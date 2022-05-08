<!doctype html>
<html lang="en">
  <head>
  	<title>Tabla</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">MERCEDES</h2><a class="btn" href='{{route('add.carros')}}'>--- Agregar ---</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-dark">
							  <tr>
						      <th>ID</th>
						      <th>Nombre</th>
						      <th>Modelo</th>
							  <th>Color</th>
							  <th>Precio</th>
							  <th>Imagen</th>
							  <th>Mercedes</th>
							  <th>Funciones</th>
						    </tr>
						  </thead>

						  <tbody>
							@foreach($crudd as $arreglocrud)
						    <tr class="alert" role="alert">
						      {{-- <th scope="row"></th> --}}
						      <td>{{$arreglocrud->id}}</td>
						      <td>{{$arreglocrud->Nombre}}</td>
						      <td>{{$arreglocrud->Modelo}}</td>
						      <td>{{$arreglocrud->Color}}</td>
						      <td>{{$arreglocrud->Precio}}</td>
						      <td>{{$arreglocrud->Imagen}}</td>
						      <td>{{$arreglocrud->Mercedes}}</td>
						      <td>
								<a href='{{route('ver.actualizar', $arreglocrud->id)}}'  class="btn"> Actualizar
								</a>
								<a href='{{route('eliminar.carros', $arreglocrud->id)}}' class="btn"> Eliminar
								</a>
				        	</td>
						    </tr>
							@endforeach
						  </tbody>
						  

						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

