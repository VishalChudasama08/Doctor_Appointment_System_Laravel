@extends('layout')

@section('main-content')
    <div class="container">
        <div class="row my-5">

            <!-- LEFT FILTER -->
            <div id="desktop-filter" class="col-xl-3 d-none d-xl-block pe-3" style="border-right:1px solid #e5e5e5;">

                <div class="p-3 bg-white rounded shadow-sm" style="border:1px solid #eee;">

                    <h4 style="font-weight:600; margin-bottom:15px;">
                        <i class="bi bi-funnel"></i> Filters
                    </h4>

                    <!-- ✅ SELECTED FILTERS -->
                    <div class="selected-filters" style="margin-bottom:15px;"></div>

                    <!-- Specialities -->
                    <div style="margin-bottom:25px;">
                        <h6 style="font-weight:600; margin-bottom:10px;">Specialities</h6>

                        <!-- ✅ class instead of id -->
                        <div class="speciality-list" style="max-height:220px; overflow:hidden; transition:0.3s;">

                            <!-- Visible -->
                            <div class="form-check ms-1" style="margin-bottom:6px;">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Anaesthesiology">
                                Anaesthesiology
                            </div>
                            <div class="form-check ms-1" style="margin-bottom:6px;">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Bariatrics">
                                Bariatrics
                            </div>
                            <div class="form-check ms-1" style="margin-bottom:6px;">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Cardiac Sciences">
                                Cardiac Sciences
                            </div>
                            <div class="form-check ms-1" style="margin-bottom:6px;">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Dentistry"> Dentistry
                            </div>
                            <div class="form-check ms-1" style="margin-bottom:6px;">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Dermatology">
                                Dermatology
                            </div>

                            <!-- Hidden -->
                            <div class="more-items" style="display:none;">
                                <div class="form-check ms-1"><input class="form-check-input filter-checkbox" type="checkbox"
                                        value="Endocrinology"> Endocrinology</div>
                                <div class="form-check ms-1"><input class="form-check-input filter-checkbox" type="checkbox"
                                        value="ENT"> ENT</div>
                                <div class="form-check ms-1"><input class="form-check-input filter-checkbox" type="checkbox"
                                        value="Gastroenterology"> Gastroenterology</div>
                                <div class="form-check ms-1"><input class="form-check-input filter-checkbox" type="checkbox"
                                        value="Neurology"> Neurology</div>
                                <div class="form-check ms-1"><input class="form-check-input filter-checkbox" type="checkbox"
                                        value="Oncology"> Oncology</div>
                                <div class="form-check ms-1"><input class="form-check-input filter-checkbox" type="checkbox"
                                        value="Orthopedics"> Orthopedics</div>
                                <div class="form-check ms-1"><input class="form-check-input filter-checkbox" type="checkbox"
                                        value="Pediatrics"> Pediatrics</div>
                                <div class="form-check ms-1"><input class="form-check-input filter-checkbox" type="checkbox"
                                        value="Psychiatry"> Psychiatry</div>
                                <div class="form-check ms-1"><input class="form-check-input filter-checkbox" type="checkbox"
                                        value="Urology"> Urology</div>
                            </div>

                        </div>

                        <!-- ✅ class instead of id -->
                        <button class="toggleMore btn btn-sm btn-link p-0" style="font-size:13px; text-decoration:none;">
                            Show More
                        </button>
                    </div>

                    <!-- Experience -->
                    <div>
                        <h6 style="font-weight:600; margin-bottom:10px;">Experience (Years)</h6>

                        <div class="form-check ms-1">
                            <input class="form-check-input filter-checkbox" type="checkbox" value="0-5 Years"> 0 - 5
                        </div>
                        <div class="form-check ms-1">
                            <input class="form-check-input filter-checkbox" type="checkbox" value="6-10 Years"> 6 - 10
                        </div>
                        <div class="form-check ms-1">
                            <input class="form-check-input filter-checkbox" type="checkbox" value="11-15 Years"> 11 - 15
                        </div>
                        <div class="form-check ms-1">
                            <input class="form-check-input filter-checkbox" type="checkbox" value="16+ Years"> 16+
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="col-xl-9">

                <!-- FILTER BUTTON (mobile only) -->
                <div class="header__hamburger d-xl-none my-auto ms-2">
                    <div class="filter__toggle">
                        <h3 class="m-3 btn btn-outline-success">
                            <i class="bi bi-funnel"></i> Filters
                        </h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <img src="{{ asset('upload/doctors/1774769386.jpg') }}" class="img-fluid" alt="logo-img">
                    </div>
                    <div class="col-9">

                        <div style="line-height:1.6;">

                            <!-- Name -->
                            <h5 style="margin-bottom:5px; font-weight:600;"> Dr. Sheroo Zamindar </h5>
                            <!-- Speciality -->
                            <div style="color:#555;">Obstetrics & Gynecology & Reproductive Medicine</div>
                            <!-- Experience -->
                            <div style="color:#777;">52+ Years Experience</div>
                            <!-- Qualification -->
                            <div style="color:#555;">MBBS, MD (Med.), DGO</div>
                            <!-- Languages -->
                            <div style="color:#777;">English • Hindi • Gujarati</div>
                            <!-- Timing -->
                            <div style="color:#28a745; font-weight:500;">Available: 11:30 - 16:00 • Sat</div>

                        </div>

                    </div>
                    <a href="{{ url('Appointment') }}"
                        class="common-btn box-style p2-bg text-nowrap d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded100 wow fadeInRight my-1 mx-3"
                        data-wow-delay="0.8s" style="padding: 10px 15px">
                        Book An Appointment
                        <img src="{{ asset('assets/img/icon/arrow-right-white.png') }}" alt="icon">
                    </a>
                </div>

            </div>

        </div>
    </div>
@endsection
