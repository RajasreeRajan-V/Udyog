@extends('layouts.app')

@section('title', 'Manage About Us')

@section('content')
    <div class="container mt-5">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>About Us Management</h2>
            <button class="btn" data-bs-toggle="modal" data-bs-target="#createModal" style="background-color:#3A3A3A;
                   color:#A0D25D;
                   border:2px solid #A0D25D;
                   font-weight:600;
                   padding:8px 18px;
                   border-radius:8px;
                   transition:0.3s;">
                + Add About Us
            </button>
        </div>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


{{-- About Us Table --}}
<div class="card border-2" style="border-color: #A0D25D;">
    <div class="card-body">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Heading</th>
                    <th>Title</th>
                    <th>Tagline</th>
                    <th>Person 1</th>
                    <th>Person 2</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if($aboutus)
                    <tr>
                        <td>1</td>

                        <td>{{ $aboutus->heading }}</td>

                        <td>{{ $aboutus->title }}</td>

                        <td>{{ $aboutus->tagline }}</td>

                        {{-- Person 1 --}}
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('storage/' . $aboutus->person1_image) }}"
                                     class="img-thumbnail"
                                     width="60">
                                <div>
                                    <strong>{{ $aboutus->person1_name }}</strong><br>
                                    <small>{{ $aboutus->person1_position }}</small>
                                </div>
                            </div>
                        </td>

                        {{-- Person 2 --}}
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('storage/' . $aboutus->person2_image) }}"
                                     class="img-thumbnail"
                                     width="60">
                                <div>
                                    <strong>{{ $aboutus->person2_name }}</strong><br>
                                    <small>{{ $aboutus->person2_position }}</small>
                                </div>
                            </div>
                        </td>

                        <td>
                            <button class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editModal{{ $aboutus->id }}">
                                Edit
                            </button>
                        </td>
                    </tr>
                @else
                    <tr>
                        <td colspan="7" class="text-center">No About Us entry found.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

    </div>
@if($aboutus)
<div class="modal fade" id="editModal{{ $aboutus->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('admin.aboutus.update', $aboutus->id) }}" 
              method="POST" 
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="modal-content">
                
                <div class="modal-header">
                    <h5 class="modal-title">Edit About Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    {{-- Main Section --}}
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Heading</label>
                            <input type="text" name="heading"
                                   class="form-control"
                                   value="{{ $aboutus->heading }}" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="title"
                                   class="form-control"
                                   value="{{ $aboutus->title }}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tagline</label>
                        <input type="text" name="tagline"
                               class="form-control"
                               value="{{ $aboutus->tagline }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description"
                                  class="form-control"
                                  rows="3"
                                  required>{{ $aboutus->description }}</textarea>
                    </div>

                    <hr>

                    {{-- Person 1 --}}
                    <h6 class="mb-3">Person 1 Details</h6>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="person1_name"
                                   class="form-control"
                                   value="{{ $aboutus->person1_name }}" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Position</label>
                            <input type="text" name="person1_position"
                                   class="form-control"
                                   value="{{ $aboutus->person1_position }}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="person1_image" class="form-control">
                        <img src="{{ asset('storage/' . $aboutus->person1_image) }}"
                             class="img-thumbnail mt-2"
                             width="80">
                    </div>

                    <hr>

                    {{-- Person 2 --}}
                    <h6 class="mb-3">Person 2 Details</h6>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="person2_name"
                                   class="form-control"
                                   value="{{ $aboutus->person2_name }}" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Position</label>
                            <input type="text" name="person2_position"
                                   class="form-control"
                                   value="{{ $aboutus->person2_position }}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="person2_image" class="form-control">
                        <img src="{{ asset('storage/' . $aboutus->person2_image) }}"
                             class="img-thumbnail mt-2"
                             width="80">
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>

            </div>
        </form>
    </div>
</div>
@endif

{{-- Create Modal --}}
<div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('admin.aboutus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Add About Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    {{-- Main Section --}}
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Heading</label>
                            <input type="text" name="heading" class="form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tagline</label>
                        <input type="text" name="tagline" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3" required></textarea>
                    </div>

                    <hr>

                    {{-- Person 1 --}}
                    <h6 class="mb-3">Person 1 Details</h6>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Person 1 Name</label>
                            <input type="text" name="person1_name" class="form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Person 1 Position</label>
                            <input type="text" name="person1_position" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Person 1 Image</label>
                        <input type="file" name="person1_image" class="form-control" required>
                    </div>

                    <hr>

                    {{-- Person 2 --}}
                    <h6 class="mb-3">Person 2 Details</h6>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Person 2 Name</label>
                            <input type="text" name="person2_name" class="form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Person 2 Position</label>
                            <input type="text" name="person2_position" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Person 2 Image</label>
                        <input type="file" name="person2_image" class="form-control" required>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </div>
        </form>
    </div>
</div>

@endsection