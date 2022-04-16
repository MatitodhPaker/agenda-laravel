@extends('layouts/agenda')
@section('titulo_pagina', 'contactos')
@section('contenido')
    <div class="row">
        <div class="col">
          <div class="row mt-4">
            <div class="col">
              <h3 style="font-family: 'Press Start 2P', cursive;">
                Contactos
              </h3>
              <a class="btn btn-primary" style="max-width: 20%;" href="{{route('contactos.create')}}"><i class="fa-solid fa-user-plus"></i> Agregar nuevo contacto</a>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p></p>
            <hr>
            <table class="table table-sm table-bordered"> 
              <thead>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Categoria</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </thead>
              <tbody>
                @foreach ($listado as $item)
                  <tr>
                    <td>{{$item->paterno}}</td>
                    <td>{{$item->materno}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->telefono}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->nombre_categoria}}</td>
                    <td>
                      <a href="{{route('contactos.edit',$item->id_contacto)}}" class="btn btn-warning btn-sm text-center"><i class="fa-solid fa-user-pen"></i></a>
                    </td>
                    <td>
                      <a href="{{route('contactos.show',$item->id_contacto)}}" class="btn btn-danger btn-sm text-center"><i class="fa-solid fa-user-minus"></i></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            </div>
          </div>
        </div>
    </div>
    @if ($mensaje=Session::get('success'))
      <input type="text" hidden value="{{$mensaje}}" id="alerta">
    @endif
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
  });
</script>