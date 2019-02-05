<?php
session_start();

// initializing variables
$first= "";
$last= "";
$Mphone= "";
$email = "";
$Bname= "";
$Bmail= "";
$BAddy= "";
$Bphone= "";
$LLT= "";
$errors = array();

// connect to the database
$conn = mysqli_connect('35.247.56.103', 'Q', 'imadminbitch', 'SLAdmin');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $first = mysqli_real_escape_string($conn, $_POST['first']);
  $last = mysqli_real_escape_string($conn, $_POST['last']);
  $Mphone = mysqli_real_escape_string($conn, $_POST['Mphone']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $Bname = mysqli_real_escape_string($conn, $_POST['Bname']);
  $Bmail = mysqli_real_escape_string($conn, $_POST['Bmail']);
  $BAddy = mysqli_real_escape_string($conn, $_POST['BAddy']);
  $Bphone = mysqli_real_escape_string($conn, $_POST['Bphone']);
  $LLT = mysqli_real_escape_string($conn, $_POST['LLT']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($first)) { array_push($errors, "name is required"); }
  if (empty($last)) { array_push($errors, "last name is required"); }
  if (empty($Mphone)) { array_push($errors, "Phone Number is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($BAddy)) { array_push($errors, "Buisness Address is required"); }
  if (empty($Bphone)) { array_push($errors, "Buisness Phone Number is required"); }
  if (empty($LLT)) { array_push($errors, "Date is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (first, last, Mphone, email, pwd, Bname, Bmail, BAddy, Bphone, LLT)
  			  VALUES('$first', '$last', '$Mphone', '$email', '$password', '$Bname', '$Bmail', '$BAddy', '$Bphone', '$LLT')";
  	mysqli_query($conn, $query);
    $_SESSION['email'] = $email;
    $_SESSION['first'] = $first;
    $_SESSION['last'] = $last;
    $_SESSION['Bname'] = $Bname;
    $_SESSION['BAddy'] = $BAddy;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ShopLocation/index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND pwd='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
      $_SESSION['first'] = $first;
      $_SESSION['last'] = $last;
      $_SESSION['Bname'] = $Bname;
      $_SESSION['BAddy'] = $BAddy;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: ShopLocation/index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
