<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/assets/index3.html" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">websat</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Satria Yudhistira</a>
            </div>
        </div>
   <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                
                <li class="nav-header">MENU</li>
                <li class="nav-item">
                    <a href="{{ url('/Hobi') }}" class="nav-link {{ request()->is('Hobi') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>Data hobi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/Keluarga') }}" class="nav-link {{ request()->is('Keluarga') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>Data keluarga</p>
                    </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('/Matkul') }}" class="nav-link  {{ request()->is('Matkul') ? 'active' : '' }}">
                      <i class="nav-icon fas fa-ellipsis-h"></i>
                      <p>Data mata kuliah</p>
                  </a>
              </li>
              <li class="nav-item">
                <a href ={{url('mahasiswa')}} class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Mahasiswa 
                        </p>
                </a>
              </li>
               
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>