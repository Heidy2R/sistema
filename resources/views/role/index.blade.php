@extends('layouts.plantilla');

@section('contenido')
<h1>Listado de Roles</h1>
<a href="roles/create" class="btn btn-primary">Nuevo</a>
<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Rol</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($roles as $role)
        <tr>
            <td>{{$role->id}}</td>
            <td>{{$role->rol}}</td>
            <td>{{$role->estado}}</td>
            <td>
                <form action="{{route('roles.destroy', $role->id)}}" method="POST">
                    <a href="/roles/{{$role->id}}/edit" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection