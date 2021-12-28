<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function profile(){
        $user_id = Auth()->user()->id;
        $teacher = DB::table('teachers')
            ->join('users', 'teachers.user','=', 'users.id')
            ->where('users.id', '=',$user_id)
            ->select('users.*', 'teachers.*')
            ->first();
        return view('teachers.teacher_profile')->with('teacher', $teacher)->with('user_id', $user_id);
    }

    public function teacher_update(Request $request, User $user){
        $data = $request->validate([
           'email' => ['required', 'email'],
           'phone1' => ['numeric','digits_between:11,11'],
           'phone2' => ['numeric','digits_between:11,11'],
           'photo' => ['required', 'mimes:jpg,jpeg,png'],
           'address' => ['required'],
        ]);
        $photo = $request->file('photo')->store('public/profile');

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
        $user->email = $data['email'];
        $user->telephone = $data['phone1'];
        $user->mobile = $data['phone2'];
        $user->address = $data['address'];
        $user->save();
        return redirect()->action([TeacherController::class, 'profile']);
    }
}
