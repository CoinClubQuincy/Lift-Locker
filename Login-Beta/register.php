<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Service Provider Registration</h2>
  </div>

  <form method="post" action="server.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="first" value="<?php echo $first; ?>">
  	</div>
    <div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="last" value="<?php echo $last; ?>">
  	</div>
    <div class="input-group">
  	  <label>Mobile Phone</label>
  	  <input type="text" name="Mphone" value="<?php echo $Mphone; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>User Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm User password</label>
  	  <input type="password" name="password_2">
  	</div>
    <div class="input-group">
      <label>Company Name</label>
      <input type="text" name="Bname" value="<?php echo $Bname; ?>">
    </div>
    <div class="input-group">
      <label>Main Buisness Address</label>
      <input type="text" name="BAddy" value="<?php echo $BAddy; ?>">
    </div>
    <div class="input-group">
      <label>Main Buisness Email</label>
      <input type="email" name="Bmail" value="<?php echo $Bmail; ?>">
    </div>
    <div class="input-group">
      <label>Enter Buisness Phone Number</label>
      <input type="text" name="Bphone" value="<?php echo $Bphone; ?>">
    </div>
    <div class="input-group">
      <label>Buisness Licence Number </label>
      <input type="text" name="BLN" value="<?php echo $BLN; ?>">
    </div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
