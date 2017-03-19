@extends('admin.template.main')


@section('content')
	{!!Form::open(['route'=>'permissions.store','method','POST'])!!}
	<div class="form-gorup">
		{!!Form::label('description','Permiso')!!}
		{!!Form::text ('description',null,['class'=>'form-control','placeholder'=>'Permiso','requiered'])!!}
	</div>
	<br>
	<div class="form-group">
		{!! Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	</div>

	{!!Form::close()!!}
@endsection