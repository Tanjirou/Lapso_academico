<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnrolledSubject;
use Illuminate\Support\Facades\DB;

class EnrolledSubjectController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(EnrolledSubject $enrolled_subject)
    {
        $id = auth()->user()->id;
        $load = DB::table('students')
            ->join('users','users.id','=','students.user')
            ->join('enrolled_subjects', 'enrolled_subjects.student_record','=','students.proceedings')
            ->select('students.*', 'users.*','enrolled_subjects.lapse')
            ->orderByDesc('lapse')
            ->first();


        $data_courses = DB::table('students')
            ->join('users','users.id','=','students.user')
            ->join('enrolled_subjects', 'enrolled_subjects.student_record','=','students.proceedings')
            ->join('courses','courses.code','=','enrolled_subjects.course')
            //->join('academic_offers','enrolled_subjects.course','=','academic_offers.course')
            //->join('academic_offers','users.dni','=','academic_offers.teacher_dni')
            ->where('enrolled_subjects.lapse','=', $load->lapse)
            ->where('users.id','=',$id)
            //->where('users.dni','=','academic_offers.teacher_dni')
            //->where('enrolled_subjects.course','=','academic_offers.course')
            //->where('users.type','=',2)
            ->select('students.user', 'users.id','enrolled_subjects.section as section',
                    'enrolled_subjects.qualification as qualif', 'enrolled_subjects.c_status_note as statusnote','courses.*')
            ->orderByDesc('lapse')
            ->get();

            // $data_courses = DB::table('students')
            // ->join('users','users.id','=','students.user')
            // ->join('enrolled_subjects', 'enrolled_subjects.student_record','=','students.proceedings')
            // ->join('courses','courses.code','=','enrolled_subjects.course')
            // //->join('academic_offers','enrolled_subjects.course','=','academic_offers.course')
            // ->join('academic_offers','users.dni','=','academic_offers.teacher_dni')
            // ->where('enrolled_subjects.lapse','=', $load->lapse)
            // ->where('users.id','=',$id)
            // //->where('users.dni','=','academic_offers.teacher_dni')
            // ->where('enrolled_subjects.course','=','academic_offers.course')
            // ->where('users.type','=',2)
            // ->select('students.user', 'users.id','enrolled_subjects.section as section',
            //         'enrolled_subjects.qualification as qualif', 'enrolled_subjects.c_status_note as statusnote',
            //         'courses.*','users.dni as dniprof','academic_offers.teacher_dni as td', 'users.names as namep')
            // ->orderByDesc('lapse')
            // ->get();

        // $dni_teachs = DB::table('students')
        //     ->join('users','users.id','=','students.user')
        //     ->join('enrolled_subjects', 'enrolled_subjects.student_record','=','students.proceedings')
        //     //->join('courses','courses.code','=','enrolled_subjects.course')
        //     ->join('academic_offers','enrolled_subjects.course','=','academic_offers.course')
        //     ->where('enrolled_subjects.lapse','=', $load->lapse)
        //     ->where('users.id','=',$id)
        //     ->where('enrolled_subjects.course','=','academic_offers.course')
        //     ->where('users.dni','=', 'academic_offers.teacher_dni')
        //     ->select('students.user', 'users.id','users.dni','academic_offers.teacher_dni')
        //     ->orderByDesc('teacher_dni')
        //     ->first();

        // $name_teachers = DB::table('enrolled_subjects')
        //     ->join('academic_offers','enrolled_subjects.course','=','academic_offers.course')
        //     ->join('users','academic_offers.teacher_dni','=','users.dni')
        //     //->join('courses','courses.code','=','enrolled_subjects.course')
        //     ->where('enrolled_subjects.lapse','=', $load->lapse)
        //     ->where('academic_offers.course','=', 'enrolled_subjects.course')
        //     ->select('users.dni','users.names as names_t')
        //     ->orderByDesc('lapse')
        //     ->first();

        // $name_teachers = DB::table('academic_offers')
        //     ->join('users', 'academic_offers.teacher_dni','=','users.dni')
        //     ->where('users.dni','=', $dni_teach->dni)
        //     ->select('users.names as names_teacher')
        //     ->get();

        //var_dump( $profile); die();
        return view('students/academic_charge', compact('load','data_courses'));
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
}
