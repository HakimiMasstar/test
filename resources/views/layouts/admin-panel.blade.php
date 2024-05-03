<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alphv - Assignment</title>

<!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

<!-- JavaScript (order matters, jQuery first then Bootstrap JS) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


  <style>
    .bi {
      display: inline-block;
      width: 1rem;
      height: 1rem;
    }

    /*
     * Sidebar
     */

    @media (min-width: 768px) {
      .sidebar .offcanvas-lg {
        position: -webkit-sticky;
        position: sticky;
        top: 48px;
      }
      .navbar-search {
        display: block;
      }
    }

    .sidebar .nav-link {
      font-size: .875rem;
      font-weight: 500;
    }

    .sidebar .nav-link.active {
      color: #2470dc;
    }

    .sidebar-heading {
      font-size: .75rem;
    }

    /*
     * Navbar
     */

    .navbar-brand {
      padding-top: .75rem;
      padding-bottom: .75rem;
      background-color: rgba(0, 0, 0, .25);
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
    }

    .navbar .form-control {
      padding: .75rem 1rem;
    }
    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }
    
    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>
</head>
<body>
  <header class="navbar sticky-top bg-primary flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="{{route('/')}}">Alphv - Assignment</a>

    <ul class="navbar-nav flex-row d-md-none">
      </li>
      <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list"></i>
        </button>
      </li>
    </ul>
  </header>

  <div class="container-fluid">
    <div class="row">
      <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
        <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Alphv - Assignment</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="{{route('dashboard')}}">
                  <i class="bi bi-people-fill"></i>
                  Users
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
              <span>System</span>
            </h6>
            <ul class="nav flex-column mb-auto">
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="{{route('datas.index')}}">
                  <i class="bi bi-newspaper"></i>
                  Data
                </a>
              </li>
            </ul>

            <hr class="my-3">

            <ul class="nav flex-column mb-auto">
              <li class="nav-item">
              	<form method="post" action="{{route('logout')}}">
              	@csrf
	                <button type="submit" class="nav-link d-flex align-items-center gap-2" onclick="return confirm('Are you sure?')">
	                  <i class="bi bi-house"></i>
	                  Log Out
	                </button>
            	</form>
              </li>
            </ul>
          </div>
        </div>
      </div>

      @yield('content')

    </div>
  </div>
</body>
</html>