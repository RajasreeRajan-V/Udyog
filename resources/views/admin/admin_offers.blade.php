@extends('layouts.app')

@section('title', 'Manage Offers')

@section('content')
<div class="container mt-5">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Offer Management</h2>
        <button class="btn"
            data-bs-toggle="modal"
            data-bs-target="#createOfferModal"
            style="background-color:#3A3A3A;
                   color:#A0D25D;
                   border:2px solid #A0D25D;
                   font-weight:600;
                   padding:8px 18px;
                   border-radius:8px;">
            + Add Offer
        </button>
    </div>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Offers Table --}}
    <div class="card border-2" style="border-color: #A0D25D;">
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Discount</th>
                        <th>Valid Till</th>
                        <th>Badge</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($offers as $offer)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $offer->title }}</td>
                            <td>{{ $offer->discount_text }}</td>
                            <td>
                                {{ $offer->valid_till 
                                    ? \Carbon\Carbon::parse($offer->valid_till)->format('d M Y') 
                                    : '-' }}
                            </td>
                            <td>{{ $offer->badge ?? '-' }}</td>
                            <td>
                                <span class="badge 
                                    {{ $offer->type == 'current' ? 'bg-success' : 'bg-secondary' }}">
                                    {{ ucfirst($offer->type) }}
                                </span>
                            </td>

                            <td>
                                <button class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editOfferModal{{ $offer->id }}">
                                    Edit
                                </button>

                                <form action="{{ route('admin.offers.destroy', $offer->id) }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('Delete this offer?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                No offers found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>


{{-- EDIT MODALS --}}
@foreach($offers as $offer)
<div class="modal fade" id="editOfferModal{{ $offer->id }}" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.offers.update', $offer->id) }}"
              method="POST">
            @csrf
            @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5>Edit Offer</h5>
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
                               value="{{ $offer->title }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Description</label>
                        <textarea name="description"
                                  class="form-control"
                                  rows="3"
                                  required>{{ $offer->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label>Discount Text</label>
                        <input type="text"
                               name="discount_text"
                               class="form-control"
                               value="{{ $offer->discount_text }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Valid Till</label>
                        <input type="date"
                               name="valid_till"
                               class="form-control"
                               value="{{ $offer->valid_till }}">
                    </div>

                    <div class="mb-3">
                        <label>Badge (Hurry / Coming Soon)</label>
                        <input type="text"
                               name="badge"
                               class="form-control"
                               value="{{ $offer->badge }}">
                    </div>

                    <div class="mb-3">
                        <label>Type</label>
                        <select name="type"
                                class="form-control"
                                required>
                            <option value="current" {{ $offer->type == 'current' ? 'selected' : '' }}>Current</option>
                            <option value="upcoming" {{ $offer->type == 'upcoming' ? 'selected' : '' }}>Upcoming</option>
                        </select>
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
<div class="modal fade" id="createOfferModal" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.offers.store') }}"
              method="POST">
            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h5>Add Offer</h5>
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
                                  rows="3"
                                  required></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Discount Text</label>
                        <input type="text"
                               name="discount_text"
                               class="form-control"
                               placeholder="20% OFF / Flat 40% OFF"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Valid Till</label>
                        <input type="date"
                               name="valid_till"
                               class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Badge</label>
                        <input type="text"
                               name="badge"
                               class="form-control"
                               placeholder="Hurry / Coming Soon">
                    </div>

                    <div class="mb-3">
                        <label>Type</label>
                        <select name="type"
                                class="form-control"
                                required>
                            <option value="current">Current</option>
                            <option value="upcoming">Upcoming</option>
                        </select>
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