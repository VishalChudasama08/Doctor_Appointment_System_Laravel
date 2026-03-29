@extends('doctor/DoctorLayout')

@section('doctor-content')
    <section class="container my-5">
        @if (session('infoSave'))
            <div style="color: green; margin: 10px;">{{ session('infoSave') }}</div>
        @endif
        <ul class="doctor-professional">
            <li class="d-flex align-items-center">
                <span class="names shift-colon">Name</span>
                <span class="pra ms-3">{{ $user->name }}</span>
            </li>
            <li class="d-flex align-items-center">
                <span class="names shift-colon">Email</span>
                <span class="pra ms-3">{{ $user['email'] }}</span>
            </li>
            <li class="d-flex align-items-center">
                <span class="names shift-colon">Number</span>
                <span class="pra ms-3">+91 {{ $user['number'] }}</span>
            </li>
            <li class="d-flex align-items-center">
                <span class="names shift-colon">Expertise</span>
                <span class="pra ms-3">{{ $doctor['expertise'] }}</span>
            </li>
            <li class="d-flex align-items-center">
                <span class="names shift-colon">Education</span>
                <span class="pra ms-3">{{ $doctor['education'] }}</span>
            </li>
            <li class="d-flex align-items-center">
                <span class="names shift-colon">Experience</span>
                <span class="pra ms-3">{{ $doctor['experience'] }} Years Of Experience In
                    Madicine</span>
            </li>
            <li class="d-flex align-items-center">
                <span class="names shift-colon">Profession</span>
                <span class="pra ms-3">{{ $doctor['profession'] }}</span>
            </li>
            <li class="d-flex align-items-center">
                <span class="names shift-colon">Available Days</span>
                <span class="pra ms-3">
                    @foreach ($doctor->schedules as $schedule)
                        <span> {{ $schedule->day }} &nbsp;|&nbsp; </span>
                    @endforeach
                </span>
            </li>
            <li class="d-flex align-items-center">
                <span class="names shift-colon">Available Time</span>
                <span class="pra ms-3">
                    {{ \Carbon\Carbon::parse($doctor->schedules[0]->start_time)->format('h:i A') }} -
                    {{ \Carbon\Carbon::parse($doctor->schedules[0]->end_time)->format('h:i A') }}
                </span>
            </li>

            {{-- @foreach ($doctor->schedules as $schedule)
                <p>
                    {{ $schedule->day }} :
                    {{ \Carbon\Carbon::parse($schedule->start_time)->format('h:i A') }}
                    -
                    {{ \Carbon\Carbon::parse($schedule->end_time)->format('h:i A') }}
                </p>
            @endforeach --}}
            {{-- <li class="d-flex align-items-center">
                <span class="names shift-colon">Available Days</span>
                @foreach ($doctor->schedules as $schedule)
                <span class="pra ms-3">{{ $data['available_days'] }}</span>
                @endforeach
            </li>
            <li class="d-flex align-items-center">
                <span class="names shift-colon">Available Time</span>
                <span class="pra ms-3">{{ $data['available_time'] }}</span>
            </li> --}}
        </ul>
    </section>
@endsection
