<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Database\Seeders\UserTypesSeeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
    public function profile(Student $student)
    {
        $id = Auth()->user()->id;
        $profile = DB::table('students')
            ->join('users','users.id','=','students.user')
            ->join('careers','students.career','=','careers.code')
            ->where('users.id','=',$id)
            ->select('students.*', 'users.*','careers.career as career_name')
            ->first();
        //var_dump( $profile); die();
        return view('students/student_profile', compact('profile', 'id'));

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
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'phone1' => ['regex:/^[0-9]{4}-?[0-9]{7}/','max:12'],
            'phone2' => ['regex:/^[0-9]{4}-?[0-9]{7}/','max:12'],
            'address' => ['required'],
            'email' => ['required', 'email'],
            'photo' => ['mimes:jpg,jpeg,png'],
        ]);
        $photo = $request->file('photo')->store('public/profile');
        //var_dump($data); die();

        if(isset($data['photo'])){

            $img_url = DB::table('users')
                ->where('id','=', $user->id)
                ->select('photo')
                ->first();
            if($img_url){
                $file = str_replace('storage', 'public', $img_url->photo);
                Storage::delete($file);
            }
            $photo_url = Storage::url($photo);
            $user->photo = $photo_url;
        }
        $user->telephone = $data['phone1'];
        $user->mobile = $data['phone2'];
        $user->address = $data['address'];
        $user->email = $data['email'];
        $user->save();
        //return redirect()->action([StudentController::class, 'show'])->with('store','Actualizado');
        return redirect()->route('students.student_profile')->with('store', 'Estudiante actualizado correctamente');

        // DB::table('users')
        // ->where('id','=', $id)
        // ->update(['telephone' => $data['phone1'],
        //              'mobile' => $data['phone2'],
        //             'address' => $data['address'],
        //              'email' => $data['email'],
        //              'photo' => $data['photo']]);
        // return redirect()->route('students.student_profile')->with('store', 'Estudiante actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function constance(Student $student)
    {
        return view('students.constancia');
    }

     public function destroy(Student $student)
    {
        //
    }
}
