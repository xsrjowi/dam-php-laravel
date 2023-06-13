@extends('layouts.app')

@section('content')
    <h2>Actualiza tu ticket</h2>
    <form action="{{ route('tickets.update', $ticket->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo</label>
            <input id="titulo" name="titulo" type="text" class="form-control" tabindex="1" value="{{ $ticket->titulo }}">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="3" value="{{ $ticket->nombre }}">
        </div>
        <div class="mb-3">
            <div> 
                <label for="imagen">Imagen: </label>
            </div>
            <div>
                <img src="{{ asset('storage/' . $ticket->id . 'foto.jpg') }}" alt="No se carga la imagen">
            </div>
            <div> 
                <input id="Foto" type="file" name="fotos">
            </div>
        </div>
        <div class="mb-3">
            <label for="descripcion" name="descripcion">Descripcion</label>
            <select name="descripcion">
                <option value="alta" {{ $ticket->descripcion === 'alta' ? 'selected' : '' }}>Alta</option>
                <option value="media" {{ $ticket->descripcion === 'media' ? 'selected' : '' }}>Media</option>
                <option value="baja" {{ $ticket->descripcion === 'baja' ? 'selected' : '' }}>Baja</option>
            </select>
        </div>
        {!! NoCaptcha::renderJs() !!}
        {!! NoCaptcha::renderJs('es', true, 'recaptchaCallback') !!}
        {!! NoCaptcha::display() !!}
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
@endsection
