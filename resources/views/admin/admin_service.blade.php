@extends('layouts.app')

@section('title', 'Manage Services')

@section('content')
<div class="container mt-5">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Services Management</h2>
        <button class="btn"
            data-bs-toggle="modal"
            data-bs-target="#createServiceModal"
            style="background-color:#3A3A3A;
                   color:#A0D25D;
                   border:2px solid #A0D25D;
                   font-weight:600;
                   padding:8px 18px;
                   border-radius:8px;">
            + Add Service
        </button>
    </div>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Services Table --}}
    <div class="card border-2" style="border-color: #A0D25D;">
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($services as $service)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $service->title }}</td>
                            <td>{{ Str::limit($service->description, 80) }}</td>

                            <td>
                                <button class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editServiceModal{{ $service->id }}">
                                    Edit
                                </button>

                                <form action="{{ route('admin.services.destroy', $service->id) }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('Delete this service?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">
                                No services found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>


{{-- EDIT MODALS --}}
@foreach($services as $service)
<div class="modal fade" id="editServiceModal{{ $service->id }}" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.services.update', $service->id) }}"
              method="POST">
            @csrf
            @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5>Edit Service</h5>
                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-3">
                        <label>Title</label>
                        <input type="text"
                               name="title"
                               class="form-control"
                               value="{{ $service->title }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Description</label>
                        <textarea name="description"
                                  class="form-control"
                                  required>{{ $service->description }}</textarea>
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
<div class="modal fade" id="createServiceModal" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.services.store') }}"
              method="POST">
            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h5>Add Service</h5>
                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-3">
                        <label>Title</label>
                        <input type="text"
                               name="title"
                               class="form-control"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Description</label>
                        <textarea name="description"
                                  class="form-control"
                                  required></textarea>
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