@extends('admin.template.main')

@section('content')
	<a href="{{route('permissions.create')}}" class="btn btn-info">Nuevo </a>
	<hr>
	<table class="table">
		<thead>
			<th>ID</th>
			<th>PERMISO</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($permissions as $permission)
				<tr>
					<td>{{$permission->id}}</td>
					<td>{{$permission->description}}</td>
					<td>
						<a href="{{route('permissions.edit',$permission->id)}}" class= "btn btn-warning">
							<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
						</a>
						<a href="{{route('admin.permissions.destroy',$permission->id)}}" onclick="return confirm('Desea eliminar el permiso?')" class= "btn btn-danger">
							<span class="glyphicon glyphicon-remove-circle" aria-hidden></span>
						</a>	
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $permissions->render()!!}
@endsection