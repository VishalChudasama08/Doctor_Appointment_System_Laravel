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

    public function getDoctorListForFilter(Request $req)
    {
        // // echo "<pre>";
        // // print_r($req->toArray());
        // // die;
        // $user = User::with(['doctorDetails:user_id,image,expertise,experience,education,profession'])->where('user_type', 'Doctor')->get();
        // // echo "<pre>";
        // // print_r($user->toArray());
        // // die;
        // $doctors = [];
        // $i = 0;
        // foreach ($user as $u) {
        //     $doctors[$i]['id'] = $u->id;
        //     $doctors[$i]['name'] = $u->name;
        //     $doctors[$i]['image'] = $u->doctorDetails->first()->image;
        //     $doctors[$i]['expertise'] = $u->doctorDetails->first()->expertise;
        //     $doctors[$i]['experience'] = $u->doctorDetails->first()->experience;
        //     $doctors[$i]['education'] = $u->doctorDetails->first()->education;
        //     $doctors[$i]['profession'] = $u->doctorDetails->first()->profession;
        //     $i++;
        // }
        // // echo "<pre>";
        // // print_r($doctors);
        // // die;
        // return view('FilterDoctors', compact('doctors'));



        // echo "<pre>";
        // print_r($req->toArray());
        // die;
        $query = User::with(['doctorDetails'])->where('user_type', 'Doctor');

        if ($req->filled('expertise')) {

            $query->whereHas('doctorDetails', function ($q) use ($req) {
                $q->whereIn('expertise', $req->expertise);
            });
        }

        if ($req->filled('experience')) {

            $query->whereHas('doctorDetails', function ($q) use ($req) {

                $q->where(function ($sub) use ($req) {

                    foreach ($req->experience as $exp) {

                        if ($exp == "0-5") {
                            $sub->orWhereBetween('experience', [0, 5]);
                        } elseif ($exp == "6-10") {
                            $sub->orWhereBetween('experience', [6, 10]);
                        } elseif ($exp == "11-15") {
                            $sub->orWhereBetween('experience', [11, 15]);
                        } elseif ($exp == "16+") {
                            $sub->orWhere('experience', '>=', 16);
                        }
                    }
                });
            });
        }

        if ($req->filled('profession')) {

            $query->whereHas('doctorDetails', function ($q) use ($req) {
                $q->whereIn('profession', $req->profession);
            });
        }

        $user = $query->get();

        $doctors = [];

        foreach ($user as $i => $u) {

            $details = $u->doctorDetails->first();

            if (!$details) continue;

            $doctors[$i]['id'] = $u->id;
            $doctors[$i]['name'] = $u->name;
            $doctors[$i]['image'] = $details->image;
            $doctors[$i]['expertise'] = $details->expertise;
            $doctors[$i]['experience'] = $details->experience;
            $doctors[$i]['education'] = $details->education;
            $doctors[$i]['profession'] = $details->profession;
        }

        return view('FilterDoctors', compact('doctors'));
        // }
        // echo "<pre>";
        // print_r($query->get()->toArray());
        // die;
        // return view('FilterDoctors', compact('doctors'));
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
