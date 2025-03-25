<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="#" class="app-brand-link">
        <span class="app-brand-logo demo">
          <span class="text-primary">
            <img src="{{ asset('image/Alternativve.png') }}" alt="Logo" class="img-fluid" style="max-width: 150px; height: auto;">
          </span>
        </span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="bx bx-chevron-left d-block d-xl-none align-middle"></i>
      </a>
    </div>

    <div class="menu-divider mt-0"></div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboards -->
      <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">  <!-- Navlink -->
        <a href="{{ route('dashboard') }}" class="menu-link ">
          <i class="menu-icon tf-icons bx bx-home-smile"></i>
          <div class="text-truncate" data-i18n="Basic">Dashboard</div>
        </a>
      </li>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Data Master</span>
      </li>

      <!-- Data Master -->
      <li class="menu-item {{ request()->routeIs('register') ? 'active' : '' }}">
        <a href="{{ route('register') }}" class="menu-link ">
          <i class="menu-icon tf-icons bx bx-user"></i>
          <div class="text-truncate" data-i18n="Basic">Master User</div>
        </a>
      </li>
    </ul>
  </aside>