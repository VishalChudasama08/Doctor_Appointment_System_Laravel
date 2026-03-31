@extends('layout')

@section('main-content')
    <div class="container">
        <div class="row my-5">
            <!-- LEFT FILTER (DESKTOP ONLY) -->
            <div id="desktop-filter" class="col-xl-3 d-none d-xl-block pe-3" style="border-right: 2px solid grey">
                <div>
                    <h3>Filters</h3>
                    <div class="Filters_filtersContainer__dSFFP">
                        <button><span>Clear All</span></button>
                        <div class="Filters_appliedFilters__6Ej9B">
                            <div class="Ed Hd  Filters_appliedFilter__qn9sG">0-5</div>
                            <i class="bi bi-x-circle"></i>
                            <div class="Ed Hd  Filters_appliedFilter__qn9sG">ahmedabad</div>
                            <i class="bi bi-x-circle"></i>
                            <div class="Filters_divider__APoW0"></div>
                            <div class="Filters_filters__EOCln">
                                <p class="nd gd td Bd">Mode of Consult</p>
                                <div class="Filters_filterOptions__6iIfT"><label
                                        class="CustomCheckbox_checkbox_blue__n4ZJl"><input type="checkbox" value="PHYSICAL"
                                            checked="" name="PHYSICAL"><span class="CustomCheckbox_txt__vPp7v">Hospital
                                            Visit</span><span class="CustomCheckbox_checkMark__Jp3bK"></span></label><label
                                        class="CustomCheckbox_checkbox_blue__n4ZJl"><input type="checkbox" value="ONLINE"
                                            checked="" name="ONLINE"><span class="CustomCheckbox_txt__vPp7v">Online
                                            Consult</span><span class="CustomCheckbox_checkMark__Jp3bK"></span></label>
                                </div>
                                <div class="Filters_filterHeader__9eL2P">
                                    <p class="nd gd td Bd">Experience (In Years)</p>
                                </div>
                                <div class="Filters_filterOptions__6iIfT"><label
                                        class="CustomCheckbox_checkbox_blue__n4ZJl"><input type="checkbox" value="0-5"
                                            checked="" name="0-5"><span
                                            class="CustomCheckbox_txt__vPp7v">0-5</span><span
                                            class="CustomCheckbox_checkMark__Jp3bK"></span></label><label
                                        class="CustomCheckbox_checkbox_blue__n4ZJl"><input type="checkbox" value="6-10"
                                            name="6-10"><span class="CustomCheckbox_txt__vPp7v">6-10</span><span
                                            class="CustomCheckbox_checkMark__Jp3bK"></span></label><label
                                        class="CustomCheckbox_checkbox_blue__n4ZJl"><input type="checkbox" value="11-16"
                                            name="11-16"><span class="CustomCheckbox_txt__vPp7v">11-16</span><span
                                            class="CustomCheckbox_checkMark__Jp3bK"></span></label><button
                                        class="LFilters_clearFilters__HRfCq" aria-label="Button"><span>+1
                                            More</span></button>
                                </div>
                                <div class="Filters_filterHeader__9eL2P">
                                    <p class="nd gd td Bd">Fees (In Rupees)</p>
                                </div>
                                <div class="Filters_filterOptions__6iIfT"><label
                                        class="CustomCheckbox_checkbox_blue__n4ZJl"><input type="checkbox" value="100-500"
                                            name="100-500"><span class="CustomCheckbox_txt__vPp7v">100-500</span><span
                                            class="CustomCheckbox_checkMark__Jp3bK"></span></label><label
                                        class="CustomCheckbox_checkbox_blue__n4ZJl"><input type="checkbox" value="500-1000"
                                            name="500-1000"><span class="CustomCheckbox_txt__vPp7v">500-1000</span><span
                                            class="CustomCheckbox_checkMark__Jp3bK"></span></label><label
                                        class="CustomCheckbox_checkbox_blue__n4ZJl"><input type="checkbox" value="1000+"
                                            name="1000+"><span class="CustomCheckbox_txt__vPp7v">1000+</span><span
                                            class="CustomCheckbox_checkMark__Jp3bK"></span></label></div>
                                <div class="Filters_filterHeader__9eL2P">
                                    <p class="nd gd td Bd">Gender </p>
                                </div>
                                <div class="Filters_filterOptions__6iIfT"><label
                                        class="CustomCheckbox_checkbox_blue__n4ZJl"><input type="checkbox" value="Female"
                                            name="Female"><span class="CustomCheckbox_txt__vPp7v">Female</span><span
                                            class="CustomCheckbox_checkMark__Jp3bK"></span></label><label
                                        class="CustomCheckbox_checkbox_blue__n4ZJl"><input type="checkbox" value="Male"
                                            name="Male"><span class="CustomCheckbox_txt__vPp7v">Male</span><span
                                            class="CustomCheckbox_checkMark__Jp3bK"></span></label></div>
                                <div class="Filters_filterHeader__9eL2P">
                                    <p class="nd gd td Bd">Language </p><img
                                        srcset="https://images.apollo247.in/images/consult-web/hospital-and-consult/Search.svg?tr=q-80,w-200,dpr-1,c-at_max 200w, https://images.apollo247.in/images/consult-web/hospital-and-consult/Search.svg?tr=q-80,w-200,dpr-2,c-at_max 400w, https://images.apollo247.in/images/consult-web/hospital-and-consult/Search.svg?tr=q-80,w-200,dpr-3,c-at_max 600w, https://images.apollo247.in/images/consult-web/hospital-and-consult/Search.svg?tr=q-80,w-200,dpr-4,c-at_max 800w, https://images.apollo247.in/images/consult-web/hospital-and-consult/Search.svg?tr=q-80,w-200,dpr-5,c-at_max 1000w, https://images.apollo247.in/images/consult-web/hospital-and-consult/Search.svg?tr=q-80,w-200,dpr-6,c-at_max 1200w"
                                        src="https://images.apollo247.in/images/consult-web/hospital-and-consult/Search.svg?tr=q-80,w-200,dpr-2,c-at_max 400w"
                                        sizes="200px" alt="search" width="20" height="20" loading="lazy"
                                        fetchpriority="low" class="oh lazy Filters_searchIcon__sI3dM">
                                </div>
                                <div class="Filters_filterOptions__6iIfT"><label
                                        class="CustomCheckbox_checkbox_blue__n4ZJl"><input type="checkbox"
                                            value="English" name="English"><span
                                            class="CustomCheckbox_txt__vPp7v">English</span><span
                                            class="CustomCheckbox_checkMark__Jp3bK"></span></label><label
                                        class="CustomCheckbox_checkbox_blue__n4ZJl"><input type="checkbox" value="Hindi"
                                            name="Hindi"><span class="CustomCheckbox_txt__vPp7v">Hindi</span><span
                                            class="CustomCheckbox_checkMark__Jp3bK"></span></label><label
                                        class="CustomCheckbox_checkbox_blue__n4ZJl"><input type="checkbox" value="Telugu"
                                            name="Telugu"><span class="CustomCheckbox_txt__vPp7v">Telugu</span><span
                                            class="CustomCheckbox_checkMark__Jp3bK"></span></label><button
                                        class="LFilters_clearFilters__HRfCq" aria-label="Button"><span>+10
                                            More</span></button></div>
                                <div class="Filters_filterHeader__9eL2P">
                                    <p class="nd gd td Bd">Speciality </p><img
                                        srcset="https://images.apollo247.in/images/consult-web/hospital-and-consult/Search.svg?tr=q-80,w-200,dpr-1,c-at_max 200w, https://images.apollo247.in/images/consult-web/hospital-and-consult/Search.svg?tr=q-80,w-200,dpr-2,c-at_max 400w, https://images.apollo247.in/images/consult-web/hospital-and-consult/Search.svg?tr=q-80,w-200,dpr-3,c-at_max 600w, https://images.apollo247.in/images/consult-web/hospital-and-consult/Search.svg?tr=q-80,w-200,dpr-4,c-at_max 800w, https://images.apollo247.in/images/consult-web/hospital-and-consult/Search.svg?tr=q-80,w-200,dpr-5,c-at_max 1000w, https://images.apollo247.in/images/consult-web/hospital-and-consult/Search.svg?tr=q-80,w-200,dpr-6,c-at_max 1200w"
                                        src="https://images.apollo247.in/images/consult-web/hospital-and-consult/Search.svg?tr=q-80,w-200,dpr-2,c-at_max 400w"
                                        sizes="200px" alt="search" width="20" height="20" loading="lazy"
                                        fetchpriority="low" class="oh lazy Filters_searchIcon__sI3dM">
                                </div>
                                <div class="Filters_filterOptions__6iIfT"><label
                                        class="CustomCheckbox_checkbox_blue__n4ZJl"><input type="checkbox"
                                            value="#HealthyFridays" name="#HealthyFridays"><span
                                            class="CustomCheckbox_txt__vPp7v">#HealthyFridays</span><span
                                            class="CustomCheckbox_checkMark__Jp3bK"></span></label><label
                                        class="CustomCheckbox_checkbox_blue__n4ZJl"><input type="checkbox"
                                            value="Allergist and Clinical Immunologist"
                                            name="Allergist and Clinical Immunologist"><span
                                            class="CustomCheckbox_txt__vPp7v">Allergist and Clinical
                                            Immunologist</span><span
                                            class="CustomCheckbox_checkMark__Jp3bK"></span></label><label
                                        class="CustomCheckbox_checkbox_blue__n4ZJl"><input type="checkbox"
                                            value="Allergist and Immunologist" name="Allergist and Immunologist"><span
                                            class="CustomCheckbox_txt__vPp7v">Allergist and
                                            Immunologist</span><span
                                            class="CustomCheckbox_checkMark__Jp3bK"></span></label><button
                                        class="LFilters_clearFilters__HRfCq" aria-label="Button"><span>+171
                                            More</span></button></div>
                                <div class="Filters_filterHeader__9eL2P">
                                    <p class="nd gd td Bd">Facility </p>
                                </div>
                                <div class="Filters_filterOptions__6iIfT"><label
                                        class="CustomCheckbox_checkbox_blue__n4ZJl"><input type="checkbox"
                                            value="Apollo Hospital" name="Apollo Hospital"><span
                                            class="CustomCheckbox_txt__vPp7v">Apollo Hospital</span><span
                                            class="CustomCheckbox_checkMark__Jp3bK"></span></label><label
                                        class="CustomCheckbox_checkbox_blue__n4ZJl"><input type="checkbox"
                                            value="Other Clinics" name="Other Clinics"><span
                                            class="CustomCheckbox_txt__vPp7v">Other Clinics</span><span
                                            class="CustomCheckbox_checkMark__Jp3bK"></span></label></div>
                            </div>
                            </>
                            <div class="mb-3 me-5">
                                <h5 class="my-2">Speciality</h5>
                                <select class="form-control border ps-3 p-1">
                                    <option>Dentist</option>
                                    <option>Neurologist</option>
                                    <option>Cardiologist</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label>Experience</label><br>
                                <input type="checkbox"> 1-5 Years <br>
                                <input type="checkbox"> 5+ Years
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT CONTENT -->
                    <div class="col-xl-9">
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

            <script>
                // document.querySelector(".filter-toggle-btn").onclick = function() {
                //     document.querySelector(".filter-offcanvas").classList.add("open");
                //     document.querySelector(".filter-overlay").classList.add("active");
                // };

                // document.querySelector(".filter-close").onclick = function() {
                //     document.querySelector(".filter-offcanvas").classList.remove("open");
                //     document.querySelector(".filter-overlay").classList.remove("active");
                // };
            </script>


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
                                            <img src="{{ asset('assets/img/icon/arrow-right-white.png') }}"
                                                alt="icon">
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        @endsection
