<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <li class="treeview active menu-open">
        <a href="#">
            <i class="fa fa-th-list"></i> <span>Izin Trayek</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ request()->is('v_lintrayek/lintrayek') ? 'active' : '' }}"><a href="/v_lintrayek/lintrayek"><i class="fa fa-road"></i> Data Lintasan Trayek</a></li>
            <li class="{{ request()->is('v_trayek/trayek') ? 'active' : '' }}"><a href="/v_trayek/trayek"><i class="fa fa-map"></i> Data Izin Trayek</a></li>
        </ul>
    </li>
    <li class="treeview active menu-open">
        <a href="#">
            <i class="fa fa-check-square-o"></i> <span>Realisasi Izin Trayek</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ request()->is('v_trayek/formlintertentu') ? 'active' : '' }}"><a href="/v_trayek/formlintertentu"><i class="fa fa-circle-o"></i> Realisasi Lintasan Tertentu</a></li>
            <li class="{{ request()->is('v_lintrayek/printseluruhlintasan') ? 'active' : '' }}"><a href="/v_lintrayek/printseluruhlintasan" target="_blank"><i class="fa fa-circle-o"></i> Realisasi Seluruh Lintasan</a></li>
            <li class="{{ request()->is('v_trayek/formpemilik') ? 'active' : '' }}"><a href="/v_trayek/formpemilik"><i class="fa fa-circle-o"></i> Realisasi Pemilik Tertentu</a></li>
            <li class="{{ request()->is('v_trayek/formperusahaan') ? 'active' : '' }}"><a href="/v_trayek/formperusahaan"><i class="fa fa-circle-o"></i> Realisasi Perusahaan Tertentu</a></li>
            <li class="{{ request()->is('v_lintrayek/formangkutan') ? 'active' : '' }}"><a href="/v_lintrayek/formangkutan"><i class="fa fa-circle-o"></i> Realisasi Angkutan</a></li>
        </ul>
    </li>
    <li class="{{ request()->is('v_usaha/usaha') ? 'active' : '' }}"><a href="/v_usaha/usaha"><i class="fa fa-money"></i> <span>Izin Usaha</span></a></li>
    <li class="{{ request()->is('v_insidentil/insidentil') ? 'active' : '' }}"><a href="/v_insidentil/insidentil"><i class="fa fa-mail-forward"></i> <span>Izin Insidentil</span></a></li>
    <li class="{{ request()->is('v_prinsip/prinsip') ? 'active' : '' }}"><a href="/v_prinsip/prinsip"><i class="fa fa-comments-o"></i> <span>Izin Prinsip</span></a></li>
    <li class="{{ request()->is('v_khusus/khusus') ? 'active' : '' }}"><a href="/v_khusus/khusus"><i class="fa fa-bus"></i> <span>Izin Khusus</span></a></li>
    <li class="{{ request()->is('v_taksi/taksi') ? 'active' : '' }}"><a href="/v_taksi/taksi"><i class="fa fa-car"></i> <span>Izin Operasi Taksi</span></a></li>
    <li class="{{ request()->is('v_rekomendasi/rekomendasi') ? 'active' : '' }}"><a href="/v_rekomendasi/rekomendasi"><i class="fa fa-lightbulb-o"></i> <span>Rekomendasi</span></a></li>
    <li class="treeview active menu-open">
        <a href="#">
            <i class="fa fa-sticky-note-o"></i> <span>Laporan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ request()->is('v_target/target') ? 'active' : '' }}"><a href="/v_target/target"><i class="fa fa-area-chart"></i> Target Retribusi</a></li>
            <li class="{{ request()->is('v_pad/pad') ? 'active' : '' }}"><a href="/v_pad/pad"><i class="fa fa-line-chart"></i>PAD Trayek</a></li>
            <li class="{{ request()->is('v_bukubesar/bukubesar') ? 'active' : '' }}"><a href="/v_bukubesar/bukubesar"><i class="fa f fa-book"></i>Buku Penerimaan</a></li>
        </ul>
    </li>
    <li class="{{ request()->is('v_profile/profile') ? 'active' : '' }}"><a href="/v_profile/profile"><i class="fa fa-user"></i> <span>Profile</span></a></li>
    @if (auth()->user()->level_id==1)
    <li class="{{ request()->is('v_user/user') ? 'active' : '' }}"><a href="/v_user/user"><i class="fa fa-users"></i> <span>User</span></a></li>
    @endif
</ul>