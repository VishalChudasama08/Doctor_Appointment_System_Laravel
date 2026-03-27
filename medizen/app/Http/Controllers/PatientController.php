<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class PatientController extends Controller
{
    public function dashboard()
    {
        // $user = Auth::user(); // logged-in user 
        // return view('patient.PatientDashboard', compact('user'));
        return view('patient.PatientDashboard');
    }
    public function patientProfile()
    {
        $user = Auth::user();
        $data = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'number' => $user->number
        ];
        return view('patient.PatientProfile', compact('data'));
    }
    public function editPatientForm($id)
    {
        $user = User::find($id);
        // echo "<pre>";
        // print_r($user->toArray()());
        // die;
        return view('patient.PatientEditProfile', compact('user'));
    }
    public function editPatient(Request $req)
    {
        // echo "<pre>";
        // print_r($req->all());
        // die;
        $user = User::find($req->id);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->number = $req->number;

        // echo "<pre>";
        // print_r($req->toArray());
        // die;

        $user->save();
        return redirect('Patient/PatientDashboard');
    }
    public function deletePatient($id)
    {
        User::find($id)->delete();
        Auth::logout();
        return redirect('index');
    }
}
