<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="@route('admin.dashboard')">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Division</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="@route('admin.division.index')">
              <i class="bi bi-circle"></i><span>Divisions</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav10" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Districts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav10" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="@route('admin.district.index')">
              <i class="bi bi-circle"></i><span>Districts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav11" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Post</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav11" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('admin/post/index')}}">
              <i class="bi bi-circle"></i><span>Post</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav12" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Donor Search</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav12" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('admin/donor/search')}}">
              <i class="bi bi-circle"></i><span>Donor Search</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav123" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Logout</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav123" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('admin/logout')}}">
              <i class="bi bi-circle"></i><span>Logout</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->


    </ul>

  </aside>
