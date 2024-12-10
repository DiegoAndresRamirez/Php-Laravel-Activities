@extends('layouts.layout')

@section('Crudzito', 'Editar Usuario')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center py-5">
        <div class="col-12 text-center">
            <h1>Editar Usuario</h1>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        @include('users.form', [
            'action' => route('users.update', $user->id),
            'method' => 'PUT',
            'countries' => $countries,
            'user' => $user,
        ])
    </div>
</div>
@endsection
