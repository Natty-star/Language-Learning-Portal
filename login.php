<?php
session_start();
require_once ("class/config.php");
require_once ("class/db.php");
$code = array(4577 , 3322);
//$mobile= $_POST['phone'];

function CheckCode(){
    $code = array(4577 , 3322);
    $length = count($code);
    $result = false;
  for($i = 0; $i < $length; $i++){
      if($_POST['code'] == $code[$i]){
         $result = TRUE;
         break;
      }
  }
  return $result;
  
}


$err=''; // Variable To Store Error Message
if (isset($_POST['phone'])) {
if (empty($_POST['phone']) || empty($_POST['code'])) {
$err = "Username or Password is invalid";
header("Location: ".SUBSCRIBE);
echo $err;
}else{
   $mobile= $_POST['phone'];
   //$code = $_POST['code']; 
    $sql="SELECT * FROM `subscribers` WHERE `phone_number` LIKE  '251".$mobile."'";
    $db = new db();

   if( $db->exist($sql) and CheckCode()){ 
       $_SESSION['login_user']=$mobile;  
       echo 'yes';
       header("Location: ".MAINURL); 
   }else{
   $err = "Username or Password is invalid";
    header("Location: ".SUBSCRIBE);
   echo $err;
   }


    // $message="";
    // if(count($_POST)>0) {
       
    //     $sql="SELECT * FROM `subscribers` WHERE `phone_number` LIKE  '251".$mobile."'";
    //     //$result = mysqli_query($con,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
    //     //$row  = mysqli_fetch_array($result);
    //     $db = new db();
    //     if($db->exist($sql) and $_POST['code'] == $code) {
    //     $_SESSION["id"] = $code;
    //     //$_SESSION["name"] = $row['name'];
    //     } else {
    //      $message = "Invalid Username or Password!";
    //     }
    // }
    // if(isset($_SESSION["id"])) {
    // header("Location:index.php");
    // }else{
    //     header("Location: ".SUBSCRIBE);
    // }


// //$mobile= $_POST['phone'];
// $mobile = isset($_POST['phone']) ? $_POST['phone'] : '';
// //echo $mobile;

// $sql="SELECT * FROM `subscribers` WHERE `phone_number` LIKE  '251".$mobile."'";

// $self_server=$_SERVER['PHP_SELF'];

// $db = new db();
// $ph = $db->exist($sql);
// //echo $ph;
// //$final_res;
// if( $db->exist($sql) and $_POST['code'] == $code){
//     if(basename($_SERVER['PHP_SELF'])=="confirm.php" or basename($_SERVER['PHP_SELF'])=="login.php")
      
//    { 
//         //$final_res=true;
//        header("Location: ".MAINURL);
//     }
       
// }
// else
// {
//    // $final_res=false;
//    header("Location: ".SUBSCRIBE);
//    //echo "no";
//     //exit();
 

// }

//($final_res ?echo " yes";:echo "no"; );

}
}
?>