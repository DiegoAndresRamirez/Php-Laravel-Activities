@extends('layouts.layout')

@section('Crudzito', 'Crear Usuario')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center py-5">
        <div class="col-12 text-center">
            <h1>Crear Usuario</h1>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        @include('users.form', [
            'action' => route('users.store'),
            'countries' => $countries,
        ])
    </div>
</div>
@endsection
