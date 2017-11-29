@extends('materialize')
@section('contenido')
<!DOCTYPE html>
<html>
<head>
	<title>Datos de la persona</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div>
		<h2>Datos de la persona</h2>          
		<table class="table table-bordered">
			<thead>
		        <tr>
		    		<td>_id</td>
		    		<td>documento</td>
		    		<td>nombre</td>
		            <td>municipio</td>
		    	    <td>fecha de nacimiento</td>
		    		<td>grupo sanguíneo</td>
		            <td>código de la residencia</td>
		          	<td>nombre de la institución</td>
		    		<td>año de inicio</td>
		    		<td>año de finalización</td>
		    		<td>título obtenido</td>
		    		<td>típo</td>
		    		<td>empresa</td>
		    		<td>salario</td>
		    		<td>típo de empleo</td>
		    		<td>entidad bancaria</td>
		    		<td>préstamo de vivienda</td>
		    		<td>documento del padre</td>
		          	<td>tipo vínculo</td>
		          	<td>documento de la madre</td>
		          	<td>tipo vínculo</td>
		          	<td>documento del hermano</td>
		          	<td>tipo vínculo</td>
		          	<td>documento de la hermana</td>
		          	<td>tipo vínculo</td>
		          	<td>documento del hijo</td>
		          	<td>tipo vínculo</td>
		          	<td>documento de la hija</td>
		          	<td>tipo vínculo</td>
		    	 </tr>
	     	</thead>  
	     	<tbody>
		        
	            <tr>
	              <td>{{$p->_id}}</td>
	              <td>{{$p->documento}}</td>
	              <td>{{$p->nombre}}</td>
	              <td>{{$p->municipio_nacimiento}}</td>
	              <td>{{$p->fecha_nacimiento}}</td>
	              <td>{{$p->grupo_sanguineo}}</td>
	              <td>{{$p->codigo_residencia}}</td>
	              <td>{{$p->educacion['nombre_institucion']}}</td>
	              <td>{{$p->educacion['año_inicio']}}</td>
	              <td>{{$p->educacion['año_terminacion']}}</td>
	              <td>{{$p->educacion['titulo_obtenido']}}</td>
	              <td>{{$p->educacion['tipo']}}</td>
	              <td>{{$p->financiera['empresa']}}</td>
	              <td>{{$p->financiera['salario']}}</td>
	              <td>{{$p->financiera['tipo_empleo']}}</td>
	              <td>{{$p->financiera['entidades_bancarias']}}</td>
	              <td>{{$p->financiera['prestamo_vivienda']}}</td>
	              <td>{{$p->nucleo_familiar['padre']['documento']}}</td>
	              <td>{{$p->nucleo_familiar['padre']['tipo_vinculo']}}</td>
	              <td>{{$p->nucleo_familiar['madre']['documento']}}</td>
	              <td>{{$p->nucleo_familiar['madre']['tipo_vinculo']}}</td>
	              <td>{{$p->nucleo_familiar['hermano']['documento']}}</td>
	              <td>{{$p->nucleo_familiar['hermano']['tipo_vinculo']}}</td>
	              <td>{{$p->nucleo_familiar['hermana']['documento']}}</td>
	              <td>{{$p->nucleo_familiar['hermana']['tipo_vinculo']}}</td>
	              <td>{{$p->nucleo_familiar['hijo']['documento']}}</td>
	              <td>{{$p->nucleo_familiar['hijo']['tipo_vinculo']}}</td>
	              <td>{{$p->nucleo_familiar['hija']['documento']}}</td>
	              <td>{{$p->nucleo_familiar['hija']['tipo_vinculo']}}</td>
	            </tr>
		        
	        </tbody>  
		</table>
	</div>

	<div>
		<h2>Datos de la residencia donde habita</h2>          
		<table class="table table-bordered">
		    <thead>
		        <tr>
		    		<th>_id</th>
		    		<th>direccion</th>
		    		<th>barrio</th>
		            <th>municipio</th>
		    	    <th>estrato</th>
		    		<th>tipo</th>
		            <th>codigo</th>
		          	<th>type</th>
		    		<th>Latitude</th>
		    		<th>Longitude</th>
		          	<th>habitantes</th>
		    	  </tr>
		    </thead>
		    
			<tbody>
		        <tr>
		          <td>{{$r->_id}}</td>
		          <td>{{$r->direccion}}</td>
		          <td>{{$r->barrio}}</td>
		          <td>{{$r->municipio}}</td>
		          <td>{{$r->estrato}}</td>
		          <td>{{$r->tipo}}</td>
		          <td>{{$r->codigo}}</td>
		          <td>{{$r->location['type']}}</td>
		          <td>{{$r->location['coordinates']['latitude']}}</td>
		          <td>{{$r->location['coordinates']['longitude']}}</td>
		          <td>{{$r->numero_residentes}}</td>
		    	</tr>
		    </tbody>
		</table>
	</div>

	
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		        <script type="text/javascript">
			            
		                if (navigator.geolocation) {
		                navigator.geolocation.getCurrentPosition(function (p) {
		                    var LatLng = new google.maps.LatLng({{$r->location['coordinates']['latitude']}}, {{$r->location['coordinates']['longitude']}});
		                    var mapOptions = {
		                        center: LatLng,
		                        zoom: 13,
                        	mapTypeId: google.maps.MapTypeId.ROADMAP
                    	};
                    	var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
                    	var marker = new google.maps.Marker({
                        	position: LatLng,
                        	map: map,
                        	title: "<div style = 'height:60px;widtd:200px'><b>Your location:</b><br />	Latitude: " + p.coords.latitude + "<br />Longitude: " + p.coords.		longitude
	                    });
                    	google.maps.event.addListener(marker, "click", function (e) {
                        	var infoWindow = new google.maps.InfoWindow();
                        	infoWindow.setContent(marker.title);
                        	infoWindow.open(map, marker);
                		});
            		});
            		} else {
                		alert('Geo Location feature is not supported in tdis browser.');
            		}
	        		
				</script>
	<div id="dvMap" style="widtd: 800px; height: 800px"></div>
	
	<div class="row">
		<div class="input-field col s6">
			<a href="{{url('/')}}">
				<button class="btn waves-effect waves-light" type="submit" name="action">Regresar al inicio
					<i class="material-icons right">forward_5</i>
				</button>
			</a>
		</div>
	</div>
	
</body>
</html>

