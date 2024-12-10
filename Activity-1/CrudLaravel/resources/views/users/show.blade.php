@extends('layouts.layout')

@section('Crudzito', 'Detalles del Usuario')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center py-5">
        <div class="col-12 text-center">
            <h1>Detalles del Usuario</h1>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        @include('users.details', ['user' => $user])
    </div>
</div>
@endsection
