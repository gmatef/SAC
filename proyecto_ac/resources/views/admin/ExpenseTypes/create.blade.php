@extends('admin.template.main')

@section('content')
	{!! Form::open(['route'=>'expensetypes.store','method','POST']) !!}
	<div class="form-group">
		{!! Form::label('description','Tipo') !!}
		{!! Form::text('description',null,['class'=>'form-control','requiered']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Agregar',['class'=>'btn btn-primary']) !!}
	</div>
	{!! Form::close() !!}
		
@endsection

