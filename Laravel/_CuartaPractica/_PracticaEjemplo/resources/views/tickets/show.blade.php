@extends('layouts.app')

@section('content')
    <h1>Mostrar Detalles</h1>
        <table class="table table-striped">
        <tbody>    
            <tr>
                <td>ID: </td>
                <td>{{ $ticket->id }}</td>        
            </tr>
            <tr>
                <td>Titulo: </td>
                <td>{{ $ticket->titulo }}</td>
            </tr>
            <tr>
                <td>Nombre: </td>
                <td>{{ $ticket->nombre }}</td>        
            </tr>
            <tr>
                <td>Foto: </td>
                <td><img src="{{ asset('storage/' . $ticket->id . 'foto.jpg') }}" alt="No se carga la imagen"></td> <!-- esto lo que hace es coger la imagen del strage que como se configuro es con la id del ticket y lo juntas con el texto foto que es como se ha definido -->
                <!-- <td><img src="{{ asset('/storage/app/public' . $ticket->id.'foto.jpg') }}" alt="No se carga la imagen" ></td> -->
            </tr>
            <tr>
                <td>Descripcion: </td>
                <td>{{ $ticket->descripcion}}</td>
            </tr>
            <tr>
                <td>
                    <form action="{{ route('tickets.edit', $ticket->id) }}" method ="POST">
                    @csrf
                    @method('GET')
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                    <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                    <form action="{{ route('tickets.index') }}">
                        <button type="submit" class="btn btn-secondary">Cerrar</button>
                    </form>
                </td>
                
            </tr>
        </tbody>
        </table>
@endsection