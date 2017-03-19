@extends('admin.template.main')

@section('content')
	<a href="{{route('items.create')}}" class="btn btn-info">Nuevo </a>
	<hr>
	<table class="table">
		<thead>
			<th>ID</th>
			<th>Rubro</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($items as $item)
				<tr>
					<td>{{$item->id}}</td>
					<td>{{$item->description}}</td>
					<td>
						<a href="{{route('items.edit',$item->id)}}" class= "btn btn-warning">
							<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
						</a>
						<a href="{{route('admin.items.destroy',$item->id)}}" onclick="return confirm('Desea eliminar el rubro?')" class= "btn btn-danger">
							<span class="glyphicon glyphicon-remove-circle" aria-hidden></span>
						</a>	
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $items->render()!!}
@endsection