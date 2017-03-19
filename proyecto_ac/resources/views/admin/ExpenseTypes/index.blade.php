@extends('admin.template.main')

@section('content')
	<a href="{{route('expensetypes.create')}}" class="btn btn-info">Nuevo </a>
	<hr>
	<table class="table">
		<thead>
			<th>ID</th>
			<th>Tipo</th>
		</thead>
		<tbody>
			@foreach($types as $type)
				<tr>
					<td>{{$type->id}}</td>
					<td>{{$type->description}}</td>
					<td>
						<a href="#" class= "btn btn-warning">
							<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
						</a>
						<a href="#" onclick="return confirm('Desea eliminar el tipo de gasto?')" class= "btn btn-danger">
							<span class="glyphicon glyphicon-remove-circle" aria-hidden></span>
						</a>	
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>	
	{!! $types->render()!!}
@endsection