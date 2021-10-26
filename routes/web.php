<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

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
if (User::where("user_type","=", 1)->exists())
{
    Route::get('/register', function() {
        return redirect('/login');
    });
}

Route::get('ajustes', function(){
    return view('profile.index');
})->name('user.profile.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth')->name('home');

/*ESTUDIANTE*/
Route::get('/carga-academica', function () {
    return view('students/academic_charge');
})->middleware('auth')->name('studensts.academic_charge');

Route::get('/boletin', function () {
    return view('students/bulletin');
})->middleware('auth')->name('studensts.bulletin');

Route::get('/perfil-estudiante', function () {
    return view('students/student_profile');
})->middleware('auth')->name('students.profile');

Route::get('/ajuste-estudiante', function () {
    return view('students/settings');
})->middleware('auth')->name('students.settings');

Route::get('/historial', function () {
    return view('students/historial');
})->middleware('auth')->name('students.history');

Route::get('/sol-revision', function () {
    return view('students/sol_revision');
})->middleware('auth');

/* PROFESOR */
Route::get('/secciones-prof', function () {
    return view('teachers/assigned_sections');
})->middleware('auth')->name('teacher.assigned_sections');

Route::get('/perfil-profesor', function () {
    return view('teachers/teacher_profile');
})->middleware('auth')->name('teacher.profile');

Route::get('/ajuste-profesor', function () {
    return view('teachers/settings');
})->middleware('auth');

Route::get('/cargar-corte', function () {
    return view('teachers/load_cut');
})->middleware('auth')->name('teacher.load_cut');

Route::get('/cargar-evaluacion', function () {
    return view('teachers/load_evaluations');
})->middleware('auth')->name('teacher.load_evaluations');

Route::get('/cargar-nota', function () {
    return view('teachers/upload_notes');
})->middleware('auth')->name('teacher.upload_notes');

Route::get('/revision-nota', function () {
    return view('teachers/review_notes');
})->middleware('auth')->name('teacher.review_notes');

Route::get('/sustitutiva-nota', function () {
    return view('teachers/substitute_note');
})->middleware('auth')->name('teacher.substitute_note');

Route::get('/revision-examen', function () {
    return view('teachers/revision_exam');
})->middleware('auth');
