<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        return response()->json(Courses::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:10|min:9',
        ]);

        $reservation = Courses::create($request->all());

        return response()->json($reservation, 201);
    }
    
    public function destroy($id)
    {
        $course = Courses::findOrFail($id);
        $course->delete();

        return response()->json(null, 204);
    }
}
