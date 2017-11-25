@extends('materialize')
@section('contenido')

	<table class="centered">
    <tr>
			<th>_id</th>
			<th>direccion</th>
			<th>barrio</th>
      		<th>municipio</th>
			<th>estrato</th>
			<th>tipo</th>
      		<th>codigo</th>
			<th>coordenadas-Longitude</th>
		    <th>coordenadas-Latitude</th>
			<th>numero_residentes</th>
      		<th>hab</th>
	</tr>


  @foreach($residencia as $r)
      <tr>
        <td>{{$r->_id}}</td>
        <td>{{$r->direccion}}</td>
        <td>{{$r->barrio}}</td>
        <td>{{$r->municipio}}</td>
        <td>{{$r->estrato}}</td>
        <td>{{$r->tipo}}</td>
        <td>{{$r->codigo}}</td>
        <td>{{$r->coordinates[0]}}</td>
        <td>{{$r->coordinates[1]}}</td>
		<td>{{$r->type}}</td>
        <td>{{$r->numero_residentes}}</td>
		<td>{{$r->hab[0]}}</td>
      </tr>
  @endforeach


	</table>

	<div class="row">
		<div class="input-field col s6">
			<a href="{{route('residencia.create')}}">
				<button class="btn waves-effect waves-light" type="submit" name="action">Nuevo
					<i class="material-icons right">cloud</i>
				</button>
			</a>
		</div>
		<div class="input-field col s6">
			<a href="{{url('/')}}">
				<button class="btn waves-effect waves-light" type="submit" name="action">Regresar al inicio
					<i class="material-icons right">forward_5</i>
				</button>
			</a>
		</div>
	</div>
@stop
