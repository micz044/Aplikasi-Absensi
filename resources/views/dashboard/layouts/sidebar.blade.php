<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/student*') ? 'active' : ''}}" href="/dashboard/student">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Daftar Siswa
            </a>
          </li>
        </ul>

        <ul>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-1 mt-3 mb-1 text-muted">
            <span>Administrator</span>
          </h6>

            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/absensi*') ? 'active' : ''}}" href="/dashboard/absensi">
                  <span data-feather="file-text" class="align-text-bottom"></span>
                  kategori
                </a>
              </li>
            </ul>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/absensi*') ? 'active' : ''}}" href="/dashboard/absensi">
                  <span data-feather="file-text" class="align-text-bottom"></span>
                  Absensi
                </a>
              </li>
            </ul>
          
        </ul>
      </div>
    </nav>