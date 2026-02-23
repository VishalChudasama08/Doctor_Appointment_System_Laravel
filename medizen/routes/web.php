<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/login', function(){
    return view('loginPage');
});
Route::post('/loginNow', [AuthController::class, 'loginProcess']);

Route::get('/register', function(){
    return view('registerPage');
});
Route::post('/registerNow', [AuthController::class, 'registerProcess']);

Route::get('/logout', [AuthController::class, 'logoutProcess']);

Route::get('/AdminDashboard', function(){
    return view('admin.AdminDashboard');
});
Route::get('/PatientDashboard', function(){
    return view('patient.PatientDashboard');
});
Route::get('/DoctorDashboard', function(){
    return view('doctor.DoctorDashboard');
});

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