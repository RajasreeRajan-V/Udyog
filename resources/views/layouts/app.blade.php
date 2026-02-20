<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Udyog') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    {{-- <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}"> --}}
    <style>
  :root {
    --background-color: #FFFFFF;
    --default-color: #3A3A3A;
    --heading-color: #3A3A3A;
    --accent-color: #A0D25D;
    --sidebar-bg: #3A3A3A;
    --sidebar-hover: #A0D25D;
}

/* Sidebar */
.sidebar {
    width: 260px;
    min-height: 100vh;
    background: linear-gradient(180deg, #3A3A3A 0%, #2e2e2e 100%);
    border-right: none;
    box-shadow: 2px 0 12px rgba(0, 0, 0, 0.08);
    position: fixed;
    left: 0;
    top: 0;
    z-index: 1000;
}

/* Sidebar heading */
.sidebar h5 {
    color: #A0D25D;
    font-weight: 600;
    padding: 24px 20px 16px;
    margin: 0;
    border-bottom: 1px solid rgba(160, 210, 93, 0.2);
    font-size: 1.1rem;
    letter-spacing: 0.3px;
}

/* Sidebar navigation container */
.sidebar .nav {
    padding: 16px 12px;
}

/* Sidebar links */
.sidebar .nav-link {
    color: rgba(255, 255, 255, 0.85);
    border-radius: 10px;
    padding: 12px 16px;
    margin-bottom: 6px;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    font-weight: 500;
    font-size: 0.95rem;
    display: flex;
    align-items: center;
    border: 1px solid transparent;
}

/* Icon spacing */
.sidebar .nav-link i,
.sidebar .nav-link svg {
    margin-right: 10px;
    width: 20px;
    height: 20px;
}

/* Hover */
.sidebar .nav-link:hover {
    background-color: var(--sidebar-hover);
    color: #3A3A3A;
    transform: translateX(4px);
    border-color: rgba(160, 210, 93, 0.3);
}

/* Active link */
.sidebar .nav-link.active {
    background-color: var(--accent-color);
    color: #3A3A3A;
    font-weight: 600;
    box-shadow: 0 4px 12px rgba(160, 210, 93, 0.3);
    border-color: rgba(160, 210, 93, 0.4);
}

/* Logout button */
.sidebar .nav-link.text-danger {
    color: #A0D25D !important;
    margin-top: auto;
    border-top: 1px solid rgba(160, 210, 93, 0.2);
    padding-top: 16px;
}

.sidebar .nav-link.text-danger:hover {
    background-color: rgba(160, 210, 93, 0.15);
    color: #ffffff !important;
    transform: translateX(4px);
}

/* Content adjustment */
body {
    margin-left: 260px;
}

/* Scrollbar */
.sidebar {
    overflow-y: auto;
    scrollbar-width: thin;
    scrollbar-color: rgba(160, 210, 93, 0.6) transparent;
}

.sidebar::-webkit-scrollbar {
    width: 6px;
}

.sidebar::-webkit-scrollbar-track {
    background: transparent;
}

.sidebar::-webkit-scrollbar-thumb {
    background-color: rgba(160, 210, 93, 0.6);
    border-radius: 10px;
}

.sidebar::-webkit-scrollbar-thumb:hover {
    background-color: #A0D25D;
}

/* Responsive */
@media (max-width: 768px) {
    body {
        margin-left: 0;
    }

    .sidebar {
        position: fixed;
        top: 0;
        left: -260px;
        width: 260px;
        height: 100vh;
        transition: left 0.3s ease;
        z-index: 1050;
    }

    .sidebar.show {
        left: 0;
    }

    .sidebar-overlay {
        position: fixed;
        inset: 0;
        background: rgba(58, 58, 58, 0.6);
        z-index: 1040;
        display: none;
    }

    .sidebar-overlay.show {
        display: block;
    }
}

/* Form Controls */
.form-control,
.department-select {
    color: #3A3A3A !important;
    background-color: #FFFFFF !important;
}

.form-control option,
.department-select option {
    color: #3A3A3A !important;
    background-color: #FFFFFF !important;
}

select.form-control {
    color: #3A3A3A !important;
    background-color: #FFFFFF !important;
}
    </style>
</head>

<body>

    @include('layouts.navigation')
    @include('layouts.sidebar')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>