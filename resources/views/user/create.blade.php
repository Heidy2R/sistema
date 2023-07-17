@extends('layouts.plantilla');

@section('contenido')
<h1>Nuevo Usuario</h1>
<form action="/users" method="POST">
    @csrf
    <div class="mt-3">
        <label for="" class="form-label">Name</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Email</label>
        <input id="email" name="email" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Estado</label>
        <input id="estado" name="estado" type="text" class="form-control" tabindex="3">
    </div>
    <!--<div class="mt-3">
        <label for="" class="form-label">Password</label>
        <input id="password" name="password" type="text" class="form-control" tabindex="4">
    </div>-->
    <br>
    <a href="/users" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" taindex="6">Guardar</button>
</form>
@endsection