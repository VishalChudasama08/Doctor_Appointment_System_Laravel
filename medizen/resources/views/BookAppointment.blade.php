@extends('layout')

@section('main-content')
    <!-- Appointment Section Start -->
    <section class="appoentment-section fix my-5 py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-5 order-lg-0 order-1">
                    <div class="apoentment-thumb">
                        <img src="{{ asset('assets/img/blog/apoentment-thumb.jpg') }}" style="width: 120%;" alt="img"
                            class="rounded-4">
                    </div>
                </div>
                <!-- Appointment Form -->
                <div class="col-lg-7">

                    <form action="{{ url('BookAppointmentNow') }}" method="POST" class="appoentment-forms">
                        @csrf
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
                                <input type="text" placeholder="Phone Number">
                            </div>
                            <div class="col-lg-6">
                                <select placeholder="Your Email">
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <input type="date" placeholder="date">
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" placeholder="Message" rows="5"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit"
                                    class="common-btn box-style p2-bg w-100 text-nowrap d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded100 wow fadeInRight"
                                    data-wow-delay="0.8s">
                                    Book An Appointment
                                    <img src="{{ asset('assets/img/icon/arrow-right-white.png') }}" alt="icon">
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
