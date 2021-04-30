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
                <a class="nav-link " href="<?php echo URLROOT ;?>/rides/indexA">
                  <i class="material-icons">note_add</i>
                  <span>RIDES</span>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo URLROOT ;?>/Users/feedbackA">
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
                <span class="text-uppercase page-subtitle">FEEDBACK</span>
                <h3 class="page-title">FEEDBACK SENT BY USERS</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <?php foreach ($data['feedback'] as $f) : ?>
            <div class="row">
              
              <div class="col-lg-12 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                  <div class="card-body">
                   <label for="feDescription">FROM</label>
                      <input class="form-control form-control-lg mb-3" value="<?php echo $f->FirstName ;echo" "; echo $f->LastName; ?>" name="subject" type="text" placeholder="Title">
                      <label for="feDescription">SUBJECT</label>
                      <input class="form-control form-control-lg mb-3" value="<?php echo $f->subject; ?>" name="subject" type="text" placeholder="Title">

                      
                      <label for="feDescription">MESSAGE</label>
                      <input  value="<?php echo $f->message; ?>"  class="form-control" name="message" rows="5"></textarea>
                      <div  style="
    margin-left: 93%;
    margin-top: 15px;
">

                        
                      
                      </div>

                    
                  </div>
                 
                </div>
                <!-- / Add New Post Form -->
 <?php endforeach; ?>
              </div>
              
</div>



 <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="../scripts/extras.1.1.0.min.js"></script>
    <script src="../scripts/shards-dashboards.1.1.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.min.js"></script>
    <script src="../scripts/app/app-blog-overview.1.1.0.js"></script>
  </body>
</html>



