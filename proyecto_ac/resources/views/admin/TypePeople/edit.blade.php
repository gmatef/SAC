@extends('admin.template.main')

@section('content')
	{!! Form::open(['route'=>['typePeople.update',$typePerson],'method'=>'PUT']) !!}
	
		<div class="form-group"> 
			{!! Form::label('description','Descripcion') !!}
			{!! Form::text('description', $typePerson->description, ['class'=>'form-control', 'placeholder'=>'Descripcion', 'requiered']) !!}
		</div>

		<div class="form-group">
			{!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
		</div>
		
	{!! Form::close() !!}
@endsection