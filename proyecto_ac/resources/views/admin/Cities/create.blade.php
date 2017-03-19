@extends('admin.template.main')


@section('content')
	{!!Form::open(['route'=>'cities.store','method','POST'])!!}
	
	<div class="form-group">
		{!!Form::label('city','Ciudad') !!}
		{!!Form::text ('city',null,['class'=>'form-control','placeholder'=>'Ciudad','requiered'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('zipCode','Codigo postal') !!}
		{!! Form::text('zipCode',null, ['class'=>'form-control', 'placeholder'=>' Codigo postal', 'requiered']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('fkProvince','Provincia') !!}
		{!! Form::select('fkProvince', $provinces,null,['class'=>'form-control', 'placeholder'=>'Selecionar provincia', 'requiered']) !!} 
	</div>

	<br>
	<div class="form-group">
		{!! Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	</div>

	{!!Form::close()!!}
@endsection