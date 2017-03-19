@extends('admin.template.main')


@section('content')
	{!!Form::open(['route'=>'items.store','method','POST'])!!}
	<div class="form-gorup">
		{!!Form::label('description','Rubro')!!}
		{!!Form::text ('description',null,['class'=>'form-control','requiered'])!!}
	</div>
	<br>
	<div class="form-group">
		{!! Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	</div>

	{!!Form::close()!!}
@endsection