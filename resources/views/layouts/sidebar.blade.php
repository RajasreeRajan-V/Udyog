<div class="d-flex">
    <!-- Mobile Toggle Button -->
    <button class="btn btn-toggle d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas"
        aria-controls="sidebarOffcanvas">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>
    </button>

    <!-- Sidebar for Desktop -->
    <aside class="sidebar bg-white shadow-sm d-none d-lg-block">
        <div class="p-4 border-bottom">
            <img src="{{ asset('assets/images/logo_main3.png') }}" style="width: 200px; height: auto;"
                class="mb-2 bg-white p-2 rounded">

            <h5 class="mb-0 fw-semibold text-heading">
                Admin Panel
            </h5>
        </div>

        <ul class="nav flex-column p-3">
            <li class="nav-item mb-2">
                <a href="{{ route('admin.dashboard') }}"
                    class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    Dashboard
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="{{ route('admin.aboutus.index') }}" class="nav-link">
                    Manage About Us
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="{{ route('admin.teams.index') }}" class="nav-link">
                    Manage Team Members
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('admin.products.index') }}" class="nav-link">
                    Manage Products
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('admin.services.index') }}" class="nav-link">
                    Manage Services
                </a>
            </li>
            <li class="nav-item mt-4">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="nav-link text-danger w-100 text-start border-0 bg-transparent">
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </aside>

    <!-- Offcanvas Sidebar for Mobile -->
    <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="sidebarOffcanvas"
        aria-labelledby="sidebarOffcanvasLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title fw-semibold text-heading" id="sidebarOffcanvasLabel">Admin Panel</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <ul class="nav flex-column p-3">
                <li class="nav-item mb-2">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        Dashboard
                    </a>
                </li>


                <li class="nav-item mb-2">
                    <a href="#" class="nav-link">
                        Users
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="#" class="nav-link">
                        Careers
                    </a>
                </li>

                <li class="nav-item mt-4">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="nav-link text-danger w-100 text-start border-0 bg-transparent">
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1 p-4">
        @yield('content')
    </div>

</div>

<style>
  /* Mobile Toggle Button */
.btn-toggle {
    position: fixed;
    top: 20px;
    left: 20px;
    z-index: 1040;
    background-color: #A0D25D;
    color: #3A3A3A;
    border: none;
    border-radius: 8px;
    padding: 10px 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
}

.btn-toggle:hover {
    background-color: #3A3A3A;
    color: #A0D25D;
    transform: scale(1.05);
}

.btn-toggle:active {
    transform: scale(0.95);
}

/* Offcanvas Sidebar Styling */
.offcanvas {
    background: #3A3A3A;
}

.offcanvas-header {
    background-color: rgba(160, 210, 93, 0.08);
    border-bottom: 1px solid rgba(160, 210, 93, 0.2) !important;
}

.offcanvas-title {
    color: #A0D25D !important;
}

.offcanvas .btn-close {
    filter: invert(1);
    opacity: 0.8;
}

.offcanvas .btn-close:hover {
    opacity: 1;
}

/* Offcanvas navigation links */
.offcanvas .nav-link {
    color: #ffffff;
    border-radius: 10px;
    padding: 12px 16px;
    margin-bottom: 6px;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    font-weight: 500;
}

.offcanvas .nav-link:hover {
    background-color: rgba(160, 210, 93, 0.15);
    color: #A0D25D;
}

.offcanvas .nav-link.active {
    background-color: #A0D25D;
    color: #3A3A3A;
    font-weight: 600;
}

.offcanvas .nav-link.text-danger {
    color: #A0D25D !important;
    border-top: 1px solid rgba(160, 210, 93, 0.2);
    padding-top: 16px;
}

.offcanvas .nav-link.text-danger:hover {
    background-color: rgba(160, 210, 93, 0.15);
    color: #ffffff !important;
}

/* Adjust main content padding on mobile */
@media (max-width: 991.98px) {
    .flex-grow-1 {
        padding-top: 80px !important;
    }

    body {
        margin-left: 0 !important;
    }
}

/* Sidebar scroll */
.sidebar {
    max-height: 100vh;
    overflow-y: auto;
}

/* Optional: styled scrollbar */
.sidebar::-webkit-scrollbar {
    width: 6px;
}

.sidebar::-webkit-scrollbar-thumb {
    background-color: #A0D25D;
    border-radius: 3px;
}

.sidebar::-webkit-scrollbar-track {
    background: transparent;
}
/* Sidebar Styling */
.sidebar {
    width: 260px;
    min-height: 100vh;
    max-height: 100vh;
    overflow-y: auto;

    background: linear-gradient(135deg, #3A3A3A 40%, #A0D25D 100%);
    box-shadow: 2px 0 18px rgba(0, 0, 0, 0.15);

    position: fixed;
    left: 0;
    top: 0;
    z-index: 1000;
}
</style>

<script>
    const sidebar = document.querySelector('.sidebar');
    const toggleBtn = document.getElementById('sidebarToggle');
    const overlay = document.getElementById('sidebarOverlay');

    toggleBtn?.addEventListener('click', () => {
        sidebar.classList.toggle('show');
        overlay.classList.toggle('show');
    });

    overlay?.addEventListener('click', () => {
        sidebar.classList.remove('show');
        overlay.classList.remove('show');
    });
</script>