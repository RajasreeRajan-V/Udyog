@extends('layouts.app')

@section('title', 'Manage Contact Messages')

@section('content')
    <div class="container mt-5">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Contact Messages</h2>
        </div>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Contact Table --}}
        <div class="card border-2" style="border-color: #A0D25D;">
            <div class="card-body">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Reply</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($contactuses as $contact)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>
                                    {{-- Reply Button --}}
                                    <button class="btn btn-sm btn-success" data-bs-toggle="modal"
                                        data-bs-target="#replyModal{{ $contact->id }}">
                                        Reply
                                    </button>
                                </td>
                                <td>
                                    <form action="{{ route('admin.contactus.destroy', $contact->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this message?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">
                                    No contact messages found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


<!-- Mail Style Reply Modal -->
<div class="modal fade" id="replyModal{{ $contact->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content shadow">

            <form action="{{ route('admin.contactus.reply', $contact->id) }}" method="POST">
                @csrf

                {{-- Modal Header --}}
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title">
                        <i class="bi bi-envelope-fill me-2"></i> Compose Reply
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                {{-- Modal Body --}}
                <div class="modal-body">

                    {{-- Email Details --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">To</label>
                        <input type="text" class="form-control" value="{{ $contact->email }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Subject</label>
                        <input type="text" class="form-control" value="Re: {{ $contact->subject }}" readonly>
                    </div>

                    {{-- Original Message --}}
                    <div class="mb-4 p-3 border rounded bg-light">
                        <small class="text-muted fw-bold">Original Message:</small>
                        <p class="mb-0 mt-2">
                            {{ $contact->message }}
                        </p>
                    </div>

                    {{-- Reply Box --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Your Message</label>
                        <textarea name="replay" class="form-control" rows="6" placeholder="Write your reply here..."
                            required>{{ $contact->replay }}</textarea>
                    </div>

                </div>

                {{-- Modal Footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button type="submit" class="btn" style="background-color:#A0D25D; color:#3A3A3A;">
                        <i class="bi bi-send-fill me-1"></i> Send Reply
                    </button>
                </div>

            </form>

        </div>
    </div>
</div> 