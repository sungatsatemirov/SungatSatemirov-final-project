<?php

use Illuminate\Support\Facades\Route;
use App\Models\Faculty ; 
use App\Models\Student ;

use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::get('/students' , [StudentController::class , 'index']);
Route::get('/faculty' ,[FacultyController::class , 'index']);

Route::get('/faculty/create', function() {
    return view('faculty.create');
});

Route::post('/faculty/create', [FacultyController::class, 'store'])-> name('add-faculty');

Route::get('/students/create', function() {
    return view('students.create_student');
});

Route::post('/students/create', [StudentController::class, 'store'])-> name('add-student');
Route::get('mail/send', [MailController::class, 'send']);
