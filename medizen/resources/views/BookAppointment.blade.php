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
                        <input type="hidden" name="userId" value="{{ auth()->user()->id }}">
                        <input type="hidden" name="doctorId" value="{{ $doctor->id }}">
                        <div class="section-title mb-30">
                            <span class="cmn-tag p1-bg heading-font">
                                <h3 class="wow fadeInUp black" data-wow-delay=".3s">
                                    Get an Appointment
                                </h3>
                            </span>
                        </div>
                        <div class="row g-lg-4 g-3">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your Name" name="name"
                                    value="{{ auth()->user()->name }}" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="tel" placeholder="Phone Number" name="number"
                                    value="{{ auth()->user()->number }}" required>
                            </div>
                            <div class="col-lg-6 px-5 py-3" style="background: ghostwhite;border-radius: 19px;">
                                <select name="day" required>
                                    @foreach ($doctor->schedules as $schedule)
                                        <option value="{{ $schedule->day }}">{{ $schedule->day }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <input type="date" name="date" id="appointmentDate" placeholder="date" required>
                            </div>
                            <div class="col-lg-12">
                                <label class="mb-2">Select Time</label>

                                <div class="d-flex flex-wrap gap-2">

                                    @php
                                        $start = \Carbon\Carbon::parse($doctor->schedules[0]['start_time']);
                                        $end = \Carbon\Carbon::parse($doctor->schedules[0]['end_time']);
                                        $first = true;
                                    @endphp

                                    @while ($start->copy()->addMinutes(90) <= $end)
                                        <input type="radio" class="btn-check" name="time"
                                            id="time_{{ $start->format('H_i') }}" value="{{ $start->format('H:i') }}"
                                            {{ $first ? 'required' : '' }} autocomplete="off">

                                        <label class="btn btn-outline-primary" for="time_{{ $start->format('H_i') }}">
                                            {{ $start->format('h:i A') }}
                                        </label>

                                        @php
                                            $first = false;
                                            $start->addMinutes(90);
                                        @endphp
                                    @endwhile

                                </div>
                            </div>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    const input = document.getElementById("appointmentDate");
                                    const today = new Date();
                                    // Format date to YYYY-MM-DD
                                    function formatDate(date) {
                                        return date.toISOString().split('T')[0];
                                    }
                                    // Min = today
                                    input.min = formatDate(today);
                                    // Max = today + 20 days
                                    let maxDate = new Date();
                                    maxDate.setDate(today.getDate() + 20);
                                    input.max = formatDate(maxDate);
                                });
                            </script>
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
