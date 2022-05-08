<!doctype html>
<html lang="en">
  <head>
  	<title>Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="/css/style2.css">

  </head>
  <body>
    <form class="login-form" action="{{route('up.carros')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value='{{$crudd->id}}'>
        <h1>--- Actualizar Auto ---</h1>
        <div class="form">
        <input type="text" name="Nombre" placeholder="Nombre" autocomplete="off"  class="input"  value="{{$crudd->Nombre}}"/>
        </div>
        <div class="form">
            <input type="text" name="Modelo" placeholder="Modelo" autocomplete="off" class="input"  value="{{$crudd->Modelo}}"/>
        </div>
        <div class="form">
            <input type="text" name="Color" placeholder="Color" autocomplete="off" class="input"  value="{{$crudd->Color}}"/>
        </div>
        <div class="form">
            <input type="text" name="Precio" placeholder="Precio" autocomplete="off" class="input"  value="{{$crudd->Precio}}"/>
        </div>
        <div class="form">
            <input type="text" name="Imagen" placeholder="Imagen" autocomplete="off" class="input"  value="{{$crudd->Imagen}}"/>
        </div>
        <div class="form">
            <input type="text" name="Mercedes" placeholder="Mercedes" autocomplete="off" class="input"  value="{{$crudd->Mercedes}}"/>
        </div>
        <br>
        <br>
        <br>
        <button type="submit" class="btn">Actualizar</button>
    </form>

    <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>