@extends('admin.template.main')


@section('content')
	{!!Form::open(['route'=>'providers.store','method','POST'])!!}
	
	<div class="form-group">
		{!! Form::label('fkPerson','Dueño') !!}
		{!! Form::select('fkPerson', $people,null,['class'=>'form-control', 'placeholder'=> 'Selecionar...', 'requiered']) !!} 
	</div>

	<div class="form-group">
		{!! Form::label('fkItem','Rubro') !!}
		{!! Form::select('fkItem', $items,null,['class'=>'form-control', 'placeholder'=> 'Selecionar...', 'requiered']) !!} 
	</div>

	<div class="form-group">
		{!!Form::label('businessName','Razon social') !!}
		{!!Form::text ('businessName',null,['class'=>'form-control','requiered'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('cuit','Cuit') !!}
		{!! Form::text('cuit',null, ['class'=>'form-control', 'requiered']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('commercialAddress','Direccion comercial') !!}
		{!! Form::text('commercialAddress',null,['class'=>'form-control', 'requiered']) !!} 
	</div>

	<div class="form-group">
		{!! Form::label('fkCity','Ciudad') !!}
		{!! Form::select('fkCity', $cities,null,['class'=>'form-control', 'placeholder'=> 'Selecionar...', 'requiered']) !!} 
	</div>

	<div class="form-group">
		{!! Form::label('telephone','Telefono') !!}
		{!! Form::text('telephone','Telefono') !!}
	</div>

	<br>
	<div class="form-group">
		{!! Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	</div>

	{!!Form::close()!!}
@endsection