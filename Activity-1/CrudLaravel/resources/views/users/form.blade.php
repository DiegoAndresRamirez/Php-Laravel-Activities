<form class="col-12 col-md-6" method="POST" action="{{ $action }}">
    @csrf
    @if(isset($method) && $method === 'PUT')
        @method('PUT')
    @endif
    <div class="d-grid w-25 gap-5">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Volver</a>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Nombres</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name ?? '') }}">
    </div>
    <div class="mb-3">
        <label for="lastnames" class="form-label">Apellidos</label>
        <input type="text" class="form-control" id="lastnames" name="lastnames" value="{{ old('lastnames', $user->lastnames ?? '') }}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Correo</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email ?? '') }}">
    </div>
    <div class="mb-3">
        <label for="gender" class="form-label">Género</label>
        <select class="form-select" id="gender" name="gender">
            <option value="">Seleccionar...</option>
            <option value="male" {{ old('gender', $user->gender ?? '') === 'male' ? 'selected' : '' }}>Masculino</option>
            <option value="female" {{ old('gender', $user->gender ?? '') === 'female' ? 'selected' : '' }}>Femenino</option>
            <option value="other" {{ old('gender', $user->gender ?? '') === 'other' ? 'selected' : '' }}>Otro</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Teléfono</label>
        <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone', $user->phone ?? '') }}">
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $user->address ?? '') }}">
    </div>
    <div class="mb-3">
        <label for="country_id" class="form-label">País</label>
        <select class="form-select" id="country_id" name="country_id">
            <option value="">Seleccionar...</option>
            @foreach($countries as $country)
                <option value="{{ $country->id }}" {{ old('country_id', $user->country_id ?? '') == $country->id ? 'selected' : '' }}>
                    {{ $country->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>
