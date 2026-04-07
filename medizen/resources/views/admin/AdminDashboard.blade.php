@extends('admin/AdminLayout')

@section('admin-content')
    <div class="container">

        <!-- Appointments Table -->
        <div class="card shadow">
            <div class="card-header bg-dark d-flex justify-content-between align-items-center">
                <h5 class="mb-0  text-white">Appointments</h5>
                <span class=" text-white">Total: {{ $appointments->count() }}</span>
            </div>

            <div class="card-body table-responsive">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Patient</th>
                            <th>Doctor</th>
                            <th>Day</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($appointments as $index => $app)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $app->name }}</td>
                                <td>{{ $app->doctor->user->name }}</td>
                                <td>{{ $app->day }}</td>
                                <td>{{ $app->date }}</td>
                                <td>{{ \Carbon\Carbon::parse($app->time)->format('h:i A') }}</td>

                                <!-- Status Badge -->
                                <td>
                                    @if ($app->status == 'Pending')
                                        <span class="badge bg-warning text-black">Pending</span>
                                    @elseif($app->status == 'Approved')
                                        <span class="badge bg-success">Approved</span>
                                    @elseif($app->status == 'Rejected')
                                        <span class="badge bg-danger">Rejected</span>
                                    @else
                                        <span class="badge bg-primary">Completed</span>
                                    @endif
                                </td>

                                <!-- Action Buttons -->
                                <td>
                                    @if ($app->status == 'Pending')
                                        <form action="{{ url('appointment/updateStatus', $app->id) }}" method="POST"
                                            class="d-flex gap-1 justify-content-center">
                                            @csrf
                                            <button name="status" value="Approved" class="btn btn-success btn-sm">
                                                ✔ Approve
                                            </button>

                                            <button name="status" value="Rejected" class="btn btn-danger btn-sm">
                                                ✖ Reject
                                            </button>
                                        </form>
                                    @elseif($app->status == 'Approved')
                                        <form action="{{ url('appointment/updateStatus', $app->id) }}" method="POST">
                                            @csrf
                                            <button name="status" value="Completed" class="btn btn-primary btn-sm">
                                                ✔ Complete
                                            </button>
                                        </form>
                                    @else
                                        <span class="text-muted">No Action</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8">No appointments found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>

    </div>
@endsection
