<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Kriyakala Studio</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">ORDER</li>
        <li class="{{ Request::is('admin/bookings') ? 'active' : '' }}"><a class="nav-link" href="{{ route("admin.booking.index") }}"><i class="far fa-file-alt"></i> <span>Booking</span></a></li>
      </ul>
      <ul class="sidebar-menu">
        <li class="menu-header">MENU</li>
        <li class="{{ Request::is('admin/studios') ? 'active' : '' }}"><a class="nav-link" href="{{ route("admin.studio.index") }}"><i class="far fa-file-alt"></i> <span>Studio</span></a></li>
        <li class="{{ Request::is('admin/services') ? 'active' : '' }}"><a class="nav-link" href="{{ route("admin.service.index") }}"><i class="far fa-file-alt"></i> <span>Service</span></a></li>
        <li class="{{ Request::is('admin/packages') ? 'active' : '' }}"><a class="nav-link" href="{{ route("admin.package.index") }}"><i class="far fa-file-alt"></i> <span>Package</span></a></li>
        <li class="{{ Request::is('admin/additionals') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.additional.index') }}"><i class="far fa-file-alt"></i> <span>Additional Service</span></a></li>
        <li class="{{ Request::is('admin/backgrounds') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.background.index') }}"><i class="far fa-file-alt"></i> <span>Background</span></a></li>
    </ul>
      <ul class="sidebar-menu">
        <li class="menu-header">AUTH</li>
            <livewire:logout/>
      </ul>

       </aside>
  </div>
