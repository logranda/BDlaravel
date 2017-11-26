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
	</body>
</html>