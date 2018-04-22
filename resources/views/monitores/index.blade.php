@extends('monitores.layout') 

@section('content')      
      <h4>Listado de monitores</h4>
      @include('flash::message')
      <table id="monitors-table" class="display" style="width:100%; font-size: 85%">
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
            <tr id="{{ $Monitor->id_sed }}">

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
                <a href="{{ route('monitors.edit', $Monitor) }}" class="btn btn-xs btn-info">
                  <i class="fa fa-pencil"></i>
                </a>
                <a href="{{ route('monitors.destroy', $Monitor->IdMonitor) }}" onclick="return confirm('¿Seguro de deseas eliminarlo? Recuerda que tambien se eliminaran las monitorias asignadas a este monitor')" class="btn btn-xs btn-danger">
                  <i class="fa fa-times" aria-hidden="true"></i>
                </a>
              </td>
            </tr> 
    
          @endforeach
        </tbody>
      </table>
@stop

   