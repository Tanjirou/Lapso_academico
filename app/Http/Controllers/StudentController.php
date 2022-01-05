<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
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
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $id = auth()->user()->id;
        $profile = DB::table('students')
            ->join('users','users.id','=','students.user')
            ->join('careers','students.career','=','careers.code')
            ->where('users.id','=',$id)
            ->select('students.*', 'users.*','careers.career as career_name')
            ->first();
        //var_dump( $profile); die();
        return view('students/student_profile', compact('profile'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //^\+?[0-9]{3}-?[0-9]{6,12}$
        $id = auth()->user()->id;
        // var_dump($request['phone1']); die();
        $data = $request->validate([
            'phone1' => ['regex:/^[0-9]{4}-?[0-9]{7}/'],
            // 'phone1' => ['numeric'],
            'phone2' => ['regex:/^[0-9]{4}-?[0-9]{7}/'],
            'address' => ['string'],
            'email' => ['required', 'email'],
        ]);
        //var_dump($data); die();
        DB::table('users')
        ->where('id','=', $id)
        //(['telepone' => $data['mobile1], 'mobile' => $data['mobile2']] )
        ->update(['telephone' => $data['phone1'], 'mobile' => $data['phone2'], 'address' => $data['address'], 'email' => $data['email']]);
        return redirect()->route('students.student_profile')->with('success', 'Estudiante actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
