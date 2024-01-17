<div class="navbar-header">
    <div class="d-flex">
        
        <div class="navbar-brand-box horizontal-logo">
            <a href="/" class="l">
                <span class="logo-sm">
                    <img src="{{ asset('assets/images/logheader.jpg') }}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('assets/images/logheader.jpg') }}" alt="" height="17">
                </span>
            </a>

            <a href="/" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{{ asset('assets/images/logheader.jpg') }}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('assets/images/logheader.jpg') }}" alt="" height="17">
                </span>
            </a>
        </div>

        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
            id="topnav-hamburger-icon">
            <span class="hamburger-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>
    </div>

    <div class="d-flex align-items-center">

        <div class="dropdown ms-sm-3 header-item topbar-user">
            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="d-flex align-items-center">
                    <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/logheader.jpg') }}"
                        alt="Header Avatar">
                    <span class="text-start ms-xl-2">
                        <span class="d-none d-xl-inline-block ms-1 fw-semibold user-name-text">Admin</span>
                    </span>
                </span>
            </button>

        </div>
    </div>
</div>
