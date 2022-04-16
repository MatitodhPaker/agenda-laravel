@extends('layouts/agenda')
@section('titulo_pagina', 'Editar categoria')
@section('contenido')
<div class="row mt-5">
  <div class="card sm-8 offset-lg-2" style="max-width: 700px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{asset('img/peter.png')}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title" style="font-family: 'Press Start 2P', cursive;">Editar Categoria</h5>
          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalAgregado"><i class="fa-solid fa-pen-clip"></i> Editar</button>
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
          <h5 class="modal-title">Editar categoria</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('categorias.update',$categoria->id_categoria)}}" method="post">
            @csrf
            @method('PUT')
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required value="{{$categoria->nombre}}">
            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" >{{$categoria->descripcion}}</textarea>
            <button class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection