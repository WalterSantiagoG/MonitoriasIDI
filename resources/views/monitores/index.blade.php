@extends('monitores.layout') 

@section('content')      
      <h4>Listado de monitores</h4>
      @include('flash::message')
      <table id="monitors-table" class="display" style="width:100%;">
        <thead>
            <tr align="center">
                <th>Nombres</th>
                <th>apellidos</th>
                <th>Programa Academico</th>
                <th>Semestre</th>
                <th>Cedula</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Celular</th>
                <th>Fecha Creacion</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody align="center" style="cursor: pointer;">
          @foreach($Monitor as $Monitor)
            <tr id="{{ $Monitor->IdMonitor }}">

              <td> {{ $Monitor->nombres }} </td>
              <td> {{ $Monitor->apellidos }} </td>
              <td> {{ $Monitor->programa_academico }} </td>
              <td> {{ $Monitor->semestre }} </td>
              <td> {{ $Monitor->cedula }} </td>
              <td> {{ $Monitor->email }} </td>
              <td> {{ $Monitor->telefono }} </td>
              <td> {{ $Monitor->celular }} </td>
              <td> {{ $Monitor->created_at }} </td>
              <td>
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-lg-6">
                    <a href="{{ route('monitors.edit', $Monitor->IdMonitor) }}" id="accion" class="btn btn-xs btn-info">
                      <i class="fa fa-pencil"></i>
                    </a>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-lg-6">
                    <a href="{{ route('monitors.destroy', $Monitor->IdMonitor) }}" id="accion" onclick="return confirm('¿Seguro de deseas eliminarlo? Recuerda que tambien se eliminaran las monitorias asignadas a este monitor')" class="btn btn-xs btn-danger">
                    <i class="fa fa-times" aria-hidden="true"></i>
                  </a>
                  </div>
                </div>
                
                
              </td>
            </tr> 
    
          @endforeach
        </tbody>
      </table>

      <br><br><br>
      <h4>Listado de monitorias</h4>
      <table id="monitorias-table" class="display" style="width:100%">
        <thead>
            <tr align="center">
                <th>Monitor</th>
                <th>Materia</th>
                <th>Fecha</th>
                <th>Salon</th>
                <th>Fecha creación</th>
            </tr>
        </thead>
        <tbody align="center">
          
        </tbody>
      </table>
@stop