<?php
session_start();

// initializing variables

$email    = "";
$password ="";
$errors = array();

// connect to the database
$conn = mysqli_connect('35.236.14.141', 'Q', 'Quincy2222', 'SLAdmin');

  // LOGIN USER
  if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($email)) {
    	array_push($errors, "Email is required");
    }
    if (empty($password)) {
    	array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
    	$password = md5($password);
    	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    	$results = mysqli_query($db, $query);
    	if (mysqli_num_rows($results) == 1) {
    	  $_SESSION['email'] = $email;
        $_SESSION['first'] = $first;
        $_SESSION['last'] = $last;
        $_SESSION['Bname'] = $Bname;
        $_SESSION['BAddy'] = $BAddy;
    	  $_SESSION['success'] = "You are now logged in";
    	  header('location: ShopTech/index.php');
    	}else {
    		array_push($errors, "Wrong Email/password combination");
    	}
    }
  }

?>
