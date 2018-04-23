@extends('monitores.layout') 

@section('content')      
	<h3>Editar Monitor {{ $Monitor->nombres }}</h3><br>

	@if(count($errors) > 0)
		<div class="alert alert-danger" role="alert">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	
    {!! Form::open(array('route' => ['monitors.update',$Monitor->IdMonitor], 'method' => 'PUT')) !!}﻿

	    <div class="form-group">
		    <label for="nombres">Nombres</label>
		    <input type="text" class="form-control" name="nombres" value="{{old('nombres', $Monitor->nombres)}}" id="nombres" value="{{ $Monitor->nombres }}" placeholder="Nombres" required="required">
		</div>
		<div class="form-group">
		  <label for="apellidos">Apellidos</label>
		  <input type="text" class="form-control" name="apellidos" value="{{old('apellidos', $Monitor->apellidos)}}" id="apellidos" value="{{ $Monitor->apellidos }}" placeholder="Apellidos" required="required">
		</div>
		<div class="form-group">
		  <label for="programa_academico">Programa academico</label>
		  <input type="text" class="form-control" name="programa_academico" value="{{old('programa_academico', $Monitor->programa_academico)}}" id="programa_academico" value="{{ $Monitor->programa_academico }}" placeholder="Programa academico" required="required">
		</div>
		<div class="form-group">
		  <label for="semestre">Semestre</label>
		  <input type="number" class="form-control" name="semestre" value="{{old('semestre', $Monitor->semestre)}}" id="semestre" value="{{ $Monitor->semestre }}" placeholder="Semestre" max="10" min="1" required="required">
		</div>
		<div class="form-group">
		  <label for="cedula">Cedula</label>
		  <input type="text" class="form-control" name="cedula" value="{{old('cedula', $Monitor->cedula)}}" id="cedula" value="{{ $Monitor->cedula }}" placeholder="Cedula" required="required" maxlength="10" minlength="10">
		</div>
		<div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" name="email" value="{{old('email', $Monitor->email)}}" id="email" value="{{ $Monitor->email }}" aria-describedby="emailHelp" placeholder="Email" required="required">
		    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
		</div>
		<div class="form-group">
		  <label for="telefono">Telefono</label>
		  <input type="number" class="form-control" name="telefono" value="{{old('telefono', $Monitor->telefono)}}" id="telefono" value="{{ $Monitor->telefono }}" placeholder="Telefono" required="required" maxlength="10" minlength="10">
		</div>
		<div class="form-group">
		  <label for="celular">Celular</label>
		  <input type="number" class="form-control" name="celular" value="{{old('celular', $Monitor->celular)}}" id="celular" value="{{ $Monitor->celular }}" placeholder="Celular" required="required" maxlength="10" minlength="10">
		</div>
	  
	  	<button type="submit" class="btn btn-primary">Actualizar</button>

	{!! Form::close() !!}
@stop

   