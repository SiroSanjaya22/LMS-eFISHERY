<aside class="sidenav  navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main" style="background-image: url(/images/bg-select.png)">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="/images/logo.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">eFishery Dashboard</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('dashboard') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link text-white ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('ManageCourses*') ? 'active' : '' }}" href="{{ route('ManageCourses') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link text-white ms-1">Manage Courses</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('ManageVideos*') ? 'active' : '' }}" href="{{ route('ManageVideos') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link text-white ms-1">Manage Videos</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('ManageQuiz*') ? 'active' : '' }}" href="{{ route('ManageQuiz') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link text-white ms-1">Manage Quiz</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('ManageEnrollment*') ? 'active' : '' }}" href="{{ route('ManageEnrollment') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link text-white ms-1">Manage Enrollment</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('DataUser*') ? 'active' : '' }}" href="{{ route('DataUser') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link text-white ms-1">Data User</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('DataUser*') ? 'active' : '' }}" href="{{ route('ManageAttendence') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link text-white ms-1">Manage Attendence</span>
          </a>
        </li>

      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-50 mx-auto" src="/images/icon_mobile.png" alt="sidebar_illustration">
        <div class="card-body text-center p-3 w-100 pt-0">

        </div>
      </div>
<br>
      <a class="btn btn-white btn-sm mb-0 w-100" href="{{ route('logout') }}" type="button"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
    </div>
  </aside>
