<?php

use App\Http\Livewire\AcademicCurriculum\Index as AcademicCurriculumComponent;
use App\Http\Livewire\Departments\Index as DepartmentComponent;
use App\Http\Livewire\User\Index as UserComponent;
use App\Http\Livewire\Subjects\Index as SubjectsComponent;
use App\Http\Livewire\DepartmentSection\Index as DepartmentSectionComponent;
use App\Http\Livewire\User\Edit\Index as UserEditComponent;
use App\Http\Livewire\SectionStruc\Index as StructureSectionComponent;

use App\Http\Livewire\Mentions\Index as MentionsComponent;

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\EnrolledSubjectController;
use App\Models\Academic_Curriculum;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
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
// if (User::where("user_type","=", 1)->exists())
// {
//     Route::get('/register', function() {
//         return redirect('/login');
//     });
// }

/*ADMINISTRADOR*/
Route::get('migrate', [AdministratorController::class, 'migrate'])->name('administrator.migrate');
Route::get('load-data', [AdministratorController::class,'load_data'])->name('administrator.load_data');
//Route::get('/perfil-admin', [AdministratorController::class,'profile'])->name('administrator.profile');
//Route::post('/perfil-admin/store/{user}', [AdministratorController::class,'profile_update'])->name('administrator.profile_update');
Route::get('export', [AdministratorController::class, 'export'])->name('administrator.export');
Route::get('/admin-profile', [AdministratorController::class,'profile'])->name('administrator.profile');
Route::post('/admin-profile/store/{user}', [AdministratorController::class,'profile_update'])->name('administrator.profile_update');
Route::get('/users-create',[AdministratorController::class, 'users_create'])->name('administrator.users_create');
Route::post('/users-create/store', [AdministratorController::class, 'users_create_store'])->name('administrator.users_create_store');
Route::get('/users-restore',[AdministratorController::class, 'users_restore'])->name('administrator.users_restore');
Route::post('/users-restore/password',[AdministratorController::class, 'users_restore_password'])->name('administrator.users_restore_password');
Route::post('/users-restore/factor',[AdministratorController::class, 'users_restore_factor'])->name('administrator.users_restore_factor');
// Route::get('/users-modify',[AdministratorController::class, 'users_modify'])->name('administrator.users_modify');

Route::get('users-create',UserComponent::class)->Middleware('auth')->name('user.create');
Route::post('users-create',[UserComponent::class, 'store'])->Middleware('auth')->name('user.store');
Route::get('/users-list',[UserComponent::class, 'usersList'])->middleware('auth')->name('users.list');
Route::get('/users-list/{user}',UserEditComponent::class)->middleware('auth')->name('user.edit');
Route::put('/users-list/{user}',[UserEditComponent::class,'update'])->name('user.updated');

Route::get('/user-edit/{user}',[UserDepComponent::class, 'render'])->name('user.edit_u');

Route::put('/user-update/{userId}',[UserComponent::class, 'update'])->name('user.edit_store');

Route::get('pensum',AcademicCurriculumComponent::class)->Middleware('auth')->name('academic_curriculum.index');
Route::get('departments',DepartmentComponent::class)->middleware('auth')->name('departments.index');
Route::get('subjects',SubjectsComponent::class)->middleware('auth')->name('subjects.index');
Route::get('departments-section',DepartmentSectionComponent::class)->middleware('auth')->name('department_section.index');
Route::get('mentions', MentionsComponent::class)->middleware('auth')->name('mentions.index');
if (Schema::hasTable('users') && count(DB::table('users')->get())>0)
{
    Route::get('/register', function() {
        return redirect('/login');
    });
}

Route::get('structure-section',StructureSectionComponent::class)->middleware('auth')->name('section-struc.index');

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
// Route::get('/carga-academica', function () {
//     return view('students/academic_charge');
// })->middleware('auth')->name('studensts.academic_charge');

Route::get('/carga-academica', [EnrolledSubjectController::class,'show'])->name('enrolled_subject.show');

Route::get('/boletin', function () {
    return view('students/bulletin');
})->middleware('auth')->name('studensts.bulletin');

// Route::get('/perfil-estudiante', function () {
//     return view('students/student_profile');
// })->middleware('auth')->name('students.profile');

Route::get('/perfil-estudiante', [StudentController::class,'profile'])->name('students.student_profile');
Route::post('/perfil-estudiante/store{user}', [StudentController::class,'update'])->name('students.update');
Route::get('/constancia', [StudentController::class,'constance'])->name('students.constance');

//Route::get('/perfil-estudiante', [UserController::class,'show'])->name('students.student_profile');


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
Route::post('section-create',StructureSectionComponent::class)->Middleware('auth')->name('section-struc.index');

/* MENU - GESTION SECCIONES */
Route::get('crear-seccion', [TeacherController::class, 'createSection'])->Middleware('auth')->name('teachers.create_section');
Route::get('asignar-seccion', [TeacherController::class, 'assignedSection'])->Middleware('auth')->name('teachers.assigned_sections');
Route::get('listado-secciones', [TeacherController::class, 'listSection'])->Middleware('auth')->name('teachers.list_sections');





// Route::get('/teacher-profile', [TeacherController::class, 'profile'])->name('teacher.profile');
// Route::post('/teacher-profile/store/{user}', [TeacherController::class, 'teacher_update'])->name('teacher.update_profile');
Route::get('/ajuste-profesor', function () {
    return view('teachers/settings');
})->middleware('auth');

Route::get('/cargar-corte', function () {
    return view('teachers/load_cut');
})->middleware('auth')->name('teacher.load_cut');

Route::get('/cargar-contenido', function () {
    return view('teachers/upload_content');
})->middleware('auth')->name('teacher.upload_content');

Route::get('/cargar-evaluacion', function () {
    return view('teachers/load_evaluations');
})->middleware('auth')->name('teacher.load_evaluations');

Route::get('/cargar-nota', function () {
    return view('teachers/upload_notes');
})->middleware('auth')->name('teacher.upload_notes');

Route::get('/revision-nota', function () {
    return view('teachers/review_notes');
})->middleware('auth')->name('teacher.review_notes');

Route::get('/sustitutivo', function () {
    return view('teachers/substitutes');
})->middleware('auth')->name('teacher.substitutes');

Route::get('/sustitutiva-nota', function () {
    return view('teachers/substitute_note');
})->middleware('auth')->name('teacher.substitute_note');

Route::get('/revision-examen', function () {
    return view('teachers/revision_exam');
})->middleware('auth');
