@extends('admin/AdminLayout')

@section('admin-content')
    <section class="container">
        <h3>Admin Panel</h3>
        {{-- {{auth()->user()->name}} --}}
    </section>

    {{-- Patients --}}
    <section class="container">
        <div>
            @if (session('doctorDetailsAddOkay'))
                <div style="color: green; margin: 10px;">{{ session('doctorDetailsAddOkay') }}</div>
            @endif
            <div class="d-flex justify-content-between">
                <h3>Doctors</h3>
                <h6>Total: {{ $doctors->count() }}</h6>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th class="text-center" style="width: 1%;">Delete</th>
                            <th class="text-center" style="width: 1%;">Activity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doctors as $index => $d)
                            <tr>
                                <th>{{ $index + 1 }}</th>
                                <td>{{ $d['name'] }}</td>
                                <td>{{ $d['email'] }}</td>
                                <td>{{ $d['number'] }}</td>

                                <td class="text-center text-nowrap">
                                    <a href="{{ url('Admin/Doctor/DeleteThis', $d['id']) }}"
                                        onclick="return confirm('Are you sure? You want to delete {{ $d['name'] }} account?')">
                                        <i class="bi bi-trash"
                                            style="color:#6c757d; display:contents; position:absolute; font-size:18px; font-weight:bold; cursor:pointer; transition:0.2s;"
                                            onmouseover="this.style.color='red'; this.style.fontSize='22px'"
                                            onmouseout="this.style.color='#6c757d'; this.style.fontSize='18px'">
                                        </i>
                                    </a>
                                </td>

                                <td class="text-center text-nowrap">
                                    <a href="{{ url('Admin/AdminDoctorDetailsForm', $d['id']) }}">
                                        <i class="bi bi-activity"
                                            style="color:#6c757d; display:contents; position:absolute; font-size:18px; font-weight:bold; cursor:pointer; transition:0.2s;"
                                            onmouseover="this.style.color='green'; this.style.fontSize='22px'"
                                            onmouseout="this.style.color='#6c757d'; this.style.fontSize='18px'">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $doctors->links() }}
        </div>
    </section>
@endsection
