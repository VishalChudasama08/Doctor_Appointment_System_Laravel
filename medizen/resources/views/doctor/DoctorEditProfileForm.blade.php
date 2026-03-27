@extends('doctor/DoctorLayout')

@section('doctor-content')
    <div class="container mb-5 mt-3">
        <div class="appointment-wrapper position-relative d-center w-100">
            <div class="row gx-0 gy-5">
                <div class="section-title mb-3">
                    <h2 class="wow fadeInUp black" data-wow-delay=".3s">
                        <span class="position-relative z-1 w-100">
                            Edit Information
                        </span>
                    </h2>
                </div>
                <form action="{{ url('Doctor/SaveInformationNow') }}" method="post" enctype="multipart/form-data"
                    class="appointment-forms mt-0">
                    @csrf
                    <div class="row gx-0 gy-5">
                        <div class="col-lg-4 pe-1">
                            <input type="hidden" id="userType" value="Doctor" name="userType">
                            <div class="row g-lg-3 g-3">
                                <div class="col-lg-12">
                                    <input type="text" value="{{ $user->name }}" name="name" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="email" value="{{ $user->email }}" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="tel" value="{{ $user->number }}" name="number" id="number"
                                        pattern="[0-9]{10}" maxlength="10"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                        placeholder="Your Mobile Number" required>
                                </div>
                                <div class="col-lg-12">
                                    <img src="{{ asset('upload/doctors/' . $doctor->image) }}" alt="img"
                                        class="rounded-4" style="width: 45%;">
                                </div>
                                <div class="col-lg-12">
                                    <input type="file" name="image" id="image" placeholder="Choice you image"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 ps-1">
                            <div class="row g-lg-3 g-3">
                                <div class="col-lg-12">
                                    <input type="text" value="{{ $doctor->expertise }}" name="expertise" id="expertise"
                                        placeholder="Your expertise" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="number" value="{{ $doctor->experience }}" name="experience"
                                        id="experience" placeholder="Your experience in year's" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" value="{{ $doctor->education }}" name="education" id="education"
                                        placeholder="Your education" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" value="{{ $doctor->profession }}" name="profession"
                                        id="profession" placeholder="Your profession" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" value="{{ $doctor->available_days }}" name="available_days"
                                        id="available_days" placeholder="Ex. Mon-Sat" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" value="{{ $doctor->available_time }}" name="available_time"
                                        id="available_time" placeholder="Ex. 10:00 AM - 4:00 PM" required>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit"
                                        class="common-btn box-style p2-bg w-100 text-nowrap d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded100 wow fadeInRight"
                                        data-wow-delay="0.8s">
                                        Save Information
                                        <img src="{{ asset('assets/img/icon/arrow-right-white.png') }}" alt="icon">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
