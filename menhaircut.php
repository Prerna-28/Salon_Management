<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Styles&Smiles Services</title>
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="salonathome.css">
  </head>
  <body>
    <!--<?php include_once('includes/header.php');?>-->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('mhaircut1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5">
            <h2 class="mb-0 bread">MEN HAIRCUT AT HOME SERVICES</h2>
            <!--<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>-->
          </div>
        </div>
      </div>
    </section>
    
       
<div style="background-color:#bdc9ea;">    
    <section class="ftco-section ftco-pricing">
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <h1 class="big">Pricing</h1>
                                                                  

            <!--<span class="subheading">Pricing</span>-->
            <h2 class="mb-4">Service Prices And Details</h2>
            <h1 style="font-family:tahoma; color:#0b7a6a">LOOK SHARP FEEL SHARP BE SHARP</h1>

         
        
       <br>
<br>
<br>


        
        <h1 style="text-align: center;font-family: Century Gothic, sans-serif;"><b>View All Beauty Services</b></h1>
            
              <div style="border-left: solid #0b054b;border-width: 30px;">
              <button class="accordion"><h1 style="font-family: Century Gothic, sans-serif;">Waxing + Threading</h1></button> 
                <div class="panel">
  <p>
      <h5></h5><br>
    <div>    
      <li>Type : Regular</li>
      <li>Cost : Rs.250/-</li>
      <li>Time Required :30 to 35 minutes</li>
      <li>Includes : Scrubbing and Clean-up.</li>
      <button class="tablink" onclick="openPage('Add', this, 'red')">Add</button>
    </div>
    <hr>
    <div>
      <li>Type : Char Coal</li>
      <li>Cost : Rs.650/-</li>
      <li>Time Required : 45 minutes</li>
      <li>Includes : Scrubbing, Black heads, Clean-up.</li>
      <button class="tablink" onclick="openPage('Add', this, 'red')">Add</button>
  </div>
  <hr>
  <div>
      <li>Type : Gold (Shine)</li>
      <li>Cost : Rs.1200/-</li>
      <li>Time Required : 80 minutes</li>
      <li>Includes : Scrubbing, Black-Heads, Steaming and Clean-up.</li>
      <button class="tablink" onclick="openPage('Add', this, 'red')">Add</button>
  </div>
  </p>
  <hr>
  <p><h5>Hair Wash :</h5><br>
    <li>Type : Normal</li>
    <li>Cost : Rs.500/-</li>
    <li>Time Required : 30 minutes</li>
    <li>Includes : Hair wash with repair</li>
    <button class="tablink" onclick="openPage('Add', this, 'red')">Add</button>
    </p>
    <hr>
</div>

<button class="accordion"><h1>Head + Shoulder Massage</h1></button>
<div class="panel">
  <p>
    <hr>
      <h5>Head Massage Details:</h5><br>
    <hr>
    <li>Type : Relax U Massage</li>
    <li>Cost : Rs.1999/-</li>
    <li>Time Required : 50 minutes</li>
    <li>Includes : Full head Massage, Wash, Steam, Set</li>
    <button class="tablink" onclick="openPage('Add', this, 'red')">Add</button>
  </p>
  <hr>
  <p><h5>Shoulder Massage Details:</h5><br>
    <li>Type : Deep tissue massage</li>
    <li>Cost : Rs.3000/-</li>
    <li>Time Required : 60 minutes</li>
    <li>Includes : With Nail polish</li>
    <button class="tablink" onclick="openPage('Add', this, 'red')">Add</button>
  </p>
  <hr>
</div>
</div>





<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
  <br><br><br><br><br><br><br><br><br><br>
  <script>
  function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("accordion");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
  </script>

  <footer>
  <p>Copyright &copy; 2020, Styles&Smiles</p>
</footer>
</div>
<?php
$ret=mysqli_query($con,"select *from  tblservices");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<tr> <th scope="row"><?php echo $cnt;?></th> <td><?php  echo $row['ServiceName'];?></td> <td><?php  echo $row['Cost'];?></td> </tr>   <?php 
$cnt=$cnt+1;
}?></tbody> </table> 
      </div>
    </section>

    <?php include_once('includes/footer.php');?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>


