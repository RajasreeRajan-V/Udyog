@extends('layouts.app')

@section('title', 'Manage Applications')

@section('content')
<div class="container mt-5">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Career Applications</h2>
    </div>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Applications Table --}}
    <div class="card border-2" style="border-color: #A0D25D;">
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Applied For</th>
                        <th>Resume</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($applications as $application)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $application->full_name }}</td>
                            <td>{{ $application->email_address }}</td>
                            <td>{{ $application->phone_number }}</td>

                            <td>
                               {{ $application->career->job_title ?? 'N/A' }}
                            </td>

                            <td>
                                @if($application->resume)
                                    <a href="{{ asset('storage/' . $application->resume) }}"
                                       target="_blank"
                                       class="btn btn-sm btn-info">
                                        View Resume
                                    </a>
                                @else
                                    No Resume
                                @endif
                            </td>

                            <td>
                                <form action="{{ route('admin.applications.destroy', $application->id) }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger"
                                            onclick="return confirm('Delete this application?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                No applications found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection