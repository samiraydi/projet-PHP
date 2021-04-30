<main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
  <div class="main-navbar sticky-top bg-white">
    <!-- Main Navbar -->
    <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
      <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
        <div class="input-group input-group-seamless ml-3">
          <div class="input-group-prepend">

          </div>
        </div>
      </form><?php
      $bdd = new PDO('mysql:host=localhost;dbname=ihm;charset=utf8','root','');
              $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
              $id=$_SESSION['user_id'];
              $res = $bdd->query("SELECT * FROM notification where receiver=$id")->fetchAll(PDO::FETCH_OBJ);
              $nRows = $bdd->query("SELECT count(*) from notification where receiver=$id")->fetchColumn(); 
         ?>     
      <ul class="navbar-nav border-left flex-row ">
        <li class="nav-item border-right dropdown notifications">
          <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="nav-link-icon__wrapper">
              <i class="material-icons">&#xE7F4;</i>
              <span class="badge badge-pill badge-danger"><?php echo ($nRows+1);?></span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
          <?php
              foreach($res as $r):
              ?>
            <a class="dropdown-item" href="#">
              <div class="notification__icon-wrapper">
                <div class="notification__icon">
                  <i class="material-icons">&#xe637;</i>
                </div>
              </div>
              
                <div class="notification__content">
                  <span class="notification__category">NEWS FOR YOU</span>
                  <p>
                  <?php $clientName=$bdd->query("SELECT FirstName FROM Users where id=$r->receiver")->fetch(PDO::FETCH_OBJ);
                  print($clientName->FirstName);?> joined your ride!
                  </p>
                </div>
            </a>
            <?php endforeach?>
            <a class="dropdown-item" href="#">
              <div class="notification__icon-wrapper">
                <div class="notification__icon">
                  <i class="material-icons">&#xf1e1;</i>
                </div>
              </div>
              <div class="notification__content">
                <span class="notification__category">STATUS</span>
                <p>
                  <span class="text-warning text-semibold">CONGRATS!</span>. You become <?php echo $_SESSION['status']; ?>
                </p>
              </div>
            </a>

          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="user-avatar rounded-circle mr-2" src="../images/avatars/<?php echo $_SESSION['Profile_Pic']; ?>" alt="User Avatar">
            <span class="d-none d-md-inline-block"><?php echo $_SESSION['FirstName'];
                                                    echo " ";
                                                    echo $_SESSION['LastName']; ?></span>
          </a>
          <div class="dropdown-menu dropdown-menu-small">
            <a class="dropdown-item" href="<?php echo URLROOT; ?>/Users/edit">
              <i class="material-icons">&#xE7FD;</i> Profile</a>
            <a class="dropdown-item" href="<?php echo URLROOT; ?>/Rides/lookRideI">
              <i class="material-icons">vertical_split</i> Look for a ride</a>
            <a class="dropdown-item" href="<?php echo URLROOT; ?>/Rides/addRide">
              <i class="material-icons">note_add</i> Propse a ride</a>
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