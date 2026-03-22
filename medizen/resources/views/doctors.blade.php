@extends('layout')

@section('main-content')
    <section class="breadcrumb-section position-relative fix">
        <div class="container">
            <div
                class="bread-content px-3 d-flex flex-wrap gap-3 align-items-center justify-content-md-between justify-content-center">
                <h2 class="black">Doctors</h2>
                <ul class="d-flex align-items-center gap-3">
                    <li><a href="{{ url('index') }}">Home</a></li>
                    <li>/</li>
                    <li>Doctor</li>
                </ul>
            </div>
        </div>
        <!-- Bread Ele -->
        <img src="{{ asset('assets/img/about/breadcrumnd-shap.png') }}" alt="img" class="bread-ele">
    </section>

    <!-- Feature Section Start -->
    <section class="feature-section fix pt-3">
        <div class="container">
            <div class="featue-wrapper feaure-wrapper2 position-relative">
                <div class="feature-inner">
                    <div class="ins d-flex flex-column gap-xxl-4 gap-3">
                        <div class="line"></div>
                        <div class="feature-items">
                            <div
                                class="feature-left d-lg-flex d-grid gap-3 flex-lg-nowrap flex-wrap justify-content-between align-items-center">
                                <h4><a href="{{ url('doctorDetails') }}" class="black fw_600 text-nowrap">Dr.Alvin
                                        Eclair</a>
                                </h4>
                                <ul class="feature-list d-flex flex-column gap-1">
                                    <li class="text-nowrap">
                                        Neurology Expert
                                    </li>
                                </ul>
                                <p class="pra fs-seven">
                                    Medical care encompasses a range of services aimed at promoting health, preventing
                                    disease
                                </p>
                            </div>
                            <a href="{{ url('doctorDetails') }}" class="cmn-arrows d-center">
                                <img src="{{ asset('assets/img/icon/arrow-right-black.png') }}" alt="icon">
                            </a>
                            <!-- Extra Hover -->
                            <img src="{{ asset('assets/img/choose/feature5.jpg') }}" alt="img" class="extra-feature">
                        </div>
                        <div class="line"></div>
                    </div>
                    <div class="ins d-flex flex-column gap-xxl-4 gap-3">
                        <div class="line"></div>
                        <div class="feature-items">
                            <div
                                class="feature-left d-lg-flex d-grid gap-3 flex-lg-nowrap flex-wrap justify-content-between align-items-center">
                                <h4><a href="{{ url('doctorDetails') }}" class="black fw_600 text-nowrap">Dr.Alan
                                        Jellybean</a>
                                </h4>
                                <ul class="feature-list d-flex flex-column gap-1">
                                    <li class="text-nowrap">
                                        Dental Care
                                    </li>
                                </ul>
                                <p class="pra fs-seven">
                                    Medical care encompasses a range of services aimed at promoting health, preventing
                                    disease
                                </p>
                            </div>
                            <a href="{{ url('doctorDetails') }}" class="cmn-arrows d-center">
                                <img src="{{ asset('assets/img/icon/arrow-right-black.png') }}" alt="icon">
                            </a>
                            <!-- Extra Hover -->
                            <img src="{{ asset('assets/img/choose/feature1.jpg') }}" alt="img" class="extra-feature">
                        </div>
                        <div class="line"></div>
                    </div>
                    <div class="ins d-flex flex-column gap-xxl-4 gap-3">
                        <div class="line"></div>
                        <div class="feature-items">
                            <div
                                class="feature-left d-lg-flex d-grid gap-3 flex-lg-nowrap flex-wrap justify-content-between align-items-center">
                                <h4><a href="{{ url('doctorDetails') }}" class="black fw_600 text-nowrap">Dr.Dean R.
                                        Chassay</a></h4>
                                <ul class="feature-list d-flex flex-column gap-1">
                                    <li class="text-nowrap">
                                        Eye Expert
                                    </li>
                                </ul>
                                <p class="pra fs-seven">
                                    Medical care encompasses a range of services aimed at promoting health, preventing
                                    disease
                                </p>
                            </div>
                            <a href="{{ url('doctorDetails') }}" class="cmn-arrows d-center">
                                <img src="{{ asset('assets/img/icon/arrow-right-black.png') }}" alt="icon">
                            </a>
                            <!-- Extra Hover -->
                            <img src="{{ asset('assets/img/choose/feature2.jpg') }}" alt="img" class="extra-feature">
                        </div>
                        <div class="line"></div>
                    </div>
                    <div class="ins d-flex flex-column gap-xxl-4 gap-3">
                        <div class="line"></div>
                        <div class="feature-items">
                            <div
                                class="feature-left d-lg-flex d-grid gap-3 flex-lg-nowrap flex-wrap justify-content-between align-items-center">
                                <h4><a href="{{ url('doctorDetails') }}" class="black fw_600 text-nowrap">Dr.Alan
                                        Jellybean</a>
                                </h4>
                                <ul class="feature-list d-flex flex-column gap-1">
                                    <li class="text-nowrap">
                                        Heart Spacialist
                                    </li>
                                </ul>
                                <p class="pra fs-seven">
                                    Medical care encompasses a range of services aimed at promoting health, preventing
                                    disease
                                </p>
                            </div>
                            <a href="{{ url('doctorDetails') }}" class="cmn-arrows d-center">
                                <img src="{{ asset('assets/img/icon/arrow-right-black.png') }}" alt="icon">
                            </a>
                            <!-- Extra Hover -->
                            <img src="{{ asset('assets/img/choose/feature3.jpg') }}" alt="img" class="extra-feature">
                        </div>
                        <div class="line"></div>
                    </div>
                    <div class="ins d-flex flex-column gap-xxl-4 gap-3">
                        <div class="line"></div>
                        <div class="feature-items">
                            <div
                                class="feature-left d-lg-flex d-grid gap-3 flex-lg-nowrap flex-wrap justify-content-between align-items-center">
                                <h4><a href="{{ url('doctorDetails') }}" class="black fw_600 text-nowrap">Dr.Nikol Jons</a>
                                </h4>
                                <ul class="feature-list d-flex flex-column gap-1">
                                    <li class="text-nowrap">
                                        Heart Spacialist
                                    </li>
                                </ul>
                                <p class="pra fs-seven">
                                    Medical care encompasses a range of services aimed at promoting health, preventing
                                    disease
                                </p>
                            </div>
                            <a href="{{ url('doctorDetails') }}" class="cmn-arrows d-center">
                                <img src="{{ asset('assets/img/icon/arrow-right-black.png') }}" alt="icon">
                            </a>
                            <!-- Extra Hover -->
                            <img src="{{ asset('assets/img/choose/feature4.jpg') }}" alt="img" class="extra-feature">
                        </div>
                        <div class="line"></div>
                    </div>
                    <div class="ins d-flex flex-column gap-xxl-4 gap-3">
                        <div class="line"></div>
                        <div class="feature-items">
                            <div
                                class="feature-left d-lg-flex d-grid gap-3 flex-lg-nowrap flex-wrap justify-content-between align-items-center">
                                <h4><a href="{{ url('doctorDetails') }}" class="black fw_600 text-nowrap">Dr.Harry
                                        Kane</a>
                                </h4>
                                <ul class="feature-list d-flex flex-column gap-1">
                                    <li class="text-nowrap">
                                        Eye Spacilist
                                    </li>
                                </ul>
                                <p class="pra fs-seven">
                                    Medical care encompasses a range of services aimed at promoting health, preventing
                                    disease
                                </p>
                            </div>
                            <a href="{{ url('doctorDetails') }}" class="cmn-arrows d-center">
                                <img src="{{ asset('assets/img/icon/arrow-right-black.png') }}" alt="icon">
                            </a>
                            <!-- Extra Hover -->
                            <img src="{{ asset('assets/img/choose/feature5.jpg') }}" alt="img"
                                class="extra-feature">
                        </div>
                        <div class="line"></div>
                    </div>
                    <div class="ins d-flex flex-column gap-xxl-4 gap-3">
                        <div class="line"></div>
                        <div class="feature-items">
                            <div
                                class="feature-left d-lg-flex d-grid gap-3 flex-lg-nowrap flex-wrap justify-content-between align-items-center">
                                <h4><a href="#" class="black fw_600 text-nowrap">Dr.Nathan Kyler</a></h4>
                                <ul class="feature-list d-flex flex-column gap-1">
                                    <li class="text-nowrap">
                                        Heart Spacialist
                                    </li>
                                </ul>
                                <p class="pra fs-seven">
                                    Medical care encompasses a range of services aimed at promoting health, preventing
                                    disease
                                </p>
                            </div>
                            <a href="{{ url('doctorDetails') }}" class="cmn-arrows d-center">
                                <img src="{{ asset('assets/img/icon/arrow-right-black.png') }}" alt="icon">
                            </a>
                            <!-- Extra Hover -->
                            <img src="{{ asset('assets/img/choose/feature1.jpg') }}" alt="img"
                                class="extra-feature">
                        </div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
