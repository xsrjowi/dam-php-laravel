@extends('layouts.app')

@section('content')
    <h1>Tickets</h1>
    <form action ="{{ route('tickets.create')}}">
    <button type="Crear" class="btn btn-success">Create</button>
    </form>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Nombre</th>
                <th>Prioridad</th>
                <th>Fecha de Creación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->titulo }}</td>
                    <td>{{ $ticket->nombre }}</td>
                    <td>{{ $ticket->descripcion }}</td>
                    <td>{{ $ticket->created_at }}</td>
                    <td>

                    

                        <form action="{{ route('tickets.edit', $ticket->id) }}" method="POST">
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>


                        <form action="{{ route('tickets.show', $ticket->id) }}" method="POST">
                            @csrf
                            @method('GET')
                        <button type="submit" class="btn btn-info">Mostrar Detalles</button>
                        </form>
                        <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
