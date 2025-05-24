<!-- ---------------------------------- -->
<!-- Start Vertical Layout Sidebar -->
<!-- ---------------------------------- -->
<div class="brand-logo d-flex align-items-center justify-content-between">
    <a href="/main/index" class="text-nowrap logo-img mx-auto">
        <img src="{{ asset('/images/logo-hmtggeoi.png') }}" class="dark-logo mx-auto" alt="Logo-Dark" width="120"
            height="120" />
        <img src="{{ asset('/images/logo-hmtggeoi.png') }}" class="light-logo mx-auto" alt="Logo-light" width="120"
            height="120" />
    </a>
    <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
        <i class="ti ti-x"></i>
    </a>
</div>

<nav class="sidebar-nav scroll-sidebar" data-simplebar>
    <ul id="sidebarnav">
        <!-- ---------------------------------- -->
        <!-- Home -->
        <!-- ---------------------------------- -->
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
        </li>

        <!-- ---------------------------------- -->
        <!-- Dashboard -->
        <!-- ---------------------------------- -->
        <li class="sidebar-item">
            <a href="{{ route('dashboard.index') }}"
                class="sidebar-link {{ request()->is('dashboard') ? 'active' : '' }}" aria-expanded="false">
                <span>
                    <i class="ti ti-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link has-arrow {{ request()->is('p-pam', 'orienteering-nasional', 'geoi-fair', 'hut-hmtg', '') ? 'active' : '' }}"
                href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                    <i class="ti ti-chart-donut-3"></i>
                </span>
                <span class="hide-menu">Program Kerja</span>
            </a>
            <ul aria-expanded="false"
                class="collapse first-level {{ request()->is('p-pam', '') ? 'in' : '' }}">
                <li class="sidebar-item">
                    <a href="{{ route('p-pam.index') }}"
                        class="sidebar-link {{ request()->is('p-pam') ? 'active' : '' }}" aria-expanded="false">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">P-PAM</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('orienteering-nasional.index') }}"
                        class="sidebar-link {{ request()->is('orienteering-nasional', '') ? 'active' : '' }}"
                        aria-expanded="false">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Orienteering Nasional</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('geoi-fair.index') }}"
                        class="sidebar-link {{ request()->is('geoi-fair', '') ? 'active' : '' }}">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">GEOI Fair</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('hut-hmtg.index') }}"
                        class="sidebar-link {{ request()->is('hut-hmtg', '') ? 'active' : '' }}">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">HUT HMTG "GEOI"</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('alumni.index') }}" class="sidebar-link {{ request()->is('alumni') ? 'active' : '' }}"
                aria-expanded="false">
                <span>
                    <i class="fa-solid fa-graduation-cap"></i>
                </span>
                <span class="hide-menu">Alumni</span>
            </a>
        </li>
    </ul>
</nav>

<!-- ---------------------------------- -->
<!-- Start Vertical Layout Sidebar -->
<!-- ---------------------------------- -->
