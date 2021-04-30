<?php require APPROOT . '/views/inc/headerUser.php';?>



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
          <form  class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
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
                <a class="nav-link active" href="<?php echo URLROOT ;?>/Users/edit">
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
                <a class="nav-link " href="<?php echo URLROOT ;?>/Rides/history">
                  <i class="material-icons">history</i>
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
             <!-- / Normal Outline Buttons -->
                    </li>
<div class="main-content-container container-fluid px-4">
                    <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">User Profile</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <form action="<?php echo URLROOT; ?>/users/update" method="post" enctype="multipart/form-data" >
                      <img class="rounded-circle" src="../images/avatars/<?php echo $_SESSION['Profile_Pic'] ?>" alt="User Avatar" width="110"> </div>
                    <h4 class="mb-0"><?php echo $_SESSION['FirstName']; echo " ";echo $_SESSION['LastName']; ?></h4>
                    <span class="text-muted d-block mb-2">
                      <?php echo $_SESSION['status']; ?>

                    </span>
                    
                      
                  </div>

                  <input type="button" class="mb-2 btn btn-sm btn-outline-danger mr-1" value="DELETE PROFILE" onClick="if(confirm('Are You Sur To Delete??')) window.location.href='<?php echo URLROOT.'/Users/deleteUser/'.$_SESSION['user_id']?>'">
                </div>
              </div>
            </form>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Account Details</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form action="<?php echo URLROOT; ?>/users/update" method="post" enctype="multipart/form-data">
                            
                              
                              

                                  <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feFirstName">First Name</label>
                                <input type="text" required name="FirstName" value="<?php echo $_SESSION['FirstName'] ?>" class="form-control" id="feFirstName" placeholder="<?php echo $_SESSION['FirstName'] ?>" > </div>
                              <div class="form-group col-md-6">
                                <label for="feLastName">Last Name</label>
                                <input type="text" required name="LastName" value="<?php echo $_SESSION['LastName'] ?>" class="form-control" id="feLastName" placeholder="<?php echo $_SESSION['LastName'] ?>" > </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Email</label>
                                <input type="email" required class="form-control" id="feEmailAddress"
                                name="Email" value="<?php echo $_SESSION['user_email'] ?>" placeholder="<?php echo $_SESSION['user_email'] ?>" > </div>
                              <div class="form-group col-md-6">
                                <label for="inputZip">Phone</label>
                                <input type="text" required name="Phone" value="<?php echo $_SESSION['Phone'] ?>" class="form-control" placeholder="<?php echo $_SESSION['Phone'] ?>" id="inputZip"> </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feFirstName">Date of birth</label>
                                <input type="date" required name="DNS" value="<?php echo $_SESSION['DNS'] ?>" class="form-control" id="feFirstName" placeholder="<?php echo $_SESSION['DNS'] ?>" > </div>
                              <div class="form-group col-md-6">
                                <label for="feLastName">Address</label>
                                <input type="text" required name="Adress" value="<?php echo $_SESSION['Adress'] ?>" class="form-control" id="feLastName" placeholder="<?php echo $_SESSION['Adress'] ?>" > </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feInputCity">Driving licence</label>
                                <input type="text" required name="DrivingLic" value="<?php echo $_SESSION['DrivingLic'] ?>" class="form-control" placeholder="<?php echo $_SESSION['DrivingLic'] ?>" id="feInputCity"> </div>
                              <div class="form-group col-md-6">
                                <label for="feInputState">Sex</label>
                                <select id="feInputState" name="Sex"  class="form-control">
                                  <option selected><?php echo $_SESSION['Sex'] ?></option>
                                  <option>Male</option>
                                  <option>Female</option>
                                </select>
                              </div>
                              
                            </div>
                            <div class="row">
                            <div class="form-group col-md-6">
                                <label for="fePassword">Password</label>
                                <input type="password" required name="Password"  class="form-control" id="fePassword" placeholder="Password"> </div>
                                <div class="form-group col-md-6">
                                <label for="fePassword">Confirm Password</label>
                                <input id="fePassword" required placeholder="Password" type="password" name="confirm_password" class="form-control">
                    <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span> </div>
                            
                            </div>

                              <div class="custom-file">
 <label class="custom-file-label" for="inputGroupFile01">Profile Picture</label>
    <input type="file" name="Profile_Pic[]" class="custom-file-input" id="inputGroupFile01" value="<?php echo $_SESSION['Profile_Pic']; ?>">
   
                              </div>

                            <input style="
    margin-top: 12px;
" type="submit" name="btn" class="btn btn-accent" value="Update Account"> 
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
  <!-- End Default Light Table -->
          </div>





            <?php require APPROOT . '/views/inc/footerUser.php';?>