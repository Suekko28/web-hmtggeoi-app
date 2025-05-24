<!--  Mobilenavbar -->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar"
    aria-labelledby="offcanvasWithBothOptionsLabel">
    <nav class="sidebar-nav scroll-sidebar">
        <div class="offcanvas-header justify-content-between">
            <img src="{{ asset('/images/logo-hmtggeoi.png') }}" class="dark-logo" alt="Logo-Dark" height="64"
                height="64" />
            <img src="{{ asset('/images/logo-hmtggeoi.png') }}" class="light-logo" alt="Logo-light" height="64"
                height="64" /> <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body h-n80" data-simplebar="" data-simplebar>
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
                    <a class="sidebar-link has-arrow {{ request()->is('p-pam', 'orienteering-nasional', '') ? 'active' : '' }}"
                        href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-chart-donut-3"></i>
                        </span>
                        <span class="hide-menu">Program Kerja</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level {{ request()->is('p-pam', '') ? 'in' : '' }}">
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
                                class="sidebar-link {{ request()->is('orienteering-nasional') ? 'active' : '' }}"
                                aria-expanded="false">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Orienteering Nasional</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link {{ request()->is('') ? 'active' : '' }}">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">GEOI Fair</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link {{ request()->is('') ? 'active' : '' }}">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">HUT HMTG "GEOI"</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->is('main/index6') ? 'active' : '' }}" aria-expanded="false">
                        <span>
                            <i class="fa-solid fa-graduation-cap"></i>
                        </span>
                        <span class="hide-menu">Alumni</span>
                    </a>
                </li>

            </ul>
        </div>
    </nav>
</div>
