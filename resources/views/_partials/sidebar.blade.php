<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
        <div class="sidebar-brand-icon d-block d-md-none">
            {{ substr('SMK WIKRMA BOGOR', 0, 3) }}
        </div>
        <div class="sidebar-brand-text mx-3">SMK WIKRMA BOGOR</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ active('/') }}">

        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ active('siswa', 'active', 'group') }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#siswa" aria-expanded="true"
            aria-controls="siswa">
            <i class="fas fa-fw fa-user"></i>
            <span>Peserta Didik Baru</span>
        </a>
        <div id="siswa" class="collapse {{ active('siswa', 'show', 'group') }}" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Master Peserta Didik:</h6>
                <a class="collapse-item {{ active('siswa') }}" href="{{ route('siswa.index') }}">Data Peserta didik</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
