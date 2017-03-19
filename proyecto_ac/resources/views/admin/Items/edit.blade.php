@extends('admin.template.main')

@section('content')

	{!! Form::open(['route'=>['items.update',$item],'method'=>'PUT']) !!}

		<div class="form-group">
			{!!Form::label('description','Rubro')!!}
			{!!Form::text('description', $item->description, ['class'=>'form-control', 'requiered'])!!}
		</div>

		<div class="form-group">
			{!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
		</div>

	{!! Form::close() !!}
@endsection