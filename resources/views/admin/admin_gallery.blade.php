@extends('layouts.app')

@section('title', 'Manage Gallery')

@section('content')
<div class="container mt-5">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Gallery Management</h2>
        <button class="btn"
            data-bs-toggle="modal"
            data-bs-target="#createGalleryModal"
            style="background-color:#3A3A3A;
                   color:#A0D25D;
                   border:2px solid #A0D25D;
                   font-weight:600;
                   padding:8px 18px;
                   border-radius:8px;">
            + Add Image
        </button>
    </div>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Gallery Table --}}
    <div class="card border-2" style="border-color: #A0D25D;">
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($galleries as $gallery)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>
                                <img src="{{ asset('storage/' . $gallery->img) }}"
                                     width="60"
                                     class="img-thumbnail">
                            </td>

                            <td>{{ $gallery->title }}</td>
                            <td>{{ $gallery->category }}</td>

                            <td>
                                <button class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editGalleryModal{{ $gallery->id }}">
                                    Edit
                                </button>

                                <form action="{{ route('admin.galleries.destroy', $gallery->id) }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('Delete this image?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">
                                No gallery items found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>


{{-- EDIT MODALS --}}
@foreach($galleries as $gallery)
<div class="modal fade" id="editGalleryModal{{ $gallery->id }}" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.galleries.update', $gallery->id) }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5>Edit Gallery Item</h5>
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
                               value="{{ $gallery->title }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Category</label>
                        <select name="category"
                                class="form-control"
                                required>
                            <option value="Granite" {{ $gallery->category == 'Granite' ? 'selected' : '' }}>Granite</option>
                            <option value="Marble" {{ $gallery->category == 'Marble' ? 'selected' : '' }}>Marble</option>
                            <option value="Tiles" {{ $gallery->category == 'Tiles' ? 'selected' : '' }}>Tiles</option>
                            <option value="Natural Stones" {{ $gallery->category == 'Natural Stones' ? 'selected' : '' }}>Natural Stones</option>
                            <option value="Quartz" {{ $gallery->category == 'Quartz' ? 'selected' : '' }}>Quartz</option>
                            <option value="Sandstone" {{ $gallery->category == 'Sandstone' ? 'selected' : '' }}>Sandstone</option>
                            <option value="Limestone" {{ $gallery->category == 'Limestone' ? 'selected' : '' }}>Limestone</option>
                            <option value="Slate" {{ $gallery->category == 'Slate' ? 'selected' : '' }}>Slate</option>
                            <option value="Onyx" {{ $gallery->category == 'Onyx' ? 'selected' : '' }}>Onyx</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Image</label>
                        <input type="file"
                               name="img"
                               class="form-control">
                        <img src="{{ asset('storage/' . $gallery->img) }}"
                             width="80"
                             class="img-thumbnail mt-2">
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
<div class="modal fade" id="createGalleryModal" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.galleries.store') }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h5>Add Gallery Image</h5>
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
                        <label>Category</label>
                        <select name="category"
                                class="form-control"
                                required>
                            <option value="">-- Select Category --</option>
                            <option value="Granite">Project</option>
                            <option value="Marble">Work Process</option>
                            <option value="Tiles">Team </option>
                            <option value="Natural Stones">Celebrations</option>
                           
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Image</label>
                        <input type="file"
                               name="img"
                               class="form-control"
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