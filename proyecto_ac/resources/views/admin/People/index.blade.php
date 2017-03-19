@extends('admin.template.main')

@section('content')
	<a href="{{route('people.create')}}" class="btn btn-info">Nuevo </a>
	<hr>
	<table class="table">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Documento</th>
			<th>CUIT/CUIL</th>
			<th>Direccion</th>
			<th>Ciudad</th>
			<th>Telefono</th>
			<th>Tipo</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($people as $person)
				<tr>
					<td>{{$person->id}}</td>
					<td>{{$person->firstName}}</td>
					<td>{{$person->lastName}}</td>
					<td>{{$person->paper}}</td>
					<td>{{$person->cuitCuil}}</td>
					<td>{{$person->address}}</td>
					<td>{{$person->fkCity}}</td>
					<td>{{$person->telephone}}</td>
					<td>{{$person->fkTypePerson}}</td>
					<td>
						<a href="{{route('people.edit',$person->id)}}" class= "btn btn-warning">
							<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
						</a>
						<a href="{{route('admin.people.destroy',$person->id)}}" onclick="return confirm('Desea eliminar la persona?')" class= "btn btn-danger">
							<span class="glyphicon glyphicon-remove-circle" aria-hidden></span>
						</a>	
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $people->render()!!}
@endsection