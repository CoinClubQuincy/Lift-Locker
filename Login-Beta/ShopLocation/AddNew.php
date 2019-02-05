<?php
  $DB_host = '35.247.56.103';
  $DB_user  =  'Q' ;
  $DB_password  =  'imadminbitch' ;
  $DB_name  =  'SLAdmin' ;

  $conn  =  mysqli_connect( $DB_host , $DB_user , $DB_password, $DB_name ); /* Connection to the database according to the parameters established above */


  $first = "";
  $last = "";
  $email = "";
  $Mphone="";
  $errors = array();

  if(isset($_POST["reg"])){
    /* Here the data entered in the registration HTML page are used and initialized with the variable which will then be used later */
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $Mphone = $_POST['Mphone'];

    if(empty($first)){
      array_push($errors, "error in First field");
    }
    if(empty($last)){
      array_push($errors, "error in Last field");
    }
    if(empty($email)){
      array_push($errors, "error in email field");
    }
    if(empty($Mphone)){
      array_push($errors, "error in Phone field");
    }

    if(count($errors) == 0){
      $sql = "INSERT INTO users (first, last, email, Mphone) VALUES('$first', '$last', '$email', '$Mphone')";
      mysqli_query($conn, $sql);
      header("location: ManageUsers.php");
    }
}
?>
