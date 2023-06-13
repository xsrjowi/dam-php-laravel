@extends('layouts.app')

@section('content')
<form action="{{ route('tickets.store') }}" method="POST" enctype="multipart/form-data">
<h1>Crear Ticket</h1>
    <table class="table table-striped">
        <tr>
            <td>
                <label for="titulo">Titulo</label>
                <input id="titulo" type="text" name="titulo">
            </td>
        </tr>
        <tr>
            <td>
                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" name="nombre">
            </td>
        </tr>
        <tr>
            <td>
                <label for="imagen">Imagen: </label>
                <input id="Foto" type="file" name="fotos">
            </td>
        </tr>
        <tr>
            <td>
                <label for="descripcion">Descripcion</label>
                <select name="descripcion">
                    <option value="alta" name="alta">Alta</option>
                    <option value="media" name="media">Media</option>
                    <option value="baja" name="baja">Baja</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            {!! NoCaptcha::renderJs() !!}
            {!! NoCaptcha::renderJs('es', true, 'recaptchaCallback') !!}
            {!! NoCaptcha::display() !!}
                @csrf
                @method('POST')
                <button type="submit" class="btn btn-success">Crear</button>
            </td>
        </tr>
    </table>
    </form>
    @endsection