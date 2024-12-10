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
            <form class="col-12 col-md-6" method="POST"> @csrf <div class="mb-3"> <label for="name"
                        class="form-label">Nombres</label> <input type="text" class="form-control" id="name"
                        name="name"> </div>
                <div class="mb-3"> <label for="lastnames" class="form-label">Apellidos</label> <input type="text"
                        class="form-control" id="lastnames" name="lastnames"> </div>
                <div class="mb-3"> <label for="email" class="form-label">Correo</label> <input type="email"
                        class="form-control" id="email" name="email"> </div>
                <div class="mb-3"> <label for="gender" class="form-label">Género</label> <select class="form-select"
                        id="gender" name="gender">
                        <option selected>Seleccionar...</option>
                        <option value="male">Masculino</option>
                        <option value="female">Femenino</option>
                        <option value="other">Otro</option>
                    </select> </div>
                <div class="mb-3"> <label for="phone" class="form-label">Teléfono</label> <input type="tel"
                        class="form-control" id="phone" name="phone"> </div>
                <div class="mb-3"> <label for="address" class="form-label">Dirección</label> <input type="text"
                        class="form-control" id="address" name="address"> </div>
                <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary">Guardar</button> </div>
            </form>
        </div>
</div> @endsection
