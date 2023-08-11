<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Absensi Kita {{ "(".(Carbon\Carbon::now('Asia/Jakarta')->format('d F Y')).")" }}</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <h2>{{ "(".(Carbon\Carbon::now('Asia/Jakarta')->format('d F Y')).")"}}</h2>
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <form action="/logout" method="post">
                @csrf
                <button type="submit" class="nav-link px-3 bg-dark border-no">Logout <span data-feather="log-out" class="align-text-bottom "></span></button>
              </form>
        </div>
      </div>
    </header>