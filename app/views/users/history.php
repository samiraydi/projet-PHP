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
                <a class="nav-link " href="<?php echo URLROOT ;?>/Rides/index">
                  <i class="material-icons">edit</i>
                  <span>NEWS</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo URLROOT ;?>/Rides/lookRideI">
                  <i class="material-icons">vertical_split</i>
                  <span>LOOK FOR A RIDE</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo URLROOT ;?>/Rides/addRide">
                  <i class="material-icons">note_add</i>
                  <span>PROPSE A RIDE</span>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link " href="<?php echo URLROOT ;?>/Users/edit">
                  <i class="material-icons">person</i>
                  <span>PROFILE</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo URLROOT ;?>/Rides/active">
                  <i class="material-icons active">directions_car</i>
                  <span>ACTIVE RIDES</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo URLROOT ;?>/Rides/history">
                  <i class="material-icons active">history</i>
                  <span>HISTORY</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo URLROOT ;?>/Users/feedback">
                  <i class="material-icons">feedback</i>
                  <span>FEEDBACK</span>
                </a>
              </li>
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
       <?php require APPROOT . '/views/inc/faza.php';?>
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">HISTORY</span>
                <h3 class="page-title">YOUR RIDES</h3>
              </div>
            </div>
            <!-- End Page Header -->
                       <!-- Default Light Table -->


<div class="row">
<?php foreach ($data['rides'] as $ride) :?>
<div class="card col-md-3" style="width: 18rem">
  
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>From: </strong> <?php echo $ride->cite_depart;?></li>
    <li class="list-group-item"><strong>To: </strong> <?php echo $ride->destination;?></li>
    <li class="list-group-item"><strong>Date: </strong><?php echo $ride->date_depart;?>   at <?php echo $ride->heure_depart;?></li>
    <li class="list-group-item"><strong>Places: </strong><?php echo $ride->nombre_place;?></li>
    <li class="list-group-item"><strong>Added at: </strong><?php echo $ride->heure_creation;?></li>
  </ul>
 
</div>
<div style="
    margin-left: 17px;
" >
  
</div>
<div class="row-md-3">
  
</div>
<?php endforeach;?>
</div>
            <!-- End Default Light Table -->
            </div>

          
    

  
<?php require APPROOT . '/views/inc/footerUser.php';?>
