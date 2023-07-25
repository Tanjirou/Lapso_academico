<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teacher;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public $teacher;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $users)
    {
        //$user = User::find($id);
        //dd($user);
        $users = DB::table('users')
        ->join('students', 'users.id','=','students.user')
        ->select('students.*','users.*')
        ->first();
       // return view('students/student_profile', compact('user'));
        return view('students/student_profile')->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function nameDepartment(Teacher $teachers){

        $id = User::where('userid', auth()->user()->id)->first();
        if ($id == 2) {
            $teachers = Teacher::where('id', '=', 'users.user_type')
                ->select('teachers.*');

                // ->get();
            $teachers =  $teachers->get();
        // return view('layouts.app', compact('department'));

        return view('dashboard')->with('teachers',$teachers);
        // return view('administrator.users.modify')->with('users',$users);
        }
    }
}
