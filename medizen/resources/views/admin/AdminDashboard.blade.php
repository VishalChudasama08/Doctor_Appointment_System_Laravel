@extends('admin/AdminLayout')

@section('admin-content')
    <div class="container">
        <section>
            <h3>Admin Panel</h3>
            {{-- {{auth()->user()->name}} --}}
        </section>

        {{-- Patients --}}
        <section>
            <div>
                <h3>Patients</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        {{-- Doctors --}}
        <section>
            <div>
                <h3>Doctors</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <a href="{{ url('Admin/DoctorRegister') }}" class="btn btn-small btn-success">Doctor Register</a>
    </div>
@endsection
