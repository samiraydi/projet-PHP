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
                <a class="nav-link active" href="<?php echo URLROOT ;?>/users/admin">
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
<!--  -->

<!-- ***************** -->
<div class="main-content-container container-fluid px-4">
<script>
window.onload = function () {
  
var chart = new CanvasJS.Chart("chartContainer1", {
  animationEnabled: true,
  title: {
    text: "Most visited cities"
  },
  axisX: {
    interval: 1
  },
  axisY: {
    title: "Number Of Travel",
    scaleBreaks: {
      type: "wavy",
      customBreaks: [{
        startValue: 80,
        endValue: 210
        },
        {
          startValue: 230,
          endValue: 600
        }
    ]}
  },
  data: [{
    type: "bar",
    toolTipContent: "<b>{label}</b><br>{y}travel<br>",
    dataPoints: [
      { label: "Tunis", y: 50, gdp: 5.8 },
      { label: "Sfax", y: 45, gdp: 5.7 },
      { label: "Sousse", y: 40, gdp: 1.3 },
      { label: "Gabes", y: 30, gdp: 2.0 },
      { label: "Gafsa", y: 25, gdp: 2.7  },
      { label: "Ariana", y: 20, gdp: 1.2  },
      { label: "Mednine", y: 10, gdp: 1.0  },
      
    ]
  }]
});
var chart1 = new CanvasJS.Chart("chartContainer2",
    {
        animationEnabled: true,
        title: {
            text: "Number of rides per year"
        },
        axisX: {
            interval: 10,
        },
        data: [
        {
            type: "splineArea",
            color: "rgba(255,12,32,.3)",
            dataPoints: [
                { x: new Date(2015, 0), y: 600 },
                { x: new Date(2016, 0), y: 653 },
                { x: new Date(2017, 0), y: 714 },
                { x: new Date(2018, 0), y: 600 },
                { x: new Date(2019, 0), y: 500 },
                { x: new Date(2020, 0), y: 300 },
                { x: new Date(2021, 0), y: 150 }
            ]
        },
        ]
    });
chart.render();
chart1.render();
}
</script>

<div id="chartContainer1" style="height: 370px; max-width: 920px; margin: 0px auto;margin-bottom:20px;"></div>
<div id="chartContainer2" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
<script src="../../canvasjs.min.js"></script>
</div>
<!-- ***************** -->


<!-- ********* -->
<?php require APPROOT . '/views/inc/footerUser.php';?>
