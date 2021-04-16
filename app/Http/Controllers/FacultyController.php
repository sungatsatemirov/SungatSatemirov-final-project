<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use App\Models\Faculty ; 

class FacultyController extends Controller
{
    //
    public function index($lang) {
        App::setlocale($lang);
        $faculty = Faculty::all();

        return view('faculty.faculty_view')->with(['faculty' => $faculty]);
    }
    public function store(Request $request) {
        Faculty::create([
            'name' => $request->name
        ]);
        return back();
    }
}
