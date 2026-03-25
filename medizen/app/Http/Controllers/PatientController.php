<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function patientList()
    {
        $patients = User::where('user_type', 'Patient')->paginate(8);
        return view('admin.AdminPatients', compact('patients'));
    }
    public function deleteThisPatient($id)
    {
        User::where('id', $id)->delete();
        return redirect('Admin/Patients');
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
}
