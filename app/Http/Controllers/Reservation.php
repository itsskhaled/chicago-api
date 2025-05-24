<?php

namespace App\Http\Controllers;

use App\Models\Reservation as ModelsReservation;
use Illuminate\Http\Request;

class Reservation extends Controller
{
    public function index()
    {
        Reservation::all();
        return response()->json(ModelsReservation::all());
    }
}
