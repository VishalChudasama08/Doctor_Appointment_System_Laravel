<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    public function getDoctorsList()
    {
        $user = User::with(['doctorDetails:user_id,expertise,experience'])->where('user_type', 'Doctor')->get();
        // echo "<pre>";
        // print_r($user->toArray());

        $doctors = [];
        $i = 0;
        foreach ($user as $u) {
            // print_r($u->id);
            // echo "\t";
            // print_r($u->name);
            // echo "\t\t";
            // print_r($u->doctorDetails->first()->expertise);
            // echo "<br>";
            $doctors[$i]['id'] = $u->id;
            $doctors[$i]['name'] = $u->name;
            $doctors[$i]['expertise'] = $u->doctorDetails->first()->expertise;
            $doctors[$i]['experience'] = $u->doctorDetails->first()->experience;
            $i++;
        }
        // echo "<pre>";
        // print_r($doctors);
        // die;
        return view('doctors', compact('doctors'));
    }

    public function getThisDoctorDetails($id)
    {
        $user = User::find($id);
        $doctor = Doctor::with('schedules')->where('user_id', $id)->first();

        $days[] = "";
        $i = 0;
        foreach ($doctor->schedules as $schedule) {
            $days[$i] = $schedule['day'];
            $i++;
        }

        return view('doctor-details', compact('user', 'doctor', 'days'));
    }
}
