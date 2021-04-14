<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use App\Models\Student ;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    //
    public function index() {
        $students = Student::all();

        return view('students.student_view')->with(['students' => $students]);
    }
    public function store(Request $request) {
        $this->validate($request, [
            'photo' => 'mimes:jpeg,png,jpg',
          ]);

          
          if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $url = 'uploads';
            $file->move($url, $file->getClientOriginalName());
            $url = '/uploads/'.$file->getClientOriginalName();

            $user = Student::create([
                'name' => $request->name,
                'age' => $request->age,
                'faculty_id' => $request->faculty_id ,
                'photo' => $url
            ]);

        return back();
    }
    else {
        abort(501, 'There is some problem with uploading image');
    }
}

}
