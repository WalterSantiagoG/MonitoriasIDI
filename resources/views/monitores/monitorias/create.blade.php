@extends('monitores.layout') 

@section('content')      
	<h3>Registro de Monitorias</h3><br>

	@if(count($errors) > 0)
		<div class="alert alert-danger" role="alert">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

    {!! Form::open(array('route' => 'monitorias.store')) !!} {{--$Monitoria --}}

		<div class="form-group">
		    <label for="IdMonitor">Monitor</label>
		    <select class="form-control" name="IdMonitor" id="IdMonitor">
		    	@foreach($Monitor->all() as $monitor)
					<option value="{{ $monitor->IdMonitor }}">{{ $monitor->nombres.' '.$monitor->apellidos }}</option>
				@endforeach
		    </select>
		</div>
	    <div class="form-group">
		    <label for="materia">Materia</label>
		    <input type="text" class="form-control" name="materia" value="{{ old('materia') }}" id="materia" placeholder="Materia" required="required" maxlength="50">
		</div>
		<div class="form-group">
		  <label for="fecha">Fecha</label>
		  <input type="date" class="form-control" name="fecha" value="{{ old('fecha') }}" id="fecha" placeholder="Fecha" required="required">
		</div>
		<div class="form-group">
		  <label for="salon">Salon</label>
		  <input type="text" class="form-control" name="salon" value="{{ old('salon') }}" id="salon" placeholder="Salon" required="required">
		</div>
		
	  	<button type="submit" class="btn btn-primary">Registrar</button>

	{!! Form::close() !!}
@stop

   