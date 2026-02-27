@extends('layouts.app')

@section('title', 'Manage Reviews')

@section('content')
<div class="container mt-5">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Review Management</h2>
        <button class="btn"
            data-bs-toggle="modal"
            data-bs-target="#createReviewModal"
            style="background-color:#3A3A3A;
                   color:#A0D25D;
                   border:2px solid #A0D25D;
                   font-weight:600;
                   padding:8px 18px;
                   border-radius:8px;">
            + Add Review
        </button>
    </div>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Review Table --}}
    <div class="card border-2" style="border-color: #A0D25D;">
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Review</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($reviews as $review)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>
                                <img src="{{ asset('storage/' . $review->img) }}"
                                     width="60"
                                     class="img-thumbnail">
                            </td>

                            <td>{{ $review->name }}</td>
                            <td>{{ $review->designation }}</td>
                            <td>{{ $review->review }}</td>

                            <td>
                                <button class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editReviewModal{{ $review->id }}">
                                    Edit
                                </button>

                                <form action="{{ route('admin.reviews.destroy', $review->id) }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('Delete this review?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                No reviews found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>


{{-- EDIT MODALS --}}
@foreach($reviews as $review)
<div class="modal fade" id="editReviewModal{{ $review->id }}" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.reviews.update', $review->id) }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5>Edit Review</h5>
                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               value="{{ $review->name }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Designation</label>
                        <input type="text"
                               name="designation"
                               class="form-control"
                               value="{{ $review->designation }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Review</label>
                        <textarea name="review"
                                  class="form-control"
                                  rows="3"
                                  required>{{ $review->review }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label>Image</label>
                        <input type="file"
                               name="img"
                               class="form-control">
                        <img src="{{ asset('storage/' . $review->img) }}"
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
<div class="modal fade" id="createReviewModal" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.reviews.store') }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h5>Add Review</h5>
                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Designation</label>
                        <input type="text"
                               name="designation"
                               class="form-control"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Review</label>
                        <textarea name="review"
                                  class="form-control"
                                  rows="3"
                                  required></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Image</label>
                        <input type="file"
                               name="img"
                               class="form-control">
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