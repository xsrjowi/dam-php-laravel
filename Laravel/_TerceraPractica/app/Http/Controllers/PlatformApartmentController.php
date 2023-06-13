<?php

namespace App\Http\Controllers;

use App\Models\PlatformApartment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Apartment;
use App\Models\Platform;
use Illuminate\Http\JsonResponse;

class PlatformApartmentController extends Controller
{
    public function platformApartment($id): JsonResponse
    {
        $platform = Platform::where('id', $id)->with('apartments')->get();
        return response()->json($platform);
    }
}
