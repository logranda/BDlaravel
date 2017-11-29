@extends('materialize')
@section('contenido')

<!DOCTYPE html>
<html>
<head>
	<title>Elegir residencia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<form action="Residencia" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<div class="input-field col s6">
				<select name="codigo" style="width:170px" class="form-control">
					<option value="" disabled selected>Elige la residencia</option>
		   			@foreach($residencia as $res)
				   		<option value="{{$res->codigo}}">{{$res->codigo}}</option>				   			
				   		</td>
		    		@endforeach
				</select>
				<br>
				<input class="btn waves-effect waves-light" type="submit" value="enviar"> 
			</div>
		</div>
	</form>

	<div class="input-field col s6">
		<a href="{{url('/')}}">
			<button class="btn waves-effect waves-light" type="submit" name="action">Regresar al inicio
				<i class="material-icons right">forward_5</i>
			</button>
		</a>
	</div>
</body>
</html>