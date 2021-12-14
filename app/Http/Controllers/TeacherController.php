<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile(){
        $user_id = Auth()->user()->id;
        $teacher = DB::table('teachers')
            ->join('users', 'teachers.user','=', 'users.id')
            ->where('users.id', '=',$user_id)
            ->select('users.*', 'teachers.*')
            ->first();
        return view('teachers.teacher_profile')->with('teacher', $teacher);
    }
}
