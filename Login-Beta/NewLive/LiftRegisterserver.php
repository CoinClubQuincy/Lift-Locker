<?php
  $DB_host = '35.247.56.103';
  $DB_user  = 'Q';
  $DB_password ='imadminbitch' ;
  $DB_name  =  'SPAdmin' ;

  $conn  =  mysqli_connect( $DB_host, $DB_user, $DB_password, $DB_name); /* Connection to the database according to the parameters established above */


  $Bay = "";
  $Brand = "";
  $Capacity = "";
  $LiftType = "";
  $erial = "";
  $Notes = "";
  $errors = array();

  if(isset($_POST["go2"])){
    /* Here the data entered in the registration HTML page are used and initialized with the variable which will then be used later */
    $Bay = $_POST['Bay'];
    $Brand = $_POST['Brand'];
    $Capacity = $_POST['Capacity'];
    $LiftType = $_POST['LiftType'];
    $Serial = $_POST['Serial'];
    $Notes = $_POST['Notes'];

    if(empty($Bay)){
      array_push($errors, "error in Bay field");
    }
    if(empty($Brand)){
      array_push($errors, "error in Brand field");
    }
    if(empty($Capacity)){
      array_push($errors, "error in Capacity field");
    }
    if(empty($LiftType)){
      array_push($errors, "error in Lift Type field");
    }
    if(empty($Serial)){
      array_push($errors, "error in Serial field");
    }
    if(empty($Notes)){
      array_push($errors, "Must enter notes in field");
    }

    //Not finnished bellow
    if(count($errors) == 0){
      $sql = "INSERT INTO RegisterdLifts(`Bay`, `Brand`, `Capacity`, `LiftType`, `Serial`, `Notes`) VALUES('$Bay', '$Brand', '$Capacity', '$LiftType', '$Serial', '$Notes')";
      mysqli_query($conn, $sql);
      header("Location: RegisterdLifts.php");
    }
}
?>
