@extends('materialize')
@section('contenido')

<html>
<head>
	<title>Datos de la residencia</title>
</head>
<body>
    	<table border="8">
      <div>
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
    			<th>#residentes</th>
          <th>#habitantes</th>
    	  </tr>
      </div>
      <div>
        @foreach($residencia as $r)
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
      		    <td>{{$r->type}}</td>
              <td>{{$r->numero_residentes}}</td>
      		    <td>{{$r->hab}}</td>
            </tr>
        @endforeach
      </div>

    	</table>
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