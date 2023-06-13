<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Platform;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Models\User;
use App\Models\PlatformApartment;

class ApartmentConsultasController extends Controller
{
    public function apartmentCity($city): JsonResponse
    {
        $apartments = Apartment::where('city', $city)->with([
        'platforms' => function ($query) {
            $query->select('owner', 'name')->get();
        }
        ])->get();
        return response()->json($apartments);
    }
    public function apartmentRented($rented): JsonResponse
    {
            $apartments = Apartment::where('rented', $rented)
            ->with(['platforms' => function ($query) {
                $query->select('owner');
            }])
            ->get();
        return response()->json($apartments);
    }
    public function apartmentPremium(): JsonResponse
    {
        $apartments = Apartment::where('rented_price', '>', 1000)->with(['platforms' => function ($query) {
            $query->select('owner');
        }])->get();
        return response()->json($apartments);
    }

    public function platformApartment($id): JsonResponse
    {
        $platform = Platform::where('id', $id)->get();
        return response()->json($platform);
    }
}
