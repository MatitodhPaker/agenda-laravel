@extends('layouts/agenda')
@section('titulo_pagina', 'Eliminar categoria')
@section('contenido')
  <div class="row mt-5">
    <div class="card sm-8 offset-lg-2" style="max-width: 700px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('img/venom.png')}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title" style="font-family: 'Press Start 2P', cursive;">Eliminar categoria</h5>
            <form action="{{route('categorias.destroy',$categoria->id_categoria)}}" method="post">
              @csrf
              @method('DELETE')
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" readonly value="{{$categoria->nombre}}">
              <label for="descripcion">Descripcion</label>
              <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" readonly >{{$categoria->descripcion}}</textarea>
              <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Elminar</button>
            </form>
            <p class="card-text"><small class="text-muted">Porfavor pasame con 100</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
<script>
  document.addEventListener("DOMContentLoaded", function(event) {
    Swal.fire(
      'Esatas seguro de eliminar esta categoria',
      'Una vez eliminada no se podran recuperar los datos',
      'warning'
    )
  });
</script>