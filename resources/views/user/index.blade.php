@extends('layouts.plantilla');

@section('contenido')
<h1>Listado de Usuarios</h1>
<a href="users/create" class="btn btn-primary">Nuevo</a>
<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Estado</th>
            <!--<th scope="col">Password</th>-->
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->estado}}</td>
            <!--<td>{{$user->password}}</td>-->
            <td>
                <form action="{{route('users.destroy', $user->id)}}" method="POST">
                    <a href="/users/{{$user->id}}/edit" class="btn btn-info">Editar</a>
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