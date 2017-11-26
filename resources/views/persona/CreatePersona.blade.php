
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
		          	<input id="first_name" type="number" name="documento" class="validate">
		          	<label for="Document">Documento</label>
		     	</div>
			</div>

			<div class="row">
	        	<div class="input-field col s6">
					<i class="material-icons prefix">contacts</i>
		          	<input id="name" type="text" name="nombre" class="validate">
		          	<label for="Name">Nombre</label>
	        	</div>
	     	 </div>

	     	<h4>fecha de nacimiento</h4>
	      	<div class="row">
	        	<div class="input-field col s6">
					<i class="material-icons prefix">contacts</i>
		          	<input id="fecha_nacimiento" type="date" name="fecha_nacimiento" class="validate">
		          	<label for=""></label>
	        	</div>
	     	 </div>

			<div class="row">
	        	<div class="input-field col s6">
					<i class="material-icons prefix">contacts</i>
	          		<input id="Municipio de nacimiento" type="text" name="municipio_nacimiento" class="validate">
	          		<label for="Municipio de nacimiento">Municipio de nacimiento</label>
	        	</div>
	      	</div>

	      	<div class="row">
	        	<div class="input-field col s6">
					<i class="material-icons prefix">contacts</i>
	          		<input id="Tipo" type="text" name="tipo" class="validate">
	          		<label for="Tipo">Tipo</label>
	        	</div>
	      	</div>

		  	<div class="row">
	        	<div class="input-field col s6">
					<i class="material-icons prefix">contacts</i>
	          		<input id="GrupoSanguineo" type="text" name="grupo_sanguineo" class="validate">
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
		          	<input id="nombre_institucion" type="text" name="nombre_institucion" class="validate">
		          	<label for="Institución">Institución</label>
		        </div>
			</div>

			<div class="row">
				<div>fecha de inicio</div>
			        <div class="input-field col s6">
					<i class="material-icons prefix">school</i>
			        <input id="fecha_inicio" type="date" name="año_inicio" class="validate">
			    </div>
		    </div>

		    <div class="row">
				<div>fecha fin</div>
		        	<div class="input-field col s6">
					<i class="material-icons prefix">school</i>
		          	<input id="fecha_fin" type="date" name="año_terminacion" class="validate">
	      		</div>
	      	</div>

			<div class="row">
		        <div class="input-field col s6">
					<i class="material-icons prefix">school</i>
		          	<input id="Titulo" type="text" name="titulo_obtenido" class="validate">
		          	<label for="Título">Título</label>
		        </div>
			</div>

			<div class="row">
		        <div class="input-field col s6">
					<i class="material-icons prefix">school</i>
		          	<input id="Tipo" type="text" name="tipo" class="validate">
		          	<label for="Tipo">Tipo</label>
		        </div>
		    </div>

			<center>
				<h3>Información financiera</h3>
			</center>

			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">attach_money</i>
					<input id="Empresa" type="text" name="empresa" class="validate">
					<label for="Empresa">Empresa</label>
				</div>
			</div>

			<div class="row">
					<div class="input-field col s6">
						<i class="material-icons prefix">attach_money</i>
						<input id="Salario" type="number" name="salario" class="validate">
						<label for="Salario">Salario</label>
					</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">attach_money</i>
					<input id="tipo_empleo" type="text" name="tipo_empleo" class="validate">
					<label for="Tipo de empleo">Tipo de empleo</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">attach_money</i>
					<input id="Entidad_Bancaria" type="text" name="entidades_bancarias" class="validate">
					<label for="Entidad Bancaria">Entidad bancaria</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">attach_money</i>
					<input id="Prestamo_vivienda" type="text" name="prestamo_vivienda" class="validate">
					<label for="Prestamo de vivenda">Prestamo de vivenda</label>
				</div>
			</div>
			<center>
				<h3>Información familiar</h3>
			</center>

			<h3>Vínculo 1:</h3>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">contacts</i>
					<input id="DocumetoPadre" type="number" name="documento" class="validate">
					<label for="Documento">Documento</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">contacts</i>
					<input id="tipo_vinculo" type="text" name="tipo_vinculo" class="validate">
					<label for="Tipo de vínculo">Tipo de vínculo</label>
				</div>
			</div>

			<h3>Vínculo 2:</h3>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">contacts</i>
					<input id="DocumetoMadre" type="number" name="documento" class="validate">
					<label for="Documento">Documento</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">contacts</i>
					<input id="tipo_vinculo" type="text" name="tipo_vinculo" class="validate">
					<label for="Tipo de vínculo">Tipo de vínculo</label>
				</div>
			</div>

			<h3>Vínculo 3:</h3>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">contacts</i>
					<input id="DocumetoHermano" type="number" name="documento" class="validate">
					<label for="Documento">Documento</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">contacts</i>
					<input id="tipo_vinculo" type="text" name="tipo_vinculo" class="validate">
					<label for="Tipo de vínculos">Tipo de vínculo</label>
				</div>
			</div>

			<h3>Vínculo 4:</h3>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">contacts</i>
					<input id="DocumetoHermana" type="number" name="documento" class="validate">
					<label for="Documento">Documento</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">contacts</i>
					<input id="tipo_vinculo" type="text" name="tipo_vinculo" class="validate">
					<label for="Tipo de vínculo">Tipo de vínculo</label>
				</div>
			</div>

			<h3>Vínculo 5:</h3>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">contacts</i>
					<input id="DocumetoHijo" type="number" name="documento" class="validate">
					<label for="Documento">Documento</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">contacts</i>
					<input id="tipo_vinculo" type="text" name="tipo_vinculo" class="validate">
					<label for="Tipo de vínculo">Tipo de vínculo</label>
				</div>
			</div>

			<h3>Vínculo 5:</h3>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">contacts</i>
					<input id="DocumetoHija" type="number" name="documento" class="validate">
					<label for="Documento">Documento</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">contacts</i>
					<input id="tipo_vinculo" type="text" name="tipo_vinculo" class="validate">
					<label for="Tipo de vínculo">Tipo de vínculo</label>
				</div>
			</div>
			<div class="col s6 offset-s6">
					<button class="btn waves-effect waves-light" type="submit" name="action">Registar
						<i class="material-icons right">send</i>
					</button>
			</div>
		</form>
		<div class="row">
			<div class="col s6"><h3>Regresar</h3></div>
	      	<div class="col s6"><h3>Obtener ubicación</h3></div>
      	</div>
		<div class="row">
			<form action="{{url('/')}}">
				<div class="col s6">
					<button class="btn waves-effect waves-light" type="submit" name="action">Regresar al inicio
						<i class="material-icons right">forward_5</i>
					</button>
				</div>
			</form>
		</div>
	</body>
<html>
