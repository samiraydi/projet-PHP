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
                <a class="nav-link active" href="<?php echo URLROOT ;?>/Rides/addRide">
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
                    <li class="list-group-item p-3">
                      
                        
                          <h3 class="page-title">PROPSE A RIDE</h3>
                          <form action="<?php echo URLROOT; ?>/rides/addRide" method="post">
                            <div class="row">
                            
                            <div class="form-group col-md-4">
                              
                                
                                  
                                <strong class="text-muted d-block mb-2">Places:</strong>

                                <input type="number" name="nombre_place" min="1" max="3" class="form-control" required placeholder="Places" aria-label="Username" aria-describedby="basic-addon1">
                                <span class="invalid-feedback"><?php echo $data['nombre_place_err']; ?></span>
                                 
                            </div>
                            <div class="form-group col-md-4">
                              <strong class="text-muted d-block mb-2">Date:</strong>
                              <input type="date" required name="date_depart" class="form-control" id="inputPassword4"  > </div>
                                  <div class="form-group col-md-4">
                              <strong class="text-muted d-block mb-2">Departure time:</strong>
                              <input type="time" required name="heure_depart" class="form-control" id="inputPassword4"  > </div>
                            </div>
                            <div class="row">
                               <div class="form-group col-md-4">
                              <strong class="text-muted d-block mb-2">Price DT:</strong>
                              <input type="number" required name="prix" class="form-control" id="inputPassword4"  > </div>
                               <div class="form-group col-md-4">
                              <strong class="text-muted d-block mb-2">From:</strong>
                              
                                <select required name="cite_depart"  id="inputState" class="form-control">>
                                  <option value="">Chose:</option>
                                  <option>Ariana</option>
                                  <option>Béja</option>
                                  <option>Ben Arous</option>
                                  <option>Bizerte</option>
                                  <option>Gabès</option>
                                  <option>Gafsa</option>
                                  <option>Jendouba</option>
                                  <option>Kairouan</option>
                                  <option>Kasserine</option>
                                  <option>Kébili</option>
                                  <option>Kef</option>
                                  <option>Mahdia</option>
                                  <option>Manouba</option>
                                  <option>Médenine</option>
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
                              <div class="form-group col-md-4 ">
                              <strong class="text-muted d-block mb-2">TO:</strong>
                              
                              <select required name="destination"  id="inputState" class="form-control">>
                                  <option value="">Chose:</option>
                                  <option>Ariana</option>
                                  <option>Béja</option>
                                  <option>Ben Arous</option>
                                  <option>Bizerte</option>
                                  <option>Gabès</option>
                                  <option>Gafsa</option>
                                  <option>Jendouba</option>
                                  <option>Kairouan</option>
                                  <option>Kasserine</option>
                                  <option>Kébili</option>
                                  <option>Kef</option>
                                  <option>Mahdia</option>
                                  <option>Manouba</option>
                                  <option>Médenine</option>
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
                                <div class="row">
                              <div class="form-group col-md-4">
                              <strong class="text-muted d-block mb-2">Meeting Point:</strong>
                              <input required type="text" name="point_rassemblement" class="form-control" id="inputPassword4"  > </div>
                              <div class="form-group col-md-4">
                              <strong class="text-muted d-block mb-2">intermediate point1:</strong>
                              <input type="text" required name="point_intermediaire1" class="form-control" id="inputPassword4"  > </div>
                              <div class="form-group col-md-4">
                              <strong class="text-muted d-block mb-2">intermediate point2:</strong>
                              <input required type="text" name="point_intermediaire2" class="form-control" id="inputPassword4"  > </div>
                              </div>
                              <div class="row">
                              <div class="form-group col-md-3">
                              <strong class="text-muted d-block mb-2">Car Model:</strong>
                              <input required type="text" name="modele_voiture" class="form-control" id="inputPassword4"  > </div>
                              <div class="form-group col-md-3">
                              <strong class="text-muted d-block mb-2">Car Color:</strong>
                              <input required type="text" name="couleur_voiture" class="form-control" id="inputPassword4"  > </div>

                              <div class="form-group col-md-3">
                              <strong class="text-muted d-block mb-2">Stuff:</strong>
                              <select name="bagage"  id="inputState" class="form-control">
                                  
                                  <option>Not allowed</option>
                                  <option selected>Allowed</option>
                                  <option>Light</option>
                                </select>
                              </div>
                              
                              <div class="form-group col-md-3">
                              <strong class="text-muted d-block mb-2">Animals:</strong>
                              <select name="animaux" id="inputState" class="form-control">
                                  
                                  <option>Not allowed</option>
                                  <option selected>Allowed</option>
                                  
                                </select>
                              </div> </div>
                            
                            
                               <div style="margin-left: 435px;margin-top: 48px;">
                              <input  type="submit" value="POST" class="mb-2 btn btn-success mr-2" style="width: 117px;font-size: 24px;">
                              <button type="button" class="mb-2 btn btn-danger mr-2" style="font-size: 23px;">CANCEL</button>
                            </div>
                            </div>
                           
                          </form>
                        </div>
                        </li>
                  </ul>
                </div>
              </div>














<?php require APPROOT . '/views/inc/footerUser.php';?>