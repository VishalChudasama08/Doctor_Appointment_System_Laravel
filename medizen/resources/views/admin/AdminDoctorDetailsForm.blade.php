@extends('admin/AdminLayout')

@section('admin-content')
    <!--Appointment Section Start -->
    <section class="appointment-section fix cmn-bg my-4">
        <div class="container">
            <div class="appointment-wrapper position-relative d-center w-100">
                <div class="row gx-0 gy-5">
                    <div class="col-lg-8">
                        <div class="section-title">
                            <h2 class="wow fadeInUp black" data-wow-delay=".3s">
                                <span class="position-relative z-1 w-100">
                                    Collect Doctor Details From
                                    <img src="{{ asset('assets/img/element/title-badge1.png') }}" style="bottom: -25px;"
                                        alt="img" class="title-badge1 d-md-block d-none w-100">
                                </span>
                            </h2>
                        </div>
                        @if (session('DoctorRegisterOKay'))
                            <div style="color: green; margin: 10px;">{{ session('DoctorRegisterOKay') }}</div>
                        @endif

                        Doctor name: {{ $doctor['name'] }} &nbsp;&nbsp; | &nbsp;&nbsp; Email: {{ $doctor['email'] }}
                        &nbsp;&nbsp; | &nbsp;&nbsp; Number: {{ $doctor['number'] }}
                        <form action="{{ url('Admin/AddThisDoctorDetailsNow') }}" method="post"
                            enctype="multipart/form-data" class="appointment-forms">
                            @csrf
                            {{-- ['user_id', 'image', 'expertise', 'experience', 'education', 'profession', 'available_days', 'available_time']; --}}
                            <input type="hidden" name="user_id" value="{{ $doctor->id }}" id="user_id">
                            <div class="row g-lg-3 g-3">
                                <div class="col-lg-12">
                                    <input type="file" name="image" id="image" placeholder="Choice you image"
                                        required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" name="expertise" id="expertise" placeholder="Your expertise"
                                        required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="number" name="experience" id="experience"
                                        placeholder="Your experience in year's" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" name="education" id="education" placeholder="Your education"
                                        required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" name="profession" id="profession" placeholder="Your profession"
                                        required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" name="available_days" id="available_days"
                                        placeholder="Ex. Mon-Sat" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" name="available_time" id="available_time"
                                        placeholder="Ex. 10:00 AM - 4:00 PM" required>
                                </div>

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="col-lg-12">
                                    <button type="submit"
                                        class="common-btn box-style p2-bg w-100 text-nowrap d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded100 wow fadeInRight"
                                        data-wow-delay="0.8s">
                                        Register
                                        <img src="{{ asset('assets/img/icon/arrow-right-white.png') }}" alt="icon">
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
