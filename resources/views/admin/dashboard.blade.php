@extends('layouts.app')

@section('content')

<div class="row g-4">
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="heading-color">Users</h5>
                <p class="text-muted">Manage application users</p>
                <a href="{{ route('admin.applications.index') }}" class="btn btn-accent btn-sm">Open</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="heading-color">Careers</h5>
                <p class="text-muted">Manage career paths</p>
                <a href="{{ route('admin.careers.index') }}" class="btn btn-accent btn-sm">Open</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="heading-color">Contact Us</h5>
            <p class="text-muted">Get in touch with our team</p>
            <a href="{{ route('admin.contactus.index') }}" class="btn btn-accent btn-sm">Contact Now</a>
        </div>
    </div>
</div>
</div>
@endsection
