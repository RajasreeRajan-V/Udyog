@extends('layouts.app')

@section('content')

<div class="row g-4">
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="heading-color">Users</h5>
                <p class="text-muted">Manage application users</p>
                <a href="#" class="btn btn-accent btn-sm">Open</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="heading-color">Careers</h5>
                <p class="text-muted">Manage career paths</p>
                <a href="#" class="btn btn-accent btn-sm">Open</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="heading-color">Settings</h5>
                <p class="text-muted">Application configuration</p>
                <a href="#" class="btn btn-accent btn-sm">Open</a>
            </div>
        </div>
    </div>
</div>
@endsection
