@extends('admin.template.main')

@section('content')
	<a href="{{route('typePeople.create')}}" class="btn btn-info">Nuevo </a>
	<hr>
	<table class="table">
		<thead>
			<th>ID</th>
			<th>Tipo</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($typePeople as $tp)
				<tr>
					<td>{{$tp->id}}</td>
					<td>{{$tp->description}}</td>
					<td>
						<a href="{{route('typePeople.edit',$tp->id)}}" class= "btn btn-warning">
							<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
						</a>
						<a href="{{route('admin.typePeople.destroy',$tp->id)}}" onclick="return confirm('Desea eliminar el tipo?')" class= "btn btn-danger">
							<span class="glyphicon glyphicon-remove-circle" aria-hidden></span>
						</a>	
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $typePeople->render()!!}
@endsection