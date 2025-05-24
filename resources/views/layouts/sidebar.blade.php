
    <!-- ---------------------------------- -->
    <!-- Start Vertical Layout Sidebar -->
    <!-- ---------------------------------- -->
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="/main/index" class="text-nowrap logo-img mx-auto">
        <img src="{{ asset('/images/logo-hmtggeoi.png')}}" class="dark-logo mx-auto" alt="Logo-Dark" width="120" height="120"/>
        <img src="{{ asset('/images/logo-hmtggeoi.png')}}" class="light-logo mx-auto" alt="Logo-light" width="120" height="120"/>
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
          <a class="sidebar-link {{ request()->is('dashboard') ? 'active' : '' }}" href="/" aria-expanded="false">
            <span>
              <i class="ti ti-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link has-arrow {{ request()->is('main/blog-posts', 'main/blog-detail') ? 'active' : '' }}" href="javascript:void(0)" aria-expanded="false">
            <span class="d-flex">
              <i class="ti ti-chart-donut-3"></i>
            </span>
            <span class="hide-menu">Program Kerja</span>
          </a>
          <ul aria-expanded="false" class="collapse first-level {{ request()->is('main/blog-posts', 'main/blog-detail') ? 'in' : '' }}">
            <li class="sidebar-item">
              <a class="sidebar-link {{ request()->is('main/blog-posts') ? 'active' : '' }}" href="/main/blog-posts" aria-expanded="false">
                <div class="round-16 d-flex align-items-center justify-content-center">
                  <i class="ti ti-circle"></i>
                </div>
                <span class="hide-menu">P-PAM</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="/main/blog-detail" class="sidebar-link {{ request()->is('main/blog-detail') ? 'active' : '' }}">
                <div class="round-16 d-flex align-items-center justify-content-center">
                  <i class="ti ti-circle"></i>
                </div>
                <span class="hide-menu">Orienteering Nasional</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="/main/blog-detail" class="sidebar-link {{ request()->is('main/blog-detail') ? 'active' : '' }}">
                <div class="round-16 d-flex align-items-center justify-content-center">
                  <i class="ti ti-circle"></i>
                </div>
                <span class="hide-menu">GEOI Fair</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="/main/blog-detail" class="sidebar-link {{ request()->is('main/blog-detail') ? 'active' : '' }}">
                <div class="round-16 d-flex align-items-center justify-content-center">
                  <i class="ti ti-circle"></i>
                </div>
                <span class="hide-menu">HUT HMTG "GEOI"</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ request()->is('main/index6') ? 'active' : '' }}" href="/main/index6" aria-expanded="false">
            <span>
              <i class="fa-solid fa-graduation-cap"></i>
            </span>
            <span class="hide-menu">Alumni</span>
          </a>
        </li>
      </ul>
    </nav>

    <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3">
      <div class="hstack gap-3">
        <div class="john-img">
          <img src="{{ URL::asset('build/images/profile/user-1.jpg') }}" class="rounded-circle" width="40" height="40" alt="modernize-img" />
        </div>
        <div class="john-title">
          <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
          <span class="fs-2">Designer</span>
        </div>
        <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
          <i class="ti ti-power fs-6"></i>
        </button>
      </div>
    </div>

    <!-- ---------------------------------- -->
    <!-- Start Vertical Layout Sidebar -->
    <!-- ---------------------------------- -->
