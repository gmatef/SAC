@extends('admin.template.main')

@section('content')

	{!! Form::open(['route'=>['provinces.update',$province],'method'=>'PUT']) !!}

		<div class="form-group">
			{!!Form::label('province','Nombre')!!}
			{!!Form::text('province', $province->province, ['class'=>'form-control', 'placeholder'=>'Nombre de la provincia', 'requiered'])!!}
		</div>

		<div class="form-group">
			{!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
		</div>

	{!! Form::close() !!}
@endsection