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
            <a class="nav-link " href="<?php echo URLROOT; ?>/Rides/index">
              <i class="material-icons">edit</i>
              <span>NEWS</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo URLROOT; ?>/Rides/lookRideI">
              <i class="material-icons">vertical_split</i>
              <span>LOOK FOR A RIDE</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo URLROOT; ?>/Rides/addRide">
              <i class="material-icons">note_add</i>
              <span>PROPSE A RIDE</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="<?php echo URLROOT; ?>/Users/edit">
              <i class="material-icons">person</i>
              <span>PROFILE</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo URLROOT; ?>/Rides/active">
              <i class="material-icons active">directions_car</i>
              <span>ACTIVE RIDES</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo URLROOT; ?>/Rides/history">
              <i class="material-icons">history</i>
              <span>HISTORY</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo URLROOT; ?>/Users/feedback">
              <i class="material-icons">feedback</i>
              <span>FEEDBACK</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <!-- End Main Sidebar -->
    <?php require APPROOT . '/views/inc/faza.php'; ?>
    <!-- / .main-navbar -->
    </li>
    <div class="main-content-container container-fluid px-4">
      <li class="list-group-item p-3">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <h3 class="page-title">Look For A RIDE</h3>
            <form action="<?php echo URLROOT; ?>/rides/lookRide" method="post">


              <div class="row">




                <div class="form-group col-md-4">
                  <strong class="text-muted d-block mb-2">Date:</strong>
                  <input type="date" name="date_depart" class="form-control" id="inputPassword4"> </div>

                <div class="form-group col-md-4">
                  <strong class="text-muted d-block mb-2">From:</strong>

                  <select name="cite_depart" id="inputState" class="form-control">>
                    <option value="">Chose:</option>
                    <option>Ariana</option>
                    <option>B??ja</option>
                    <option>Ben Arous</option>
                    <option>Bizerte</option>
                    <option>Gab??s</option>
                    <option>Gafsa</option>
                    <option>Jendouba</option>
                    <option>Kairouan</option>
                    <option>Kasserine</option>
                    <option>K??bili</option>
                    <option>Kef</option>
                    <option>Mahdia</option>
                    <option>Manouba</option>
                    <option>M??denine</option>
                    <option>Monastir</option>
                    <option>Nabeul</option>
                    <option>Sfax</option>
                    <option>Sidi Bouzid</option>
                    <option>Siliana</option>
                    <option>Sousse</option>
                    <option>Tataouine</option>
                    <option>Tozeur</option>
                    <option>Tunis</option>
                    <option>Zaghouan</option>

                  </select>

                </div>
                <div class="form-group col-md-4">
                  <strong class="text-muted d-block mb-2">TO:</strong>

                  <select name="destination" id="inputState" class="form-control">>
                    <option value="">Chose:</option>
                    <option>Ariana</option>
                    <option>B??ja</option>
                    <option>Ben Arous</option>
                    <option>Bizerte</option>
                    <option>Gab??s</option>
                    <option>Gafsa</option>
                    <option>Jendouba</option>
                    <option>Kairouan</option>
                    <option>Kasserine</option>
                    <option>K??bili</option>
                    <option>Kef</option>
                    <option>Mahdia</option>
                    <option>Manouba</option>
                    <option>M??denine</option>
                    <option>Monastir</option>
                    <option>Nabeul</option>
                    <option>Sfax</option>
                    <option>Sidi Bouzid</option>
                    <option>Siliana</option>
                    <option>Sousse</option>
                    <option>Tataouine</option>
                    <option>Tozeur</option>
                    <option>Tunis</option>
                    <option>Zaghouan</option>

                  </select> </div>
              </div>


              <div style="margin-left: 380px;margin-top: 48px;">
                <input type="submit" name="search_s" value="Search" class="mb-2 btn btn-success mr-2" style="font-size: 24px;">
                <button type="button" class="mb-2 btn btn-danger mr-2" style="font-size: 23px;">CANCEL</button>
              </div>
          </div>

          </form>
        </div>
      </li>
      </ul>


      <h3>RESULTS FOUND</h3>
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

                    </div>
                  </div>
                  <form action="<?php echo URLROOT; ?>/reservations/addReservation" method="post">
                    <input type="text" hidden value="<?php echo $ride->rideid; ?>" name="RideId">
                    <input type="number" max="<?php echo $ride->nombre_place; ?>" name="nb_place" style="width: 43px;">
                    <input type="submit" value="Book" class="mb-2 btn btn-sm btn-outline-primary mr-1" name="book">
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

  </div>


