<?php require APPROOT . '/views/inc/headerUser.php'; ?>



<div class="container-fluid">
  <div class="row">
    <!-- Main Sidebar -->
    <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
      <div class="main-navbar">
        <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
          <a class="navbar-brand w-100 mr-0" href="<?php echo URLROOT; ?>/Rides/index" style="line-height: 25px;">
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
          <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search">
        </div>
      </form>
      <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " href="<?php echo URLROOT ;?>/users/admin">
                  <i class="material-icons">trending_up</i>
                  <span>STATS</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo URLROOT ;?>/users/Allusers">
                  <i class="material-icons">person</i>
                  <span>USERS</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo URLROOT ;?>/rides/indexA">
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
  </div>
</div>
<!-- End Main Sidebar -->
<?php require APPROOT . '/views/inc/fazaA.php'; ?>
<!-- / .main-navbar -->
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">NEWS</span>
      <h3 class="page-title">ACTIVE RIDES</h3>
    </div>
    <div>
      <input type="button" class="mb-2 btn btn-sm btn-outline-primary mr-1" name="imp" value="AVAILALE RIDES PDF"
onClick=" window.location.href='<?php echo URLROOT ;?> /Rides/imprimer/ '" target="_blank"
     style="
    margin-top: -27px;
    margin-left: 1082px;
" >
    </div>
  </div>
  <!-- End Page Header -->
  <!-- Default Light Table -->

  <?php foreach ($data['rides'] as $ride) : ?>
    <div class="card mb-3">

      <div class="row" style="margin: 10px 0;">

        <div class="col-md4">
          <img src="../images/avatars/<?php echo $ride->Profile_Pic; ?>" class="card-img-top" alt="..." style="width: 287px;height: 289px;" />
        </div>
        <div class="col-md-6">

          <div class="card-body">
            <h5 class="card-text">
              <?php echo $ride->FirstName; ?> <?php echo $ride->LastName; ?>

            </h5>
            <div style="display: flex;">
              <div style="margin: 0 15px 0 0;">
                <p style="margin: -12px 0;"><strong>From: </strong> <?php echo $ride->cite_depart; ?></p>
                <hr>
                <p style="margin: -12px 0;"><strong>Date: </strong><?php echo $ride->date_depart; ?> at <?php echo $ride->heure_depart; ?></p>
                <hr>
              </div>
              <div style="margin: 0 15px;">
                <p style="margin: -12px 0;"><strong>To: </strong> <?php echo $ride->destination; ?></p>
                <hr>
                <p style="margin: -12px 0;"><strong>Places: </strong><?php echo $ride->nombre_place; ?></p>
                <hr>
              </div>
            </div>
            <?php $a=random_int(0,900) ?>
              
            <span id="dots<?php echo $a; ?>"></span><span style="display: none;" id="more<?php echo $a; ?>">
              <div style="display: flex;">
                <div style="margin: 0 15px 0 0;">
                  
                    <p style="margin: -12px 0;"><strong>Added at: </strong><?php echo $ride->heure_creation; ?></p>
                    <hr>
                    <p style="margin: -12px 0;"><strong>Phone: </strong> <?php echo $ride->Phone; ?></p>
                    <hr>
                    <p style="margin: -12px 0;"><strong>Meeting P: </strong> <?php echo $ride->point_rassemblement; ?></p>
                    <hr>
                   
                </div>
                <div>
                  
                    <p style="margin: -12px 0;"><strong>Animals: </strong><?php echo $ride->animaux; ?> </p>
                    <hr>
                    <p style="margin: -12px 0;"><strong>Stuff: </strong><?php echo $ride->bagage; ?></p>
                    <hr>
                      <p style="margin: -12px 0;"><strong>Price: </strong> <?php echo $ride->prix; ?>DT</p>
                  <hr>
                  
                </div>
              </div>
              <form action="<?php echo URLROOT; ?>/reservations/addReservation" method="post">
                <input type="text" hidden value="<?php echo $ride->rideid; ?>" name="RideId">
                
                <input type="button" value="CONFIRM" class="mb-2 btn btn-sm btn-outline-primary mr-1" name="book" onClick="if(confirm('Are You Sur To Confirm??')) window.location.href='<?php echo URLROOT.'/rides/confirmR/'.$a1=$ride->rideid?>'">
                <input type="button" value="DELETE" class="mb-2 btn btn-sm btn-outline-danger mr-1" name="book" onClick="if(confirm('Are You Sur To Delete??')) window.location.href='<?php echo URLROOT.'/rides/deleteR/'.$a1=$ride->rideid?>'">
              </form>
            </span>
          </div>

          <a onclick="myFunction<?php echo $a; ?>()" id="myBtn<?php echo $a; ?>" class="btn btn-primary">Read more</a>
          <!-- <?php echo $ride->id; ?> -->
        </div>
      </div>
    </div>



    <script>
      function myFunction<?php echo $a; ?>() {
        var dots = document.getElementById("dots<?php echo $a; ?>");
        var moreText = document.getElementById("more<?php echo $a; ?>");
        var btnText = document.getElementById("myBtn<?php echo $a; ?>");

        if (dots.style.display == "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Read more";
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Read less";
          moreText.style.display = "inline";
        }
      }
    </script>

  <?php endforeach; ?>



</div>

<!-- End Default Light Table -->




<?php require APPROOT . '/views/inc/footerUser.php'; ?>