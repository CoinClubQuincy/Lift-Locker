<?php
$conn = mysqli_connect('35.247.56.103', 'Q', 'imadminbitch', 'Login');
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
  	  header('location: Newlive/index.php');
    }else {
        array_push($errors, "Wrong username/password combination");
      }
  }
}
?>
