<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return response()->json(Reservation::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:10|min:9',
            'service' => 'required|string|max:128',
        ]);

        $reservation = Reservation::create($request->all());

        return response()->json($reservation, 201);
    }
    
    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return response()->json(null, 204);
    }
}
