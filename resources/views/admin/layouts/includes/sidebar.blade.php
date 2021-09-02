<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/home" class="brand-link text-center">
      {{-- <img src="" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">E-Vape</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
        <div class="image">
          <img src="{{ asset("images/user.png") }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info ml-3">
          <a href="#" class="d-block">{{ Auth::user()->first_name }}</a>
          <span>Admin</span>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

			
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt indigo"></i>
                <p>
                    Dashboard
                </p>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-file"></i>
                    <p>
                        Category
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="" class="nav-link">
                    <i class="fa fa-edit nav-icon"></i>
                    <p>Add Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link ">
                    <i class="fa fa-list nav-icon"></i>
                    <p>Category List</p>
                    </a>
                </li>
                </ul>
            </li>
            
            <li class="nav-item ">
                <a href="" class="nav-link">
                    <i class="nav-icon fa fa-user "></i>
                    <p>
                        User
                    </p>
                </a>
            </li>
  
            
            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-power-off red"></i>
                    <p>
                    {{ __('Logout') }}
                    </p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            @endauth

        </ul>
      </nav>
    </div>
  </aside>