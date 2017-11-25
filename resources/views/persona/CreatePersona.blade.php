
@section('contenido')
<html>
	<head>
		<title>Registro</title>
	</head>
	<body>
    <div class = "card-panel teal lighten-2"><h3>Bienvenido al censo de Colombia, por favor ingrese los datos</h3></div>
	<form action="{{route('persona.store')}}" method="POST">
		<center>
			<h3>Información de la persona</h3>
		</center>
		{{ csrf_field() }}
      	<div class="row">
	        <div class="input-field col s6">
				<i class="material-icons prefix">contacts</i>
	          	<input id="first_name" type="number" class="validate">
	          	<label for="Document">Documento</label>
	     	</div>
		</div>

		<div class="row">
        	<div class="input-field col s6">
				<i class="material-icons prefix">contacts</i>
	          	<input id="name" type="text" class="validate">
	          	<label for="Name">Nombre</label>
        	</div>
     	 </div>

     	<h4>fecha de nacimiento</h4>
      	<div class="row">
        	<div class="input-field col s6">
				<i class="material-icons prefix">contacts</i>
	          	<input id="fecha_nacimiento" type="date" class="validate">
	          	<label for=""></label>
        	</div>
     	 </div>

		<div class="row">
        	<div class="input-field col s6">
				<i class="material-icons prefix">contacts</i>
          		<input id="Municipio de nacimiento" type="text" class="validate">
          		<label for="Municipio de nacimiento">Municipio de nacimiento</label>
        	</div>
      	</div>

	  	<div class="row">
        	<div class="input-field col s6">
				<i class="material-icons prefix">contacts</i>
          		<input id="GrupoSanguineo" type="text" class="validate">
          		<label for="GrupoSanguineo">Grupo sanguíneo</label>
      		</div>
		</div>

		<center>
			<h3>Información de la residencia</h3>
		</center>

		<div class="form-group">
			<label for="">Residencia</label>
        	<div class="input-field col s6">
				<select name="codigo" id="codigo" class="form-control">
				   <option value="">Elige la residencia</option>
				   @foreach($residencia as $res)
				   		<option value="{{$res->codigo}}">{{$res->codigo}}</option>
				   @endforeach
				</select>
			</div>
		</div>

		<center>
			<h3>Información institucional</h3>
		</center>

	    <div class="row">
	        <div class="input-field col s6">
				<i class="material-icons prefix">school</i>
	          	<input id="nombre_institucion" type="text" class="validate">
	          	<label for="Institución">Institución</label>
	        </div>
		</div>

		<div class="row">
			<div>fecha de inicio</div>
		        <div class="input-field col s6">
				<i class="material-icons prefix">school</i>
		        <input id="fecha_inicio" type="date" class="validate">
		    </div>
	    </div>

	    <div class="row">
			<div>fecha fin</div>
	        	<div class="input-field col s6">
				<i class="material-icons prefix">school</i>
	          	<input id="fecha_fin" type="date" class="validate">
      		</div>
      	</div>

		<div class="row">
	        <div class="input-field col s6">
				<i class="material-icons prefix">school</i>
	          	<input id="Titulo" type="text" class="validate">
	          	<label for="Título">Título</label>
	        </div>
		</div>

		<div class="row">
	        <div class="input-field col s6">
				<i class="material-icons prefix">school</i>
	          	<input id="Tipo" type="text" class="validate">
	          	<label for="Tipo">Tipo</label>
	        </div>
	    </div>

		<center>
			<h3>Información financiera</h3>
		</center>

		<div class="row">
			<div class="input-field col s6">
				<i class="material-icons prefix">attach_money</i>
				<input id="Empresa" type="text" class="validate">
				<label for="Empresa">Empresa</label>
			</div>
		</div>

		<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">attach_money</i>
					<input id="Salario" type="number" class="validate">
					<label for="Salario">Salario</label>
				</div>
		</div>

		<div class="row">
			<div class="input-field col s6">
				<i class="material-icons prefix">attach_money</i>
				<input id="tipo_empleo" type="text" class="validate">
				<label for="Tipo de empleo">Tipo de empleo</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s6">
				<i class="material-icons prefix">attach_money</i>
				<input id="Entidad_Bancaria" type="text" class="validate">
				<label for="Entidad Bancaria">Entidad bancaria</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s6">
				<i class="material-icons prefix">attach_money</i>
				<input id="Prestamo_vivienda" type="text" class="validate">
				<label for="Prestamo de vivenda">Prestamo de vivenda</label>
			</div>
		</div>
		<center>
			<h3>Información familiar</h3>
		</center>
		<div class="row">
			<div class="input-field col s6">
				<i class="material-icons prefix">contacts</i>
				<input id="Documeto" type="number" class="validate">
				<label for="Documento">Documento</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
				<i class="material-icons prefix">contacts</i>
				<input id="tipo_vinculo" type="text" class="validate">
				<label for="Tipo de vínculo">Tipo de vínculo</label>
			</div>
		</div>
	</form>

	<a href="https://www.youtube.com/watch?v=WM8bTdBs-cw" class="waves-effect waves-light btn"><i class="material-icons left">send</i>Registrar</a>
	</body>
<html>
