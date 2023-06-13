<?php

namespace App\Http\Middleware;

use App\Models\Apartment;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ApartmentDeleteMiddleware
{
    /**
     * Comprueba que la ID del apartamento existe, para poder eliminarlo
     *
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $rules = [
            'id' => 'required|numeric'
        ];

        $messages = [
            'id.numeric' => 'La ID del apartamento debe ser un número'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        $apartment = Apartment::where('id', '=', $request->input('id')->first());

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 400);
        }

        if ($apartment == null) {
            return response()->json([
                'errors' => 'El apartamento con la ID introducida, no existe'
            ], 404);
        }
    }
}
