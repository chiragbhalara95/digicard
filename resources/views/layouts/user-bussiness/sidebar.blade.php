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
            <a href="{{route('edit-about-view')}}" class="nav-link">
              <i class="nav-icon fas fa-info"></i>
              <p>
                About Us
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('product')}}" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('profile')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>


          {{--
          <li class="nav-item">
            <a href="{{route('social-list-view')}}" class="nav-link">
              <i class="nav-icon fas fa-share-alt"></i>
              <p>
                Social Link
              </p>
            </a>
          </li>
          --}}

          @if(Auth::check())
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
          </a>
        </li>
        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
           {{ csrf_field() }}
        </form>
        @endif


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
