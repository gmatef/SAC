@extends('admin.template.main')

@section('content')

	{!! Form::open(['route'=>['permissions.update',$permission],'method'=>'PUT']) !!}

		<div class="form-group">
			{!!Form::label('description','Permiso')!!}
			{!!Form::text('description', $permission->description, ['class'=>'form-control', 'placeholder'=>'Permiso', 'requiered'])!!}
		</div>

		<div class="form-group">
			{!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
		</div>

	{!! Form::close() !!}
@endsection