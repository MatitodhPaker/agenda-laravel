@extends('layouts/agenda')
@section('titulo_pagina', 'categorias')
@section('contenido')
    <div class="row">
        <div class="col">
          <div class="row mt-4">
            <div class="col">
              <h3 style="font-family: 'Press Start 2P', cursive;">
                Categorias
              </h3>
              <a class="btn btn-primary" style="max-width: 20%;" href="{{route('categorias.create')}}">
                <i class="fa-solid fa-folder-plus"></i> Agregar nueva categoria
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p></p>
            <hr>
            <table class="table table-sm table-bordered" id="tablaCategorias"> 
              <thead>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </thead>
              <tbody>
                @foreach ($categoria as $item)
                  <tr>
                    <td>{{ $item->nombre}}</td>
                    <td>{{ $item->descripcion}}</td>
                    <td>
                      <a href="{{route('categorias.edit', $item->id_categoria)}}" class="btn btn-warning">
                        <i class="fa-solid fa-pen-clip"></i> Editar
                      </a>
                    </td>
                    <td>
                      <a href="{{route('categorias.show', $item->id_categoria)}}" class="btn btn-danger">
                        <i class="fa-solid fa-folder-minus"></i> Eliminar
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            </div>
          </div>
        </div>
        @if ($mensaje=Session::get('success'))
            <input type="text" hidden value="{{$mensaje}}" id="alerta">
        @endif
    </div>
@endsection
@section('dataTable')
    
@endsection
<script>
  document.addEventListener("DOMContentLoaded", function(event) {
    let valor = document.getElementById("alerta").value;
    if (valor=='2') {
      Swal.fire(
      'Actualizada con exito',
      'se modificaron los datos correctamente',
      'success'
      )
    }
    if (valor=='1') {
      Swal.fire(
      'Agregado con exito',
      'se insertaron los datos de manera correcta',
      'success'
      )
    }
    if (valor=='3') {
      Swal.fire(
      'Elimnado con exito',
      'se eliminaron los datos de manera correcta',
      'success'
      )
    }
    $('#tablaCategorias').Datatable();
  });
</script>
<script>
  $(document).ready(function ()) {
    
  });
</script>