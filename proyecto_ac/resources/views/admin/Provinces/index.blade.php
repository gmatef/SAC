@extends('admin.template.main')

@section('content')
	<a href="{{route('provinces.create')}}" class="btn btn-info">Nuevo </a>
	<hr>
	<table class="table">
		<thead>
			<th>ID</th>
			<th>PROVINCIA</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($provinces as $province)
				<tr>
					<td>{{$province->id}}</td>
					<td>{{$province->province}}</td>
					<td>
						<a href="{{route('provinces.edit',$province->id)}}" class= "btn btn-warning">
							<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
						</a>
						<a href="{{route('admin.provinces.destroy',$province->id)}}" onclick="return confirm('Desea eliminar la provincia?')" class= "btn btn-danger">
							<span class="glyphicon glyphicon-remove-circle" aria-hidden></span>
						</a>	
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $provinces->render()!!}
@endsection