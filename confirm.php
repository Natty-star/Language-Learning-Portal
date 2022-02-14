<?php
include_once 'class/config.php';
require_once ("class/config.php");
require_once ("class/db.php");
include_once 'common/security.php';

if(isset($_SESSION['login_user'])){
header("location: index.php");
}

$mobile= $_POST['phone'];

//$sql="SELECT * FROM `subscribers` WHERE `phone_number` LIKE '251".$_POST['phone']."'";

$db = new db();

// if($mobile!="" and $db->exist($sql)){

// }else{
//    $err_msg="You are not subscribed please send ok to 6414";
//  // header("Location: ".SUBSCRIBE);
// }


//echo "my mob".$mobile;


// if($mobile !=""){
//   echo "my mob".$mobile;
// }
// else{
//   if(isset($_POST['phone']) and $_POST['phone'] != ""){
//     $db = new db();
//     $db->executeQuery("INSERT INTO `otpin_not_registered` (`id`, `phone_number`) VALUES (NULL,'" . $_POST['phone'] . "');");
    
//   }
// }

// if($mobile!=""){
//  //echo "my mob".$mobile;
// }
// else{
// if(isset($_POST['phone']) and $_POST['phone']!=""){
// $pin=generatePIN();
//   $db= new db();
//   $db = new db();
//       $db->executeQuery("INSERT INTO `confirmation` (`id`, `phone_number`, `varification`) VALUES (NULL,'" . $_POST['phone'] . "', '" . $pin . "');");
//       $db->executeQuery("INSERT INTO `varification_code_message` (`id`, `varification`) VALUES ('" . $_POST['phone'] . "', '" . $pin . "');");

// }elseif(isset($_GET['err']))
// {
//   $err_msg="You entered a wrong code please try again";
// }
// else
// {
//   header("Location: ".SUBSCRIBE);
// }

// }



// function generatePIN(){
//   $i = 0; //counter
//   $pin = ""; //our default pin is blank.
//   while($i < 4){
//     //generate a random number between 0 and 9.
//     $pin .= mt_rand(0, 9);
//     $i++;
//   }
//   return $pin;
// }
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

  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/intro-carousel/1.jpg)">
            <div class="carousel-container">
              <div class="container">
               

    <div class="intro-text">
      <p>Please Insert Your PIN</p>
      <!-- <p>Send 'STOP' to 6414</p> -->
</div>
      <?php

      if(true)
      {
        //reg_subscriber.php
        if(isset($_GET['err'])) {
          echo "<p>" . $err_msg . "</p>";
          echo '<form action="login.php" id="subform" method="post" >
        <p>'.$_GET['err'].'</p>
        
        <input name="code" class="form-control" type="text" placeholder="Enter Code" pattern= >
        
        <input name="zsubmit" id="zsubmit"  class="btn-get-started" value="CONFIRM"  type="SUBMIT" />
      </form>';
        }
        // <input name="phone" style="display: none;" value="'.$_GET['err'].'" >
        else
        //reg_subscriber.php
        if(isset($_POST['phone'])){
        echo '<form action="login.php" id="subform" method="post" >
        
        <input name="code" class="form-control" type="text" placeholder="Enter Code">
        <input name="phone"  value="'.$_POST['phone'].'" style="display: none;">

        <input name="zsubmit" id="zsubmit"  class="btn-get-started" value="CONFIRM"  type="SUBMIT" />
      </form>';

        }
        // <p>'.$_POST['phone'].'</p>
      }
      else{
        //echo '<p>You will receive Sms text on 6414. Send OK to finish registration.</p>';

      }

      ?>

     <a href="">Forget Pin</a> <br><br>
     <a href="">Change Pin</a>
      <!-- <br><br><br>
      <p style="font-size:12px;">First 3 Days Free, Then 2 Birrs Per day</p>

      <p style="font-size:12px;">የመጀመሪያ 3ቀን በነፃ፤ ቀጥሎ በቀን 2 ብር</p>
      <p >You can win a Galaxy S9+</p>

      <h6 style="color:#ffffff">To Unsubscribe, Send 'STOP' to 6414</h6> -->


    </div>
      </div>
      </div>
       </div>
        </div>
         </div>
          </div>
           </div> 


  </section>
  <!-- Intro end -->
  <?php 
  // header("Location: sms:6414?&body=OK");
   ?>

   <?php include_once "common/footer.php"?>
   

</body>
</html>
