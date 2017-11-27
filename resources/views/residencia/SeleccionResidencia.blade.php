@section('contenido')
<html>
	<head>
		<title>Seleccionar residencia</title>
	</head>
	<body>
		<form action="Residencia" method="POST">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="">Residencia</label>
				<div class="input-field col s6">
					<select name="codigo"  class="form-control">
			   			<option value="">Elige la residencia</option>
			   			@foreach($residencia as $res)
					   		<option value="{{$res->codigo}}">{{$res->codigo}}</option>				   			
					   		</td>
			    		@endforeach
					</select>
						
						<input type="submit" value="enviar"> 
						
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