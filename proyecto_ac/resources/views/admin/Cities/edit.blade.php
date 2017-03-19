@extends('admin.template.main')


@section('content')
	{!!Form::open(['route'=>['cities.update',$city],'method'=>'PUT'])!!}
	
	<div class="form-group">
		{!!Form::label('city','Ciudad') !!}
		{!!Form::text ('city',$city->city,['class'=>'form-control','placeholder'=>'Ciudad','requiered'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('zipCode','Codigo postal') !!}
		{!! Form::text('zipCode',$city->zipCode, ['class'=>'form-control', 'placeholder'=>' Codigo postal', 'requiered']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('fkProvince','Provincia') !!}
		{!! Form::select('fkProvince', $city->provinces,['class'=>'form-control', 'placeholder'=>'Selecionar provincia', 'requiered']) !!} 
	</div>
	
	<br>
	<div class="form-group">
		{!! Form::submit('Mofificar',['class'=>'btn btn-primary'])!!}
	</div>

	{!!Form::close()!!}
@endsection