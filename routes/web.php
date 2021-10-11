<?php

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
})->middleware('auth');

Route::get('/perfil-profesor', function () {
    return view('teachers/teacher_profile');
})->middleware('auth');

Route::get('/ajuste-profesor', function () {
    return view('teachers/settings');
})->middleware('auth');

Route::get('/cargar-corte', function () {
    return view('teachers/cargacorte');
})->middleware('auth');

Route::get('/cargar-evaluacion', function () {
    return view('teachers/cargaeval');
})->middleware('auth');

Route::get('/cargar-nota', function () {
    return view('teachers/cargarnota');
})->middleware('auth');

Route::get('/revision-nota', function () {
    return view('teachers/revision_nota');
})->middleware('auth');

Route::get('/sustitutiva-nota', function () {
    return view('teachers/sustitutiva_nota');
})->middleware('auth');

Route::get('/revision-examen', function () {
    return view('teachers/revision_exam');
})->middleware('auth');
