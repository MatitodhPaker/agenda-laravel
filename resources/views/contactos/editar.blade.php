@extends('layouts/agenda')
@section('titulo_pagina', 'Editar contacto')
@section('contenido')
<div class="row mt-5">
  <div class="card sm-8 offset-lg-2" style="max-width: 700px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{asset('img/peter.png')}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title" style="font-family: 'Press Start 2P', cursive;">Editar Contacto</h5>
          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalAgregado">
            <span class="fa-solid fa-user-pen"></span> Editar
          </button>
          <p class="card-text"><small class="text-muted">Porfavor pasame con 100</small></p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="modal" tabindex="-1" id="modalAgregado" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar contacto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('contactos.update',$contacto->id_contacto)}}" method="post">
            @csrf
            @method('PUT')
            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria" class="form-select">
              @foreach ($categorias as $item)
                  @if ($item->id_categoria==$contacto->id_categoria)
                      <option selected value="{{$item->id_categoria}}">{{$item->nombre}}</option>
                  @else
                      <option value="{{$item->id_categoria}}">{{$item->nombre}}</option>
                  @endif
              @endforeach
            </select>
            <label for="paterno">Apellido Paterno</label>
            <input type="text" class="form-control" id="paterno" name="paterno" required value="{{$contacto->paterno}}">
            <label for="materno">Apellido Materno</label>
            <input type="text" class="form-control" id="materno" name="materno" required value="{{$contacto->materno}}">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required value="{{$contacto->nombre}}">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required value="{{$contacto->telefono}}">
            <label for="correo">Email</label>
            <input type="text" class="form-control" id="correo" name="correo" required value="{{$contacto->email}}">
            <button class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection