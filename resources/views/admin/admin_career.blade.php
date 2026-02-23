@extends('layouts.app')

@section('title', 'Manage Careers')

@section('content')
<div class="container mt-5">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Career Management</h2>
        <button class="btn"
            data-bs-toggle="modal"
            data-bs-target="#createCareerModal"
            style="background-color:#3A3A3A;
                   color:#A0D25D;
                   border:2px solid #A0D25D;
                   font-weight:600;
                   padding:8px 18px;
                   border-radius:8px;">
            + Add Job
        </button>
    </div>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Career Table --}}
    <div class="card border-2" style="border-color: #A0D25D;">
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Job Title</th>
                        <th>Salary</th>
                        <th>Experience</th>
                        <th>Skills</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($careers as $career)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $career->job_title }}</td>
                            <td>{{ $career->salary_range }}</td>
                            <td>{{ $career->experience }}</td>
                            <td>{{ $career->skills }}</td>

                            <td>
                                <button class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editCareerModal{{ $career->id }}">
                                    Edit
                                </button>

                                <form action="{{ route('admin.careers.destroy', $career->id) }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('Delete this job?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                No career posts found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>


{{-- EDIT MODALS --}}
@foreach($careers as $career)
<div class="modal fade" id="editCareerModal{{ $career->id }}" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.careers.update', $career->id) }}"
              method="POST">
            @csrf
            @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5>Edit Career</h5>
                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-3">
                        <label>Job Title</label>
                        <input type="text"
                               name="job_title"
                               class="form-control"
                               value="{{ $career->job_title }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Salary Range</label>
                        <input type="text"
                               name="salary_range"
                               class="form-control"
                               value="{{ $career->salary_range }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Description</label>
                        <textarea name="description"
                                  class="form-control"
                                  rows="3"
                                  required>{{ $career->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label>Experience</label>
                        <input type="text"
                               name="experience"
                               class="form-control"
                               value="{{ $career->experience }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Skills (comma separated)</label>
                        <input type="text"
                               name="skills"
                               class="form-control"
                               value="{{ $career->skills }}"
                               required>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary"
                            data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit"
                            class="btn btn-warning">
                        Update
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endforeach


{{-- CREATE MODAL --}}
<div class="modal fade" id="createCareerModal" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.careers.store') }}"
              method="POST">
            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h5>Add Job</h5>
                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-3">
                        <label>Job Title</label>
                        <input type="text"
                               name="job_title"
                               class="form-control"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Salary Range</label>
                        <input type="text"
                               name="salary_range"
                               class="form-control"
                               placeholder="₹30K - ₹50K / Month"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Description</label>
                        <textarea name="description"
                                  class="form-control"
                                  rows="3"
                                  required></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Experience</label>
                        <input type="text"
                               name="experience"
                               class="form-control"
                               placeholder="5+ Years Experience"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Skills (comma separated)</label>
                        <input type="text"
                               name="skills"
                               class="form-control"
                               placeholder="Leadership, Granite Industry Knowledge"
                               required>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary"
                            data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit"
                            class="btn btn-success">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection