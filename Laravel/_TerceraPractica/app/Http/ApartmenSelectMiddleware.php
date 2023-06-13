<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApartmentSelectMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $rules = [
            'id' => 'required|numeric',
        ];

        $messages = [
            'id.required' => 'Por favor, ingrese el ID del apartamento.',
            'id.numeric' => 'El ID del apartamento debe ser un número.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 400);
        }

        return $next($request);
    }
}
