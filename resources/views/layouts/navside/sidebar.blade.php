<div class="main-sidebar position-fixed">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard.index') }}">ADU</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard.index') }}"><i class="fas fa-1x fa-bullhorn"></i></a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dahsboard</li>
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><a class="nav-link" href="{{ route('dashboard.index') }}"><i class="fas fa-fire"></i>
                    <span>Dahsboard</span></a>
                </li>
            </li>

            <li class="menu-header">Pengaduan</li>
                <li class="{{ Request::is('admin/pengaduan') ? 'active' : '' }}"><a class="nav-link" href="{{ route('pengaduan.index') }}"><i class="fas fa-bullhorn"></i>
                    <span>Pengaduan</span></a>
                </li>
            </li>

            <li class="menu-header">People</li>
                <li class="{{ Request::is('admin/petugas') ? 'active' : '' }}"><a class="nav-link" href="{{ route('petugas.index') }}"><i class="far fa-user"></i>
                    <span>Petugas</span></a>
                </li>

                <li class="{{ Request::is('admin/masyarakat') ? 'active' : '' }}"><a class="nav-link" href="{{ route('masyarakat.index') }}"><i class="fas fa-users"></i>
                    <span>Masyarakat</span></a>
                </li>
            </li>

            <li class="menu-header">Laporan</li>
            <li class="{{ Request::is('admin/laporan') ? 'active' : '' }}"><a class="nav-link" href="{{ route('laporan.index') }}"><i class="far fa-file-alt"></i>
                <span>Laporan</span></a>
            </li>
        </li>
        </ul>

        {{-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div> --}}
    </aside>
</div>
