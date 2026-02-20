@extends('layouts.app')

@section('title', 'Manage About Us')

@section('content')
    <div class="container mt-5">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>About Us Management</h2>
            <button class="btn" data-bs-toggle="modal" data-bs-target="#createTeamModal" style="background-color:#3A3A3A;
                       color:#A0D25D;
                       border:2px solid #A0D25D;
                       font-weight:600;
                       padding:8px 18px;
                       border-radius:8px;
                       transition:0.3s;">
                + Add Team Member
            </button>
        </div>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Team Members Section --}}
        <div class="card border-2" style="border-color: #A0D25D;">
    <div class="card-body">
        <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($teams as $team)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    <img src="{{ asset('storage/' . $team->image) }}" width="60" class="img-thumbnail">
                                </td>

                                <td>{{ $team->name }}</td>
                                <td>{{ $team->position }}</td>

                                <td>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editTeamModal{{ $team->id }}">
                                        Edit
                                    </button>

                                    <form action="{{ route('admin.teams.destroy', $team->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this member?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">
                                    No team members found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    @foreach($teams as $team)
        <div class="modal fade" id="editTeamModal{{ $team->id }}" tabindex="-1">
            <div class="modal-dialog">
                <form action="{{ route('admin.teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>Edit Team Member</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $team->name }}" required>
                            </div>

                            <div class="mb-3">
                                <label>Position</label>
                                <input type="text" name="position" class="form-control" value="{{ $team->position }}" required>
                            </div>

                            <div class="mb-3">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{ asset('storage/' . $team->image) }}" width="80" class="img-thumbnail mt-2">
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-warning">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
    
    {{-- Create Modal --}}
    <div class="modal fade" id="createTeamModal" tabindex="-1">
        <div class="modal-dialog">
            <form action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Add Team Member</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Position</label>
                            <input type="text" name="position" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" required>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-success">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection