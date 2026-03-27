@extends('doctor/DoctorLayout')

@section('doctor-content')
    <section class="container my-5">
        <ul class="doctor-professional">
            <li class="d-flex align-items-center">
                <span class="names shift-colon">Name</span>
                <span class="pra ms-3">{{ $data['name'] }}</span>
            </li>
            <li class="d-flex align-items-center">
                <span class="names shift-colon">Email</span>
                <span class="pra ms-3">{{ $data['email'] }}</span>
            </li>
            <li class="d-flex align-items-center">
                <span class="names shift-colon">Number</span>
                <span class="pra ms-3">+91 {{ $data['number'] }}</span>
            </li>
            <li class="d-flex align-items-center">
                <span class="names shift-colon">Expertise</span>
                <span class="pra ms-3">{{ $data['expertise'] }}</span>
            </li>
            <li class="d-flex align-items-center">
                <span class="names shift-colon">Education</span>
                <span class="pra ms-3">{{ $data['education'] }}</span>
            </li>
            <li class="d-flex align-items-center">
                <span class="names shift-colon">Experience</span>
                <span class="pra ms-3">{{ $data['experience'] }} Years Of Experience In
                    Madicine</span>
            </li>
            <li class="d-flex align-items-center">
                <span class="names shift-colon">Profession</span>
                <span class="pra ms-3">{{ $data['profession'] }}</span>
            </li>
            <li class="d-flex align-items-center">
                <span class="names shift-colon">Available Days</span>
                <span class="pra ms-3">{{ $data['available_days'] }}</span>
            </li>
            <li class="d-flex align-items-center">
                <span class="names shift-colon">Available Time</span>
                <span class="pra ms-3">{{ $data['available_time'] }}</span>
            </li>
        </ul>
    </section>
@endsection
