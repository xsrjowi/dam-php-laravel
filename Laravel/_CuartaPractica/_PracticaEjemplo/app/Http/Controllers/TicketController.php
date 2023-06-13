<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create()
    {
        return view('create');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::orderBy('created_at', 'asc')->get();
        return view('tickets.index', compact('tickets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $query = $request->all();
        $query['fotos'] = 'aaaaaaaaaaaa'; // Aqui le ponemos un valor a la columna de fotos para que se pueda insertar
        // dd($query);
        $ticket = Ticket::create($query);
        if ($image = $request->file('fotos')) {
            $imagenGuardar = $ticket->id . "foto.jpg"; // Aqui le asignamos un nombre a las fotos para guardarlas en local
            $image->move('storage/', $imagenGuardar); // Aqui movemos la imagen a la carpeta storage
            $ticket->fotos = $imagenGuardar; // Aqui en el apartados de fotos actualizados
            $ticket->save(); // Y aqui lo subimos a la base de datos
            return redirect()->route('tickets.show', ['id' => $ticket->id]); // redirigimos a la pantalla principal
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ticket = Ticket::findOrFail($id);
        // dd($ticket);
        return view('tickets.show', ['ticket' => $ticket]);
    }


    public function edit($id)
    {
        $ticket = Ticket::findOrFail($id);
        return view('tickets.update', ['ticket' => $ticket]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
        $ticket = Ticket::find($request->id);
        $ticket->titulo = $request->input('titulo');
        $ticket->nombre = $request->input('nombre');
        $ticket->descripcion = $request->input('descripcion');
        if ($request->hasFile('fotos')) {
            $image = $request->file('fotos');
            // dd($image);
            $imagenGuardar = $ticket->id . "foto.jpg";
            $image->move('storage/', $imagenGuardar);
            $ticket->fotos = $imagenGuardar;
        }
        $ticket->save();
        return view('tickets.show', ['ticket' => $ticket]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();
        $oldImage = $id . 'foto.jpg';
        if ($oldImage && file_exists(public_path('storage/' . $oldImage))) {
            unlink(public_path('storage/' . $oldImage));
        }
        return redirect()->route('tickets.index');
    }
}
