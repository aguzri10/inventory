<!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('images/petugas.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="{{ route('home') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        @if(Auth::user()->id == 1)

        <li class="treeview">
          <a href="{{ route('product') }}">
            <i class="fa fa-opencart"></i> <span>Barang</span>
          </a>
        </li>

        <li class="treeview">
          <a href="{{ route('supplier') }}">
            <i class="fa fa-truck"></i> <span>Supplier</span>
          </a>
        </li>

        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-file-o"></i> <span>Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-sign-in"></i> Report Check In</a></li>
            <li><a href="#"><i class="fa fa-sign-out"></i> Report Check Out</a></li>
          </ul>
        </li> -->

        <li class="treeview">
          <a href="{{ route('setting') }}">
            <i class="fa fa-gear"></i> <span>Pengaturan</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-building"></i> <span> Profile Perusahaan</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-info"></i> <span> Info Aplikasi</span>
          </a>
        </li>

        @else
        <li class="treeview">
          <a href="{{ route('product') }}">
            <i class="fa fa-opencart"></i> <span>Barang</span>
          </a>
        </li>

        <li class="treeview">
          <a href="{{ route('supplier') }}">
            <i class="fa fa-truck"></i> <span>Supplier</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-building"></i> <span> Profile Perusahaan</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-info"></i> <span> Info Aplikasi</span>
          </a>
        </li>

      @endif
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->