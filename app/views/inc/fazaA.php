<main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
  <div class="main-navbar sticky-top bg-white">
    <!-- Main Navbar -->
    <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
      <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
        <div class="input-group input-group-seamless ml-3">
          <div class="input-group-prepend">

          </div>
        </div>
      </form>
      <ul class="navbar-nav border-left flex-row ">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">

            <span class="d-none d-md-inline-block"><?php echo 'ADMIN';
                                                    echo " ";
                                                    ?></span>
          </a>
          <div class="dropdown-menu dropdown-menu-small">

            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" href="<?php echo URLROOT; ?>/users/logout">
              <i class="material-icons text-danger">&#xE879;</i> Logout </a>
          </div>
        </li>
      </ul>
      <nav class="nav">
        <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
          <i class="material-icons">&#xE5D2;</i>
        </a>
      </nav>
    </nav>
  </div>