<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{

    public function dashboard()
    {
        $doctors = User::where('user_type', 'Doctor')->paginate(8);
        $patients = User::where('user_type', 'Patient')->paginate(8);

        // echo "<pre>";
        // print_r($data);
        // die;

        return view('admin.AdminDashboard', compact('doctors', 'patients'));
    }



    // ============= Patient Control =============

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

    // ============= Doctor Control =============

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

    public function deleteThisDoctor($id)
    {
        User::where('id', $id)->delete();
        return redirect('Admin/Doctors')->with('DoctorDeletedDone', 'Doctor removed successfully');
    }

    public function getThisDoctorProfile($id)
    {
        $info = User::find($id);
        $detail = Doctor::where('user_id', $id)->get();
        // echo "<pre>";
        // print_r($doctor);
        // die;
        $doctor = [
            'name' => $info->name,
            'email' => $info->email,
            'number' => $info->number,
            'image' => $detail[0]->image,
            'expertise' => $detail[0]->expertise,
            'experience' => $detail[0]->experience,
            'education' => $detail[0]->education,
            'profession' => $detail[0]->profession,
            'available_days' => $detail[0]->available_days,
            'available_time' => $detail[0]->available_time
        ];

        return view('admin.AdminDoctorProfile', compact('doctor'));
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
