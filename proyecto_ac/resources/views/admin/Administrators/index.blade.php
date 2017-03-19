@extends('admin.template.main')

@section('content')
	<a href="{{route('administrators.create')}}" class="btn btn-info">Nuevo </a>
	<hr>
	<table class="table">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Razon social</th>
			<th>Registro</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($administrators as $administrator)
				<tr>
					<td>{{$administrator->id}}</td>
					<td>{{$administrator->fkPerson}}</td>
					<td>{{$administrator->fkPerson}}</td>
					<td>{{$administrator->businessName}}</td>
					<td>{{$administrator->numberRegister}}</td>
					<td>
						<a href="{{route('administrators.edit',$administrator->id)}}" class= "btn btn-warning">
							<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
						</a>
						<a href="{{route('admin.administrators.destroy',$administrator->id)}}" onclick="return confirm('Desea eliminar el administrador?')" class= "btn btn-danger">
							<span class="glyphicon glyphicon-remove-circle" aria-hidden></span>
						</a>	
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $administrators->render()!!}
@endsection