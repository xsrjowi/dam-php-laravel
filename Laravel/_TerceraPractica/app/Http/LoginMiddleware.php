<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginMiddleware
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
            'email' => 'required|email',
            'password' => 'required|min:5',
        ];

        $messages = [
            'email.required' => 'Por favor introduzca su correo.',
            'email.email' => 'Por favor introduzca un formato correcto para su correo.',
            'password.required' => 'Por favor introduzca su contraseña.',
            'password.min' => 'Por favor la contraseña ha de tener un mínimo de 5 caracteres.',
        ];

        $validator = \Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        return $next($request);
    }
}
