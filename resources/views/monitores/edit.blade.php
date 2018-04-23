@extends('monitores.layout') 

@section('content')      
	<h3>Editar Monitor {{ $Monitor->nombres }}</h3><br>
    {!! Form::open(array('route' => ['monitors.update',$Monitor->IdMonitor], 'method' => 'PUT')) !!}﻿

	    <div class="form-group">
		    <label for="nombres">Nombres</label>
		    <input type="text" class="form-control" name="nombres" id="nombres" value="{{ $Monitor->nombres }}" placeholder="Nombres" required="required">
		</div>
		<div class="form-group">
		  <label for="apellidos">Apellidos</label>
		  <input type="text" class="form-control" name="apellidos" id="apellidos" value="{{ $Monitor->apellidos }}" placeholder="Apellidos" required="required">
		</div>
		<div class="form-group">
		  <label for="programa_academico">Programa academico</label>
		  <input type="text" class="form-control" name="programa_academico" id="programa_academico" value="{{ $Monitor->programa_academico }}" placeholder="Programa academico" required="required">
		</div>
		<div class="form-group">
		  <label for="semestre">Semestre</label>
		  <input type="number" class="form-control" name="semestre" id="semestre" value="{{ $Monitor->semestre }}" placeholder="Semestre" max="10" min="1" required="required">
		</div>
		<div class="form-group">
		  <label for="cedula">Cedula</label>
		  <input type="text" class="form-control" name="cedula" id="cedula" value="{{ $Monitor->cedula }}" placeholder="Cedula" required="required" maxlength="10" minlength="10">
		</div>
		<div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" name="email" id="email" value="{{ $Monitor->email }}" aria-describedby="emailHelp" placeholder="Email" required="required">
		    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
		</div>
		<div class="form-group">
		  <label for="telefono">Telefono</label>
		  <input type="number" class="form-control" name="telefono" id="telefono" value="{{ $Monitor->telefono }}" placeholder="Telefono" required="required" maxlength="10" minlength="10">
		</div>
		<div class="form-group">
		  <label for="celular">Celular</label>
		  <input type="number" class="form-control" name="celular" id="celular" value="{{ $Monitor->celular }}" placeholder="Celular" required="required" maxlength="10" minlength="10">
		</div>
	  
	  	<button type="submit" class="btn btn-primary">Actualizar</button>

	{!! Form::close() !!}
@stop

   