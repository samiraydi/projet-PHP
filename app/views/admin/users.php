<?php require APPROOT . '/views/inc/headerUser.php';?>
<div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->


  <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="<?php echo URLROOT ;?>/Rides/index" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="../images/t1.png" alt="Shards Dashboard">
                  <span class="d-none d-md-inline ml-1">CarpoolingTN</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " href="<?php echo URLROOT ;?>/users/admin">
                  <i class="material-icons">trending_up</i>
                  <span>STATS</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link " href="<?php echo URLROOT ;?>/users/Allusers">
                  <i class="material-icons">person</i>
                  <span>USERS</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo URLROOT ;?>/rides/indexA">
                  <i class="material-icons">note_add</i>
                  <span>RIDES</span>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link " href="<?php echo URLROOT ;?>/Users/feedbackA">
                  <i class="material-icons">feedback</i>
                  <span>FEEDBACK</span>
                </a>
              </li>
               
            </ul>
          </div>
        </aside>
          <!-- End Main Sidebar -->
        <?php require APPROOT . '/views/inc/fazaA.php';?>
          <!-- / .main-navbar -->
          <?php foreach ($data['users'] as $u) : ?>
    <div class="card mb-3">

      <div class="row" style="margin: 10px 0;">

        <div class="col-md4">
          <img src="../images/avatars/<?php echo $u->Profile_Pic; ?>" class="card-img-top" alt="..." style="width: 287px;height: 289px;" />
        </div>
        <div class="col-md-6">

          <div class="card-body">
            <h5 class="card-text">
              <?php echo $u->FirstName; ?> <?php echo $u->LastName; ?>

            </h5>
            <div style="display: flex;">
              <div style="margin: 0 15px 0 0;">
                <p style="margin: -12px 0;"><strong>Sex: </strong> <?php echo $u->Sex; ?></p>
                <hr>
                <p style="margin: -12px 0;"><strong>Date Of Birth: </strong><?php echo $u->DNS; ?> </p>
                <hr>
              </div>
              <div style="margin: 0 15px;">
                <p style="margin: -12px 0;"><strong>Phone: </strong> <?php echo $u->Phone; ?></p>
                <hr>
                <p style="margin: -12px 0;"><strong>Status: </strong><?php echo $u->status; ?></p>
                <hr>
              </div>
            </div>
            <?php $a=random_int(0,900) ?>
              
            <span id="dots<?php echo $a; ?>"></span><span style="display: none;" id="more<?php echo $a; ?>">
              
              
            </span>
          </div>

         <input type="button" class="mb-2 btn btn-sm btn-outline-danger mr-1" value="DELETE USER" onClick="if(confirm('Are You Sur To Delete??')) window.location.href='<?php echo URLROOT.'/Users/deleteUserA/'.$id=$u->id?>'">
          <!-- <?php echo $ride->id; ?> -->
        </div>
      </div>
    </div>



    
  <?php endforeach; ?>



</div>

<!-- End Default Light Table -->
