@extends('admin.template.main')


@section('content')
	{!!Form::open(['route'=>'administrators.store','method','POST'])!!}
	
	<div class="form-group">
		{!! Form::label('numberRegister','Registro') !!}
		{!! Form::text('numberRegister',null, ['class'=>'form-control', 'requiered']) !!}
	</div>

	<div class="form-group">
		{!!Form::label('businessName','Razon social') !!}
		{!!Form::text ('businessName',null,['class'=>'form-control','requiered'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('fkPerson','Dueño') !!}
		{!! Form::select('fkPerson', $people,null,['class'=>'form-control', 'placeholder'=> 'Selecionar...', 'requiered']) !!} 
	</div>

	<br>
	<div class="form-group">
		{!! Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	</div>

	{!!Form::close()!!}
@endsection