@extends('layouts/agenda')
@section('titulo_pagina', 'Inicio')
@section('contenido')
    <div class="row">
        <div class="col sm-12 mt-4">
					<div class="card sm-8 offset-lg-2" style="max-width: 700px;">
						<div class="row g-0">
							<div class="col-md-4">
								<img src="{{asset('img/porker.jpeg')}}" class="img-fluid rounded-start" alt="...">
							</div>
							<div class="col-md-8">
								<div class="card-body">
									<h5 class="card-title" style="font-family: 'Press Start 2P', cursive;">Agenda de Parker</h5>
									<p class="card-text" style="font-family: 'Ms Madi', cursive; font-size:30px">Esta es una agenda sencilla con laravel 8 para la materia de programacion logica funcional examen practico de la unidad 2</p>
									<p class="card-text"><small class="text-muted">Porfavor pasame con 100</small></p>
								</div>
							</div>
						</div>
					</div>
				</div>
    </div>
@endsection
