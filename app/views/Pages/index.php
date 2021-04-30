<?php require APPROOT . '/views/inc/header.php'; ?>

<!-- <div class="jumbotron jumbotron-flud text-center">
    <div class="container">
    <h1><?php echo $data['title']; ?></h1>
    <p class="lead"><?php echo $data['description']; ?></p>

    </div>

</div> -->

<div id="slide" class="carousel slide  " data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active" style="height: 500px;">
            <img src="img/background.png" style="width: 100%;" alt="">
            <div class="carousel-caption">
                <h1 class="display-2">Carpool-TN</h1>
                <h3>Your Are Safer With Us
                </h3>
                <button type="button" class="btn btn-outline-light btn-lg" onclick="window.location.href='<?php echo URLROOT.'/Users/register'?>'">Propose Ride</button>
                <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='<?php echo URLROOT.'/Users/register'?>'">Look For Ride</button>
            </div>
        </div>
        <div class="carousel-item" style="height: 500px;">
            <img src="img/background2.jpg" style="width: 100%;" alt="">
            <div class="carousel-caption">
                <h1 class="display-2">Carpool-TN</h1>
                <h3>Your Best Choice...
                </h3>
                <button type="button" class="btn btn-outline-light btn-lg" onclick="window.location.href='<?php echo URLROOT.'/Users/register'?>'">Propose Ride</button>
                <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='<?php echo URLROOT.'/Users/register'?>'">Look For Ride</button>
            </div>
        </div>
        <div class="carousel-item" style="height: 500px;">
            <img src="img/background3.jpg" style="width: 100%;" alt="">
            <div class="carousel-caption">
                <h1 class="display-2">Carpool-TN</h1>
                <h3>Your Best Choice...
                </h3>
                <button type="button" class="btn btn-outline-light btn-lg" onclick="window.location.href='<?php echo URLROOT.'/Users/register'?>'">Propose Ride</button>
                <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='<?php echo URLROOT.'/Users/register'?>'">Look For Ride</button>
            </div>
        </div>
    </div>
</div>

<!--- Jumbotron -->


<!--- Welcome Section -->

<br>
<br>
<!--- Three Column Section -->

<!--- Two Column Section -->
<div class="container-fluid padding">
    <div class="row padding">

        <div class="col-lg-6 card relatif">
            <img src="img/passenger.jpg" alt="" class="img-fluid card-img-top">
            <div class="card-body centered">
                <h4 class="passager-title">You are a  <span class="des-title">Passenger </span></h4>
                <ul class="hw-it-wks">
                    <li>
                        <div class="marginbot20">
                            <span id="div1"class="description-icon"><i class="fa fa-search"></i></span>
                            <span id="div1"class="description">Find your trip</span>
                        </div>
                    </li>
                    <li>
                        <div class="marginbot20">
                            <span id="div2"class="description-icon"><i class="fa fa-credit-card"></i></span>
                            <span id="div2"class="description"> Confirm your reservation </h4></span>
                        </div>
                    </li>
                    <li>
                        <div class="marginbot20">
                            <span id="div3" class="description-icon"><i class="fa fa-money"></i></span>
                            <span id="div3"class="description"> Pay online or directly </h4></span>
                        </div>
                    </li>
                    <li>
                        <div class="marginbot20">
                            <span id="div4"class="description-icon"><i class="fa fa-car"></i></span>
                            <span id="div4"class="description"> Travel </span>
                        </div>
                    </li>

                </ul>
                <a href="#" class="btn btn-primary ">Start now..</a>
            </div>
        </div>
        <div class="col-lg-6 card relatif">
            <img src="img/driver.jpg" alt="" class="img-fluid card-img-top">
            <div class="card-body centered">
                <h4 class="conducteur-title">You are a <span class="des-title"> Driver</span> </h4>
                <ul class="hw-it-wks">
                    <li>
                        <div class="marginbot20">
                            <span id="div1"class="description-icon"><i class="fa fa-road"></i></span>
                            <span id="div1"class="description">Publish your trip</span>
                        </div>
                    </li>
                    <li>
                        <div class="marginbot20">
                            <span  id="div2" class="description-icon"><i class="fa fa-male"></i></span>
                            <span id="div2"class="description">Your passengers book online</span>
                        </div>
                    </li>
                    <li>
                        <div class="marginbot20">
                            <span id="div3"class="description-icon"><i class="fa fa-car"></i></span>
                            <span id="div3"class="description">Travel</span>
                        </div>
                    </li>
                    <li>
                        <div class="marginbot20">
                            <span id="div4"class="description-icon"><i class="fa fa-money"></i></span>
                            <span id="div4"class="description">Receive your money</span>
                        </div>
                    </li>
                </ul>
                <a href="#" class="btn btn-primary ">Start now..</a>
            </div>
        </div>
    </div>
    <!-- </div> -->
</div>
<hr class="my-4">
<!--- Fixed background -->


<!--section-3-->
<div class="row" style="
    width: 100%;
">
	<div class="col-md-4">
		
	</div>
	<div class="embed-responsive embed-responsive-16by9 col-md-4">
	<video  controls autoplay>
    <source src="img/video.mp4" type="video/mp4">
</video>
</div>
	
</div>

<br>
<!-- Section a starts -->


<div>
    <div style="text-align: center;">
        <h4>CARPOOLING BENIFITS</h4>
        <h3>Why <span>Carpool?</span></h3>
        <hr />
    </div>

    <div style="display: flex;">

        <div style="text-align: center;">
            <div>
                <img src="img/congestion.png" alt="Reduce Congestion" style="width: 70%;">
            </div>
            <div>
                <h3> Reduce Congestion
                </h3>
                <p> Help reduce the number of cars on the roads. Transform the cities we live in.
                </p>
            </div>
        </div>


        <div style="text-align: center;">
            <div>
                <img src="img/friends.png" alt="Make friends" style="width: 70%;">
            </div>
            <div>
                <h3>
                    Make Friends
                </h3>
                <p>
                    Meet new people in the community. Living in the city can be a social experience.
                </p>
            </div>
        </div>


        <div style="text-align: center;">
            <div>
                <img src="img/wallet.png" alt="Split Costs" style="width: 70%;">
            </div>
            <div>
                <h3>
                    Split Costs
                </h3>
                <p>
                    Defray the cost of each trip. Riders contribute an amount based on distance travelled.
                </p>
            </div>
        </div>


        <div style="text-align: center;">
            <div>
                <img src="img/network.png" alt="Expand Network" style="width: 70%;">
            </div>
            <div>
                <h3>
                    Expand Network
                </h3>
                <p>
                    Get to know more professionals to expand your business network.
                </p>
            </div>
        </div>

    </div>
</div>

<!-- Section a ends -->

<?php require APPROOT . '/views/inc/footer.php'; ?>


<style>
ul {
        list-style-type: none;
    }
h4 span{
    color: lightseagreen;
}
.container-fluid{
    width:840px;
}

</style>