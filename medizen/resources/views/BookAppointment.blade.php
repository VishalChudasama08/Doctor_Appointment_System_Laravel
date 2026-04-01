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

                    <!-- SELECTED FILTERS -->
                    <div id="selected-filters" style="margin-bottom:15px;">
                        <!-- dynamic tags will come here -->
                    </div>

                    <!-- Specialities -->
                    <div style="margin-bottom:25px;">
                        <h6 style="font-weight:600; margin-bottom:10px;">Specialities</h6>

                        <div id="speciality-list" style="max-height:220px; overflow:hidden; transition:0.3s;">
                            <!-- Visible -->
                            <div class="form-check ms-1" style="margin-bottom:6px;">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Anaesthesiology"
                                    data-type="Speciality"> Anaesthesiology
                            </div>
                            <div class="form-check ms-1" style="margin-bottom:6px;">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Bariatrics"
                                    data-type="Speciality"> Bariatrics
                            </div>
                            <div class="form-check ms-1" style="margin-bottom:6px;">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Cardiac Sciences"
                                    data-type="Speciality"> Cardiac Sciences
                            </div>
                            <div class="form-check ms-1" style="margin-bottom:6px;">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Dentistry"
                                    data-type="Speciality"> Dentistry
                            </div>
                            <div class="form-check ms-1" style="margin-bottom:6px;">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Dermatology"
                                    data-type="Speciality"> Dermatology
                            </div>

                            <!-- Hidden -->
                            <div id="more-items" style="display:none;">
                                <div class="form-check ms-1" style="margin-bottom:6px;">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="Endocrinology"
                                        data-type="Speciality"> Endocrinology
                                </div>
                                <div class="form-check ms-1" style="margin-bottom:6px;">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="ENT"
                                        data-type="Speciality"> ENT
                                </div>
                                <div class="form-check ms-1" style="margin-bottom:6px;">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="Gastroenterology"
                                        data-type="Speciality"> Gastroenterology
                                </div>
                                <div class="form-check ms-1" style="margin-bottom:6px;">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="Neurology"
                                        data-type="Speciality"> Neurology
                                </div>
                                <div class="form-check ms-1" style="margin-bottom:6px;">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="Oncology"
                                        data-type="Speciality"> Oncology
                                </div>
                                <div class="form-check ms-1" style="margin-bottom:6px;">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="Orthopedics"
                                        data-type="Speciality"> Orthopedics
                                </div>
                                <div class="form-check ms-1" style="margin-bottom:6px;">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="Pediatrics"
                                        data-type="Speciality"> Pediatrics
                                </div>
                                <div class="form-check ms-1" style="margin-bottom:6px;">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="Psychiatry"
                                        data-type="Speciality"> Psychiatry
                                </div>
                                <div class="form-check ms-1" style="margin-bottom:6px;">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="Urology"
                                        data-type="Speciality"> Urology
                                </div>
                            </div>

                        </div>

                        <button id="toggleMore" class="btn btn-sm btn-link p-0"
                            style="font-size:13px; text-decoration:none;">
                            Show More
                        </button>
                    </div>

                    <!-- Experience -->
                    <div>
                        <h6 style="font-weight:600; margin-bottom:10px;">Experience (Years)</h6>

                        <div class="form-check ms-1" style="margin-bottom:6px;">
                            <input class="form-check-input filter-checkbox" type="checkbox" value="0-5 Years"
                                data-type="Experience"> 0 - 5
                        </div>
                        <div class="form-check ms-1" style="margin-bottom:6px;">
                            <input class="form-check-input filter-checkbox" type="checkbox" value="6-10 Years"
                                data-type="Experience"> 6 - 10
                        </div>
                        <div class="form-check ms-1" style="margin-bottom:6px;">
                            <input class="form-check-input filter-checkbox" type="checkbox" value="11-15 Years"
                                data-type="Experience"> 11 - 15
                        </div>
                        <div class="form-check ms-1" style="margin-bottom:6px;">
                            <input class="form-check-input filter-checkbox" type="checkbox" value="16+ Years"
                                data-type="Experience"> 16+
                        </div>
                    </div>

                </div>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {

                        const btn = document.getElementById("toggleMore");
                        const moreItems = document.getElementById("more-items");
                        const list = document.getElementById("speciality-list");

                        btn.addEventListener("click", function() {

                            if (moreItems.style.display === "none") {
                                moreItems.style.display = "block";
                                list.style.maxHeight = "500px";
                                btn.textContent = "Show Less";
                            } else {
                                moreItems.style.display = "none";
                                list.style.maxHeight = "220px";
                                btn.textContent = "Show More";
                            }

                        });

                    });
                    document.addEventListener("DOMContentLoaded", function() {

                        const checkboxes = document.querySelectorAll(".filter-checkbox");
                        const selectedBox = document.getElementById("selected-filters");

                        checkboxes.forEach(cb => {
                            cb.addEventListener("change", function() {

                                const value = this.value;
                                const type = this.dataset.type;
                                const id = value.replace(/\s+/g, "_");

                                if (this.checked) {
                                    addTag(value, type, id);
                                } else {
                                    removeTag(id);
                                }
                            });
                        });

                        function addTag(value, type, id) {

                            // avoid duplicate
                            if (document.getElementById("tag-" + id)) return;

                            const tag = document.createElement("span");
                            tag.id = "tag-" + id;

                            tag.style.cssText = `
                                display:inline-block;
                                background:#f1f1f1;
                                padding:5px 10px;
                                border-radius:20px;
                                margin:3px;
                                font-size:13px;
                            `;

                            tag.innerHTML = `${value} <i class="bi bi-x-circle" style="cursor:pointer; margin-left:5px;"></i>`;

                            // remove on click
                            tag.querySelector("i").addEventListener("click", function() {

                                tag.remove();

                                // uncheck checkbox
                                const checkbox = document.querySelector(
                                    '.filter-checkbox[value="' + value + '"]'
                                );
                                if (checkbox) checkbox.checked = false;

                            });

                            selectedBox.appendChild(tag);
                        }

                        function removeTag(id) {
                            const tag = document.getElementById("tag-" + id);
                            if (tag) tag.remove();
                        }

                    });
                </script>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="col-xl-9">

                <!-- FILTER BUTTON (mobile only) -->
                <div class="header__hamburger d-xl-none my-auto ms-2">
                    <div class="filter__toggle">
                        <h3 class="m-3 btn btn-outline-success"><i class="bi bi-funnel"></i> Filters </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <img src="{{ asset('upload/doctors/1774769386.jpg') }}" alt="logo-img">
                    </div>
                    <div class="col-9">
                        <p>Dr Sheroo Zamindar <br>

                            Obstetrics & Gynecology & Reproductive Medicine <br>
                            52+ Years experience <br>
                            MBBS, MD (Med.), Dip. (Gynecology & Obstetrics) (DGO) <br>
                            Cama Albless Hospital - Bombay, IVF Training Programme at Singapore Medical College
                            in
                            1990 <br>
                            English • Hindi • Gujarati <br>
                            11:30 -16:00 • Sat <br>
                        </p>
                        <a href="doctor-details.html"
                            class="common-btn box-style p2-bg w-100 text-nowrap d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded100 wow fadeInRight"
                            data-wow-delay="0.8s">
                            Book An Appointment
                            <img src="{{ asset('assets/img/icon/arrow-right-white.png') }}" alt="icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Appointment Section Start -->
    <section class="appoentment-section fix my-5 py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-5 order-lg-0 order-1">
                    <div class="apoentment-thumb">
                        <img src="{{ asset('assets/img/blog/apoentment-thumb.jpg') }}" style="width: 120%;"
                            alt="img" class="rounded-4">
                    </div>
                </div>
                <!-- Appointment Form -->
                <div class="col-lg-7">
                    <form action="#" class="appoentment-forms">
                        <div class="section-title mb-30">
                            <span class="cmn-tag p1-bg heading-font">
                                <h3 class="wow fadeInUp black" data-wow-delay=".3s">
                                    Get an Appointment
                                </h3>
                            </span>
                        </div>
                        <div class="row g-lg-4 g-3">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" placeholder="Your Email">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Phone Number">
                            </div>
                            <div class="col-lg-6">
                                <input type="date" placeholder="date">
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" placeholder="Message" rows="5"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <a href="doctor-details.html"
                                    class="common-btn box-style p2-bg w-100 text-nowrap d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded100 wow fadeInRight"
                                    data-wow-delay="0.8s">
                                    Book An Appointment
                                    <img src="{{ asset('assets/img/icon/arrow-right-white.png') }}" alt="icon">
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
