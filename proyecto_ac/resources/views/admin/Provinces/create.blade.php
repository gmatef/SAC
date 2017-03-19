@extends('admin.template.main')


@section('content')
	{!!Form::open(['route'=>'provinces.store','method','POST'])!!}
	<div class="form-group">
		{!!Form::label('province','Provincia')!!}
		{!!Form::text('province',null,['class'=>'form-control','requiered'])!!}
	</div>
	<br>
	<div class="form-group">
		{!! Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	</div>

	{!!Form::close()!!}
@endsection