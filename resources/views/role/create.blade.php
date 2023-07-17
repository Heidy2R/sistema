@extends('layouts.plantilla');

@section('contenido')
<h1>Nuevo Rol</h1>
<form action="/roles" method="POST">
    @csrf
    <div class="mt-3">
        <label for="" class="form-label">Rol</label>
        <input id="rol" name="rol" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Estado</label>
        <input id="estado" name="estado" type="text" class="form-control" tabindex="3">
    </div>
    <br>
    <a href="/roles" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" taindex="6">Guardar</button>
</form>
@endsection