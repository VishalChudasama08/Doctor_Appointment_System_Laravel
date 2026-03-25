<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;

Route::get('/login', function () {
    return view('loginPage');
});
Route::post('/loginNow', [AuthController::class, 'loginProcess']);

Route::get('/register', function () {
    return view('registerPage');
});
Route::post('/registerNow', [AuthController::class, 'registerProcess']);

Route::get('/logout', [AuthController::class, 'logoutProcess']);

Route::get('/Admin/AdminDashboard', function () {
    return view('admin.AdminDashboard');
});
Route::get('/Patient/PatientDashboard', function () {
    return view('patient.PatientDashboard');
});
Route::get('/Doctor/DoctorDashboard', function () {
    return view('doctor.DoctorDashboard');
});



// ================ Admin Router's ================
Route::get('Admin/Patients', [PatientController::class, 'patientList']);
Route::get('Admin/Patient/DeleteThis/{id}', [PatientController::class, 'deleteThisPatient']);

Route::get('Admin/DoctorRegister', function () {
    return view('admin.AdminDoctorRegister');
});
Route::post('Admin/RegisterThisDoctorNow', [DoctorController::class, 'registerDoctor']);
Route::get('Admin/Doctors', [DoctorController::class, 'doctorsList']);

Route::get('Admin/AdminDoctorDetailsForm/{id}', [DoctorController::class, 'addDoctorDetails']);
Route::post('Admin/AddThisDoctorDetailsNow', [DoctorController::class, 'saveDoctorDetails']);

// Route::get('Admin/Patient/DeleteThis/{id}', [PatientController::class, 'deleteThisPatient']);


// ================ Patient Router's ================
Route::get('Patient/EditProfile/{id}', [PatientController::class, 'editPatientForm']);
Route::post('Patient/EditThisProfile', [PatientController::class, 'editPatient']);


// ================ Doctor Router's ================
Route::get('Patient/EditProfile/{id}', [PatientController::class, 'editPatientForm']);
Route::post('Patient/EditThisProfile', [PatientController::class, 'editPatient']);

// views routers 
Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/index2', function () {
    return view('index2');
});
Route::get('/index3', function () {
    return view('index3');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/doctors', function () {
    return view('doctors');
});
Route::get('/doctorDetails', function () {
    return view('doctor-details');
});
