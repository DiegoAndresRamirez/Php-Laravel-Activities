<div class="col-12 col-md-6">
    <div class="d-grid w-25 gap-5">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Volver</a>
    </div>
    <div class="mb-3">
        <label class="form-label">Nombres</label>
        <p class="form-control-plaintext">{{ $user->name }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Apellidos</label>
        <p class="form-control-plaintext">{{ $user->lastnames }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Correo</label>
        <p class="form-control-plaintext">{{ $user->email }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Género</label>
        <p class="form-control-plaintext">
            @if($user->gender === 'male')
                Masculino
            @elseif($user->gender === 'female')
                Femenino
            @elseif($user->gender === 'other')
                Otro
            @else
                No especificado
            @endif
        </p>
    </div>
    <div class="mb-3">
        <label class="form-label">Teléfono</label>
        <p class="form-control-plaintext">{{ $user->phone }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Dirección</label>
        <p class="form-control-plaintext">{{ $user->address }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">País</label>
        <p class="form-control-plaintext">{{ $user->country->name ?? 'No especificado' }}</p>
    </div>
</div>
