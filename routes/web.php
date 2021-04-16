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

Route::get('/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('main');
});

Route::get('/students/{lang}' , [StudentController::class , 'index'])->name('students');
Route::get('/faculty/{lang}' ,[FacultyController::class , 'index'])->name('faculties');

Route::get('/faculty/create/{lang}', function($lang) {
    App::setlocale($lang);
    return view('faculty.create');
});

Route::post('/faculty/create/{lang}', [FacultyController::class, 'store'])-> name('add-faculty');

Route::get('/students/create/{lang}', function($lang) {
    App::setlocale($lang);
    return view('students.create_student');
});

Route::post('/students/create/{lang}', [StudentController::class, 'store'])-> name('add-student');

Route::get('/mail/send/', [MailController::class, 'index']) -> name('send-mail');
Route::post('/mail/send/', [MailController::class, 'send']) -> name('send_mail');
