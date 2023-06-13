<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ApartmentUpdateMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $rules = [
            'id' => 'required|numeric',
            'address' => 'nullable|string|max:100',
            'city' => 'nullable|string',
            'postal_code' => 'nullable|size:5',
            'rent_price' => 'nullable|numeric|min:0|max:999999.99',
            'rented' => 'nullable|boolean',
        ];

        $messages = [
            'id.required' => 'Por favor introduzca un ID',
            'id.numeric' => 'Por favor el ID ha de ser un numero.',
            'address.string' => 'Por favor la direccion han de ser letras y espacios.',
            'address.max' => 'Por favor la direccion no puede tener mÃ¡s de 100 caracteres.',
            'city.string' => 'Por favor la ciudad han de ser letras y espacios.',
            'postal_code.size' => 'Por favor el codigo postal ha de tener 5 caracteres.',
            'rent_price.numeric' => 'Por favor el precio de alquiler tiene que ser un numero',
            'rent_price.min' => 'Por favor el precio de alquiler ha de ser un numero positivo.',
            'rent_price.max' => 'Por favor el precio de alquiler como maximo puede tener dos decimales.',
            'rented.boolean' => 'El campo rented ha de ser un booleano.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        return $next($request);
    }
}
