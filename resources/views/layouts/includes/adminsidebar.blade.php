<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="" target="_blank">
        <i class="material-icons " style="color: white"> person</i>
        <span class="ms-1 font-weight-bold text-white">Admin pannel</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link text-white {{ Request::is('dashboard') ? 'active':''}} " href="{{ url('dashboard') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('users') ? 'active':''}} text-white " href="{{ url('users') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('roles') ? 'active':''}} text-white " href="{{ url('roles') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Roles and Permissions</span>
          </a>
        </li>

        <li class="nav-item ">
          <a class="nav-link {{ Request::is('category') ? 'active':''}} text-white " href="{{ url('category') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">category</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link {{ Request::is('add-category') ? 'active':''}} text-white " href="{{ url('add-category') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">add category</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link {{ Request::is('product') ? 'active':''}} text-white " href="{{ url('product') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">product</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link {{ Request::is('add-product') ? 'active':''}} text-white " href="{{ url('add-product') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">add product</span>
          </a>
        </li>

      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">

      </div>
    </div>
  </aside>
