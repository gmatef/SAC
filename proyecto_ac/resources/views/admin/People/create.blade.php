@extends('admin.template.main')


@section('content')
	{!!Form::open(['route'=>'people.store','method','POST'])!!}
	
	<div class="form-group">
		{!! Form::label('firstName','Nombre') !!}
		{!! Form::text ('firstName',null,['class'=>'form-control','requiered']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('lastName','Apellido') !!}
		{!! Form::text('lastName',null, ['class'=>'form-control', 'requiered']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('paper','Documento') !!}
		{!! Form::text('paper',null, ['class'=>'form-control', 'requiered']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('cuitCuil','Cuit/Cuil') !!}
		{!! Form::text('cuitCuil',null, ['class'=>'form-control', 'requiered']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('telephone','Telefono') !!}
		{!! Form::text('telephone',null, ['class'=>'form-control', 'requiered']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('address','Direccion') !!}
		{!! Form::text('address',null, ['class'=>'form-control', 'requiered']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('fkCity','Ciudad') !!}
		{!! Form::select('fkCity', $cities,null,['class'=>'form-control', 'placeholder'=>'Selecionar Ciudad', 'requiered']) !!} 
	</div>

	<div class="form-group">
		{!! Form::label('fkTypePerson','Tipo de persona') !!}
		{!! Form::select('fkTypePerson', $tp,null,['class'=>'form-control', 'placeholder'=>'Selecionar un tipo', 'requiered']) !!} 
	</div>

	<br>
	<div class="form-group">
		{!! Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	</div>

	{!!Form::close()!!}
@endsection