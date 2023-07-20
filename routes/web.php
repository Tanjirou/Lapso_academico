<?php

use App\Http\Livewire\AcademicCurriculum\Index as AcademicCurriculumComponent;
use App\Http\Livewire\Departments\Index as DepartmentComponent;
use App\Http\Livewire\User\Index as UserComponent;
use App\Http\Livewire\Subjects\Index as SubjectsComponent;
use App\Http\Livewire\DepartmentSection\Index as DepartmentSectionComponent;
use App\Http\Livewire\User\Edit\Index as UserEditComponent;
use App\Http\Livewire\StrucSection\Index as StructureSectionComponent;
use App\Http\Livewire\AcademicLapse\Index as AcademicLapseComponent;
use App\Http\Livewire\Sections\Index as SectionsComponent;
use App\Http\Livewire\DetailSection\Index as DetailSectionComponent;
use App\Http\Livewire\Mentions\Index as MentionsComponent;
use App\Http\Livewire\DepartmentResources\Index as DepartmentResourcesComponent;
use App\Http\Livewire\Reports\EvaluationResult\Index as EvaluationResultComponent;
use App\Http\Livewire\Reports\OpenSection\Index as OpenSectionComponent;

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
//BASE DE DATOS
Route::get('export', [AdministratorController::class, 'export'])->middleware(['auth','administrator'])->name('administrator.export');
Route::get('empty', [AdministratorController::class, 'empty'])->middleware(['auth','administrator'])->name('administrator.empty');


Route::get('/profile', [AdministratorController::class,'profile'])->middleware('auth')->name('administrator.profile');
Route::post('/profile/store/{user}', [AdministratorController::class,'profile_update'])->middleware('auth')->name('administrator.profile_update');
Route::get('/users-create',[AdministratorController::class, 'users_create'])->middleware(['auth','administrator'])->name('administrator.users_create');
Route::post('/users-create/store', [AdministratorController::class, 'users_create_store'])->name('administrator.users_create_store');
Route::get('/users-restore',[AdministratorController::class, 'users_restore'])->middleware(['auth','administrator'])->name('administrator.users_restore');
Route::post('/users-restore/password',[AdministratorController::class, 'users_restore_password'])->middleware(['auth','administrator'])->name('administrator.users_restore_password');
Route::post('/users-restore/factor',[AdministratorController::class, 'users_restore_factor'])->middleware(['auth','administrator'])->name('administrator.users_restore_factor');
// Route::get('/users-modify',[AdministratorController::class, 'users_modify'])->name('administrator.users_modify');
Route::get('academic-lapse',AcademicLapseComponent::class)->middleware(['auth','administrator'])->name('academic_lapse.index');

Route::get('users-create',UserComponent::class)->Middleware(['auth','administrator'])->name('user.create');
Route::post('users-create',[UserComponent::class, 'store'])->Middleware(['auth','administrator'])->name('user.store');
Route::get('/users-list',[UserComponent::class, 'usersList'])->middleware(['auth','administrator'])->name('users.list');
Route::delete('/users-list/{user}',[UserComponent::class, 'delete'])->middleware(['auth','administrator'])->name('users.delete');
Route::get('/users-list/{user}',UserEditComponent::class)->middleware(['auth','administrator'])->name('user.edit');
Route::put('/users-list/{user}',[UserEditComponent::class,'update'])->middleware(['auth','administrator'])->name('user.updated');

Route::get('/user-edit/{user}',[UserDepComponent::class, 'render'])->middleware(['auth','administrator'])->name('user.edit_u');

Route::put('/user-update/{userId}',[UserComponent::class, 'update'])->middleware(['auth','administrator'])->name('user.edit_store');

Route::get('pensum',AcademicCurriculumComponent::class)->Middleware(['auth','administrator'])->name('academic_curriculum.index');
Route::get('departments',DepartmentComponent::class)->middleware(['auth','administrator'])->name('departments.index');
Route::get('subjects',SubjectsComponent::class)->middleware(['auth','administrator'])->name('subjects.index');
Route::post('subjects',SubjectsComponent::class)->middleware(['auth','administrator']);
Route::get('departments-section',DepartmentSectionComponent::class)->middleware(['auth','administrator'])->name('department_section.index');



Route::get('mentions', MentionsComponent::class)->middleware(['auth','administrator'])->name('mentions.index');
if (Schema::hasTable('users') && count(DB::table('users')->get())>0)
{
    Route::get('/register', function() {
        return redirect('/login');
    });
}

Route::get('ajustes', function(){
    return view('profile.index');
})->middleware('auth')->name('user.profile.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth')->name('home');




/* PROFESOR */
Route::get('sections',SectionsComponent::class)->middleware(['auth','head'])->name('sections.index');
Route::get('qualify-student',DetailSectionComponent::class)->name('detail_section.index');

Route::get('structure-section',StructureSectionComponent::class)->middleware(['auth','head'])->name('section-struc.index');
Route::get('department-resources',DepartmentResourcesComponent::class)->middleware(['auth','departmentHead'])->name('department-resources.index');


/* MENU - GESTION SECCIONES */
//Route::get('sections', [TeacherController::class, 'createSection'])->Middleware('auth')->name('teachers.create_section');
// Route::get('asignar-seccion', [TeacherController::class, 'assignedSection'])->Middleware('auth')->name('teachers.assigned_sections');
// Route::get('listado-secciones', [TeacherController::class, 'listSection'])->Middleware('auth')->name('teachers.list_sections');

//REPORTES
Route::get('evaluation-result',EvaluationResultComponent::class)->middleware('auth')->name('reports.evaluation-result.index');
Route::get('open-section',OpenSectionComponent::class)->middleware(['auth','notTeacher'])->name('reports.open-section.index');
