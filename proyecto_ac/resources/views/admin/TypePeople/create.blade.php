@extends('admin.template.main')

@section('content')
{!! Form::open(['route'=>'typePeople.store','method'=>'POST'])!!}

	<div class="form-group">
		{!!Form::label('description','Descripcion')!!}
		{!!Form::text('description',null,['class'=>'form-control','requiered'])!!}
	</div>

	<br>
	<div class="form-group">
		{!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
	</div>

{!! Form::close() !!}
@endsection
