<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorSchedule;
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'number' => 'required|digits:10|regex:/^[0-9]{10}$/',
            'password' => 'required'
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

    public function doctorsList()
    {
        $doctors = User::where('user_type', 'Doctor')->paginate(8);
        return view('admin.AdminDoctors', compact('doctors'));
    }

    public function getThisDoctorProfile($id)
    {
        $user = User::find($id);
        $doctor = Doctor::with('schedules')->where('user_id', $id)->first();
        // echo "<pre>";
        // print_r($doctor);
        // die;

        if ($doctor == null) {
            // echo 'NULL';
            return redirect('Admin/AdminDoctorDetailsForm/' . $id)->with('DoctorDetailsNotFound', 'This Doctor not submit it\'s Information!');
        } else {
            // echo 'Not Null';
            return view('admin.AdminDoctorProfile', compact('user', 'doctor'));
        }
    }

    public function deleteThisDoctor($id)
    {
        User::where('id', $id)->delete();
        return redirect('Admin/Doctors')->with('DoctorDeletedDone', 'Doctor removed successfully');
    }

    public function getAddDoctorDetailsFormData($id)
    {
        $doctor = User::find($id);
        // echo "<pre>";
        // print_r($doctor->toArray());
        // die;
        return view('admin.AdminDoctorDetailsForm', compact('doctor'));
    }

    public function saveDoctorDetails(Request $req)
    {
        // echo "<pre>";
        // print_r($req->all());
        // die;

        $req->validate([
            'image' => 'image',
            'expertise' => 'required',
            'experience' => 'required|numeric',
            'education' => 'required',
            'profession' => 'required',
            'days' => 'required|array|min:1',
        ]);

        $file = $req->image;
        $name = time() . "." . $file->getClientOriginalExtension();
        $file->move(public_path('upload/doctors'), $name); // move file on upload folder

        $doctor = Doctor::create([
            'image' => $name,
            'user_id' => $req->user_id,
            'expertise' => $req->expertise,
            'experience' => $req->experience,
            'education' => $req->education,
            'profession' => $req->profession,
        ]);

        foreach ($req->days as $day) {
            DoctorSchedule::create([
                'doctor_id' => $doctor->id,
                'day' => $day,
                'start_time' => $req->start_time,
                'end_time' => $req->end_time
            ]);
        }

        return redirect('Admin/DoctorProfile/' . $req->user_id)->with('doctorDetailsAddOkay', 'Doctor Details add and save successfully');
    }

    public function getAdminEditDoctorDetailsFormData($id)
    {
        $user = User::find($id);
        $doctor = Doctor::with('schedules')->where('user_id', $id)->first();
        // echo "<pre>";
        // print_r($doctor->toArray());
        // die;
        $days[] = "";
        $i = 0;
        foreach ($doctor->schedules as $schedule) {
            $days[$i] = $schedule['day'];
            $i++;
        }
        return view('admin.AdminEditDoctorDetailsForm', compact('user', 'doctor', 'days'));
    }

    public function saveThisDoctorDetails(Request $req)
    {
        // echo "<pre>";
        // print_r($req->all());
        // die;
        if ($req->hasFile('image')) {
            $file = $req->image;
            $name = time() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('upload/doctors'), $name);
        }

        $user = User::find($req->user_id);

        $user->name = $req->name;
        $user->email = $req->email;
        $user->number = $req->number;

        $user->save();

        $doctor = Doctor::find($req->id);

        $doctor->expertise = $req->expertise;
        $doctor->experience = $req->experience;
        $doctor->education = $req->education;
        $doctor->profession = $req->profession;

        $doctor->save();

        DoctorSchedule::where('doctor_id', $req->id)->delete(); // delete old all data for this doctor

        // echo "<pre>";
        // print_r($req->days);
        // die;
        foreach ($req->days as $day) {
            DoctorSchedule::create([
                'doctor_id' => $req->id,
                'day' => $day,
                'start_time' => $req->start_time,
                'end_time' => $req->end_time
            ]);
        }
        return redirect('Admin/DoctorProfile/' . $req->user_id)->with('ThisDoctorEditedOkay', 'This Doctor Details Edited and Saves successfully');
    }
}
