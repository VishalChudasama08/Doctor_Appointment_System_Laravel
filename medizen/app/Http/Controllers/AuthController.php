<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller{
    public function loginProcess(Request $req){
        if(Auth::attempt(['email'=>$req->email, 'password'=>$req->password])){
            if(Auth::user()->user_type == 'Admin'){
                return redirect('/AdminDashboard');
            }
            if(Auth::user()->user_type == 'Patient'){
                return redirect('/PatientDashboard');
            }
            if(Auth::user()->user_type == 'Doctor'){
                return redirect('/DoctorDashboard');
            }
        } else {
            echo "Login Fail.";
        }
    }

    public function registerProcess(Request $req){
        // $file = $req->image;
        // $name = time().".".$file->getClientOriginalExtension();
        // $file->move(public_path('upload'), $name); // move file on upload folder

        User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>$req->password
        ]);

        return redirect('/login');
    }

    public function logoutProcess(){
        Auth::logout();
        return redirect('/');
    }
}
