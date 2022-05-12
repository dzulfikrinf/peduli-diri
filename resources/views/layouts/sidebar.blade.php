<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-theater-masks"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Peduli Diri</div>
    </a>

    <li class="menu-header ml-3" style="color: white">Menu</li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }}" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ (request()->is('input')) ? 'active' : '' }}" href="/input">
            <i class="fa-solid fa-keyboard"></i>
            <span>Input Data Perjalanan</span></a>
    </li>

    <!-- Nav Item - Data -->
    <li class="nav-item">
        <a class="nav-link {{ (request()->is('data')) ? 'active' : '' }}" href="/data">
            <i class="fas fa-fw fa-table"></i>
            <span>Catatan Perjalanan</span></a>
    </li>

</ul>

