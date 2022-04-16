@extends('layouts/agenda')
@section('titulo_pagina', 'Eliminar contacto')
@section('contenido')
  <div class="row mt-5">
    <div class="card sm-8 offset-lg-2" style="max-width: 700px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('img/venom.png')}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title" style="font-family: 'Press Start 2P', cursive;">Eliminar Contacto</h5>
            <form action="{{route('contactos.destroy', $contacto->id_contacto)}}" method="post">
              @csrf
              @method('DELETE')
              <label for="categoria">Categoria</label>
              <input type="text" class="form-control" id="paterno" name="paterno"  readonly value="{{$contacto->nombre_categoria}}">
              <label for="paterno">Apellido Paterno</label>
              <input type="text" class="form-control" id="paterno" name="paterno"  readonly value="{{$contacto->paterno}}">
              <label for="materno">Apellido Materno</label>
              <input type="text" class="form-control" id="materno" name="materno"  readonly value="{{$contacto->materno}}">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre"  readonly value="{{$contacto->nombre}}">
              <label for="telefono">Telefono</label>
              <input type="text" class="form-control" id="telefono" name="telefono"  readonly value="{{$contacto->telefono}}">
              <label for="correo">Email</label>
              <input type="text" class="form-control" id="correo" name="correo"  readonly value="{{$contacto->email}}">
              <button class="btn btn-danger"><i class="fa-solid fa-user-minus"></i> Eliminar</button>
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
      'Estas seguro de eliminar este contacto',
      'Una vez eliminada no se podran recuperar los datos',
      'warning'
    )
  });
</script>