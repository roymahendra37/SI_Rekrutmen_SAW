<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Rekrutmen Karyawan</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="/sesi/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="{{ request()->is('/', 'dashboard') ? 'active' : '' }}">
                <a href="/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li class="{{ request()->is('pelamar','pelamar/create') ? 'active' : '' }}">
                <a href="/pelamar"><i class="fa fa-fw fa-table"></i> Data Pelamar</a>
            </li>
            <li class="{{ request()->is('kriteria') ? 'active' : '' }}">
                <a href="/kriteria"><i class="fa fa-fw fa-table"></i> Data Kriteria</a>
            </li>
            <li class="{{ request()->is('alternatif') ? 'active' : '' }}">
                <a href="/alternatif"><i class="fa fa-fw fa-bar-chart-o"></i> Data Alternatif</a>
            </li>
            <li class="{{ request()->is('normalisasi') ? 'active' : '' }}">
                <a href="/normalisasi"><i class="fa fa-bar-chart-o"></i> Data Normalisasi</a>
            </li>
            <li class="{{ request()->is('hasil') ? 'active' : '' }}">
                <a href="/hasil"><i class="fa fa-fw fa-bar-chart-o"></i> Data Hasil</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>