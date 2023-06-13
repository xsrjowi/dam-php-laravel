<?php

namespace App\Http\Controllers;

use App\Http\Middleware\ApartmentMiddleware;
use App\Models\Apartment;
use App\Models\Platform;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Models\User;
use App\Models\PlatformApartment;

class ApartmentController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $apartments = Apartment::all();
        return response()->json($apartments);
    }
    public function store(Request $request): JsonResponse
    {
        /*$user = auth::User();*/
        $apartment = new Apartment();
        $apartment->address = $request->input('address');
        $apartment->city = $request->input('city');
        $apartment->postal_code = $request->input('postal_code');
        $apartment->rented_price = $request->input('rented_price');
        $apartment->rented = $request->input('rented');
        $apartment->user_id = $request->input('user_id');
        /*$apartment->user_id = $user->id;*/
        $apartment->save();
        return response()->json($apartment, 201);
    }

    public function destroy($id)
    {
        $apartment = Apartment::findOrFail($id);
        $apartment->delete();
        return response()->json(['message' => 'Apartmento Eliminado Correctamente'], 200);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $apartment = Apartment::find($id);
        $apartment->address = $request->input('address', $apartment->address);
        $apartment->city = $request->input('city', $apartment->city);
        $apartment->postal_code = $request->input('postal_code', $apartment->postal_code);
        $apartment->rented_price = $request->input('rented_price', $apartment->rented_price);
        $apartment->rented = $request->input('rented', $apartment->rented);
        $apartment->user_id = $request->input('user_id', $apartment->user_id);
        $apartment->save();
        return response()->json(['message' => 'Apartmento Actualizado Correctamente'], 200);
    }
    public function show($id): JsonResponse
    {
        $apartments = Apartment::where('id', $id)->with([
            'platforms' => function ($query) {
                $query->select('owner', 'name')->get();
            }])->get();
            return response()->json($apartments);
    }
}
