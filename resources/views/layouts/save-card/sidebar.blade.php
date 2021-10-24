    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('public/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('edit-occasion-view')}}" class="nav-link">
              <i class="nav-icon fas fa-info"></i>
              <p>
                Occasions
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('user-occasion-event')}}" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                Occasions Event
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('card-theme-selection')}}" class="nav-link">
              <i class="nav-icon fa fa-paint-brush"></i>
              <p>
                Theme Selection
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
