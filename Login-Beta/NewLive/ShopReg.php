<?php
  $DB_host = '35.247.56.103';
  $DB_user  =  'Q' ;
  $DB_password  =  'imadminbitch' ;
  $DB_name  =  'SPAdmin' ;

  $conn  =  mysqli_connect( $DB_host , $DB_user , $DB_password, $DB_name ); /* Connection to the database according to the parameters established above */

  $LN = "";
  $LA = "";
  $PN = "";
  $errors = array();

  if(isset($_POST["reg"])){
    /* Here the data entered in the registration HTML page are used and initialized with the variable which will then be used later */
    $LN = $_POST['LocationName'];
    $LA = $_POST['LocationAddress'];
    $PN = $_POST['PhoneNumb'];

    if(empty($LN)){
      array_push($errors, "error in Location Name field");
    }
    if(empty($LA)){
      array_push($errors, "error in Address field");
    }
    if(empty($PN)){
      array_push($errors, "error in Phone Number field");
    }

    if(count($errors) == 0){
      $sql = "INSERT INTO ShopLocation (LocationName, LocationAddress, PhoneNumb) VALUES('$LN', '$LA', '$PN')";
      mysqli_query($conn, $sql);
      header("location: SPPage3.php");
    }
}
?>
