@extends('layouts.layout')

@section('Crudzito', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="container d-flex justify-content-center align-items-center py-5">
            <button class="btn btn-primary">
                <a href="{{ route('users.create') }}" class="text-white">Crear nuevo usuario</a>
            </button>
        </div>
        <div class="container">
            <div class="container w-300px">
                <table class="table table-striped table-hover justify-content-center align-items-center">
                    <thead>
                        <tr>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Pais</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->lastnames }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->gender}}</td>
                                <td>{{ $user->country->name}}</td>
                                <td>
                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-secondary">Detalles</a>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center align-items-center">
                    <p>{{ $users->count() }} resultados</p>
                </div>
            </div>
        </div>
    </div>
@endsection