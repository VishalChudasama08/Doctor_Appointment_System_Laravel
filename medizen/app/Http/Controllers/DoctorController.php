<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function registerDoctor(Request $req)
    {
        // echo "<pre>";
        // print_r($req->all());
        // die;
        $req->validate([
            'number' => 'required|digits:10|regex:/^[0-9]{10}$/'
        ]);
        $data = User::create([
            'user_type' => $req->userType,
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
            'number' => $req->number
        ]);
        // echo $data['id'];
        // die;
        return redirect('Admin/AdminDoctorDetailsForm/' . $data['id'])->with('DoctorRegisterOKay', 'Doctor Register successfully');
    }

    public function addDoctorDetails($id)
    {
        $doctor = User::find($id);
        // echo "<pre>";
        // print_r($doctor->toArray());
        // die;
        return view('admin.AdminDoctorDetailsForm', compact('doctor'));
    }

    public function doctorsList()
    {
        $doctors = User::where('user_type', 'Doctor')->paginate(8);
        return view('admin.AdminDoctors', compact('doctors'));
    }

    public function saveDoctorDetails(Request $req)
    {
        // echo "<pre>";
        // print_r($req->all());
        // die;

        $file = $req->image;
        $name = time() . "." . $file->getClientOriginalExtension();
        $file->move(public_path('upload/doctors'), $name); // move file on upload folder

        Doctor::create([
            'image' => $name,
            'user_id' => $req->user_id,
            'expertise' => $req->expertise,
            'experience' => $req->experience,
            'education' => $req->education,
            'profession' => $req->profession,
            'available_days' => $req->available_days,
            'available_time' => $req->available_time
        ]);

        return redirect('Admin/Doctors')->with('doctorDetailsAddOkay', 'Doctor Details add and save successfully');
    }
}
