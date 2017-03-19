@extends('admin.template.main')

@section('content')
	<a href="{{route('cities.create')}}" class="btn btn-info">Nuevo </a>
	<hr>
	<table class="table">
		<thead>
			<th>Ciudad</th>
			<th>PROVINCIA</th>
			<th>Codigo postal</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($cities as $city)
				<tr>
					<td>{{$city->city}}</td>
					<td>{{$city->fkProvince}}</td>
					<td>{{$city->zipCode}}</td>
					<td>
						<a href="{{route('cities.edit',$city->id)}}" class= "btn btn-warning">
							<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
						</a>
						<a href="{{route('admin.cities.destroy',$city->id)}}" onclick="return confirm('Desea eliminar la ciudad?')" class= "btn btn-danger">
							<span class="glyphicon glyphicon-remove-circle" aria-hidden></span>
						</a>	
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $cities->render()!!}
@endsection