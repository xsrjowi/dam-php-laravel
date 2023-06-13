<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ApartmentInsertMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $rules = [
            'address' => 'required|string|max:100',
            'city' => 'required|string',
            'postal_code' => 'required|size:5',
            'rented_price' => 'nullable|numeric|min:0|max:999999.99',
            'rented' => 'required|boolean',
        ];
        $messages = [
            'address.required' => 'Por favor introduzca la dirección del apartamento.',
            'address.string' => 'Por favor la direccion solo puede contener letras y espacios.',
            'address.max' => 'Por favor la direcion no puede tener más de 100 caracteres.',
            'city.required' => 'Por favor introduzca la ciudad del apartamento.',
            'city.string' => 'La ciudad del apartamento solo puede contener letras y espacios.',
            'postal_code.required' => 'Por favor introduzca el código postal del apartamento.',
            'postal_code.size' => 'El código postal del apartamento debe tener minimo 5 caracteres.',
            'rented_price.numeric' => 'El precio de alquiler deben ser numeros.',
            'rented_price.min' => 'El precio de alquilerha de ser mayor a cero.',
            'rented_price.max' => 'El precio de alquiler no puede ser mayor que 999999.',
            'rented.required' => 'Por favor has de rellenar el campo rented.',
            'rented.boolean' => 'Por favor Rented es True o False.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        return $next($request);
    }
}


//     $validator = Validator::make($request->all(), $rules, $messages);

    //     if ($validator->fails()) {
    //         return response()->json(['errors' => $validator->errors()], 400);
    //     }

    //     if (!Auth::check()) {
    //         return response()->json(['message' => 'Unauthorized'], 401);
    //     }

    //     return $next($request);
    // }