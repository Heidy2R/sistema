@extends('layouts.plantilla');

@section('contenido')
<h1>Editar Rol</h1>
<form action="/roles/{{$role->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mt-3">
        <label for="" class="form-label">Rol</label>
        <input id="rol" name="rol" type="text" class="form-control" value="{{$role->rol}}">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Estado</label>
        <input id="estado" name="estado" type="text" class="form-control" value="{{$role->estado}}">
    </div>
    <br>
    <a href="/roles" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" taindex="6">Guardar</button>
</form>
@endsection