<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class DoctorController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user(); // logged-in user 
        $doctor = Doctor::where('user_id', $user->id)->get();
        $data = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'number' => $user->number,
            'user_type' => $user->user_type,
            'image' => $doctor[0]->image,
            'expertise' => $doctor[0]->expertise,
            'experience' => $doctor[0]->experience,
            'education' => $doctor[0]->education,
            'profession' => $doctor[0]->profession,
            'available_days' => $doctor[0]->available_days,
            'available_time' => $doctor[0]->available_time
        ];

        // echo "<pre>";
        // print_r($data);
        // die;

        return view('doctor.DoctorDashboard', compact('data'));
    }

    public function getDoctorProfile()
    {
        $info = Auth::user();
        $detail = Doctor::where('user_id', $info->id)->get();
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
        return view('doctor.DoctorProfile', compact('doctor'));
    }

    public function editDoctor($id)
    {
        $user = User::find($id);
        $doctor = Doctor::where('user_id', $id)->first();
        // echo "<pre>";
        // print_r($user->toArray());
        // echo $user->name;
        // print_r($doctor->toArray());
        // echo $doctor->user_id;
        // die;
        return view('doctor.DoctorEditProfileForm', compact('user', 'doctor'));
    }
}
