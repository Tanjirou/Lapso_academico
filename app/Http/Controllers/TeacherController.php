<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function profile(){
    //     $user_id = Auth()->user()->id;
    //     $teacher = DB::table('teachers')
    //         ->join('users', 'teachers.user','=', 'users.id')
    //         ->where('users.id', '=',$user_id)
    //         ->select('users.*', 'teachers.*')
    //         ->first();
    //     return view('teachers.teacher_profile')->with('teacher', $teacher)->with('user_id', $user_id);
    // }

    // public function teacher_update(Request $request, User $user){
    //     $data = $request->validate([
    //        'email' => ['required', 'email'],
    //        'phone1' => ['regex:/^[0-9]{4}-?[0-9]{7}/','max:12'],
    //        'phone2' => ['regex:/^[0-9]{4}-?[0-9]{7}/','max:12'],
    //        'photo' => ['mimes:jpg,jpeg,png'],
    //        'address' => ['required'],
    //     ]);
    //     $photo = $request->file('photo')->store('public/profile');

    //     if(isset($data['photo'])){
    //         $img_url = DB::table('users')
    //             ->where('id','=', $user->id)
    //             ->select('photo')
    //             ->first();
    //         if($img_url){
    //             $file = str_replace('storage', 'public', $img_url->photo);
    //             Storage::delete($file);
    //         }
    //         $photo_url = Storage::url($photo);
    //         $user->photo = $photo_url;
    //     }
    //     $user->email = $data['email'];
    //     $user->telephone = $data['phone1'];
    //     $user->mobile = $data['phone2'];
    //     $user->address = $data['address'];
    //     $user->save();
    //     return redirect()->action([TeacherController::class, 'profile'])->with('store','Actualizado');
    // }

    public function createSection(){
        return view('teachers.create_section');
    }

    public function assignedSection(){
        return view('teachers.assigned_sections');
    }

    public function listSection(){
        return view('teachers.list_sections');
    }
}
