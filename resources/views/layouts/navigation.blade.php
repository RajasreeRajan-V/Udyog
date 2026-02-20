<nav class="navbar navbar-expand-lg shadow-sm px-4" style="background: linear-gradient(135deg, #A0D25D 0%, #3A3A3A 100%);
            padding-top:14px; padding-bottom:14px;">

    <div class="container-fluid">

        <!-- Brand with Logo -->
        <a class="navbar-brand fw-semibold d-flex align-items-center gap-2" href="{{ route('admin.dashboard') }}" style="padding:4px;
          border:3px solid #A0D25D;
          box-shadow:0 0 0 3px #3A3A3A;
          border-radius:12px;">

            <img src="{{ asset('assets/images/logo_main3.png') }}" alt="Udyog Logo" height="40" style="background:#ffffff;
                padding:4px;
                border-radius:8px;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
            style="border:none;">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">

            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                        href="{{ route('admin.dashboard') }}" style="color: {{ request()->routeIs('admin.dashboard') ? '#3A3A3A' : '#ffffff' }};
                              font-weight:600;
                              margin-right:15px;
                              transition:0.3s;">
                        Dashboard
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color:#ffffff;
                              font-weight:500;">
                        {{ Auth::user()->name }}
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end" style="border-radius:12px;
                               border:none;
                               box-shadow:0 10px 25px rgba(0,0,0,0.15);">

                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item" style="color:#3A3A3A;
                                               font-weight:500;
                                               padding:10px 18px;
                                               transition:0.2s;">
                                    Logout
                                </button>
                            </form>
                        </li>

                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>