@extends('materialize')
@section('contenido')

<!DOCTYPE html>
<html>
<head>
	<title>Datos de la residencia</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div>
		<h2>Datos de la residencia</h2>          
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
		          	<th>#habitantes</th>
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

	<h2>Ubicación</h2>          
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
                        	title: "<div style = 'height:60px;width:200px'><b>Your location:</b><br />	Latitude: " + p.coords.latitude + "<br />Longitude: " + p.coords.		longitude
	                    });
                    	google.maps.event.addListener(marker, "click", function (e) {
                        	var infoWindow = new google.maps.InfoWindow();
                        	infoWindow.setContent(marker.title);
                        	infoWindow.open(map, marker);
                		});
            		});
            		} else {
                		alert('Geo Location feature is not supported in this browser.');
            		}
	        		
				</script>
	<div id="dvMap" style="width: 800px; height: 800px"></div>
  	
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