<?php
include_once 'class/config.php';
include_once 'class/db.php';

//include_once 'common/security.php';

$headers = apache_request_headers();
$mobile="";

$db = new db();

//if($db->exist("SELECT * FROM `subscribers_joke` WHERE `id` = '0122072000006508".$mobile."';") && ($mobile!= ""))
//header("Location: ".JOKES);
//echo "SELECT * FROM `subscribers_joke` WHERE `id` LIKE '0122072000006508".$mobile."';";


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Arif.et</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage - v3.2.1
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

  <!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <!-- <ol class="carousel-indicators"></ol> -->
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url(assets/img/intro-carousel/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Improve Your English Today</h2>
                <h3 class="animate__animated animate__fadeInDown"><p> የእንግሊዝኛ ክህሎቶን ያሻሽሉ!</p> </h3>
                	<p>Advance your<br>Writing | Grammar | Vocabulary | Speaking </p>
                   <?php
        if(true)
        {
          echo '<form action="confirm.php" id="subform" method="post" >
        <p>Insert Your Phone Number</p> 
      <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Username</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">251</div>
        </div>
        <input id="phone" name="phone" type="number" class="form-control"  placeholder="Phone Number" onKeyDown="limitText(this,9);" 
onKeyUp="limitText(this,9);">
      </div>
    </div>
         <input name="zsubmit" id="zsubmit" href="'.CONFIRM.'" class="btn-get-started" value="Enter"  type="SUBMIT" />
      </form>';
			//echo $mobile;
      //  <input name="zsubmit" id="zsubmit" href="'.CONFIRM.'" class="btn-get-started" value="SUBSCRIBE"  type="SUBMIT" />
      //<input id="phone" name="phone" class="form-control" type="number" placeholder="Phone Number" aria-label="Phone Number" onKeyDown="limitText(this,9);" 
//onKeyUp="limitText(this,9);">
        }
          else if($turnwifioff)
          {
            echo "<p style='text-decoration-color: red; font-size: 30px;'>Turn Data on please</p>";
			// echo $mobile;
          }
            else{
              //echo '<a href="'.CONFIRM.'" class="myButton">SUBSCRIBE</a>';
              //  echo $mobile;
              echo '<a href="sms:6414?&body=OK" class="btn-get-started">SUBSCRIBE</a>';
              //'.MAINURL.'reg_by_msid.php?phone='.$mobile.'
            }
 
      ?>
      
      <p >First 3 Days Free, Then 2 Birrs Per day</p>
      <p >የመጀመሪያ 3 ቀን በነፃ፤ ቀጥሎ በቀን 2 ብር</p>
      <a href="sms:6414?&body=OK" class="btn-get-started">SUBSCRIBE</a>

      <h6 style="color:#ffffff">To Unsubscribe, Send 'STOP' to 6414</h6>
      <!-- <h6 style="color:#ffffff">--</h6> -->
      <p style="font-weight: 100; color: darkred;"><?php if(isset($_GET['err'])) echo "Please turn your Data connection on"?></p>

                  
                <!-- <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                <!-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> -->
              </div>
            </div>
          </div>

          <!-- <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">At vero eos et accusamus</h2>
                <p class="animate__animated animate__fadeInUp">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Temporibus autem quibusdam</h2>
                <p class="animate__animated animate__fadeInUp">Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/4.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Nam libero tempore</h2>
                <p class="animate__animated animate__fadeInUp">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/5.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Magnam aliquam quaerat</h2>
                <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div> -->

        </div>

        <!-- <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a> -->

      </div>
    </div>
  </section><!-- End Intro Section -->

  <!-- ======= Footer ======= -->
   <?php include_once "common/footer.php"?>

</body>

</html>