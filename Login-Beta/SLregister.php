<?php require('SLserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Shop Location Registration</h2>
  </div>

  <form method="post" action="SLregister.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
      <div class="input-group">
        <a class="input-group"> CurrentPosition</a>
        <select>
          <option value="volvo" selected>Shop Manager</option>
          <option value="saab">District Manager</option>
          <option value="vw">Reginal Manager</option>
          <option value="audi">National Manager</option>
        </select>

      </div>
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
    	  <label>Personal Email</label>
    	  <input type="email" name="email" value="<?php echo $email; ?>">
    	</div>
      <label>Shop Name</label>
  	  <input type="text" name="Bname" value="<?php echo $Bname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Main Shop Email</label>
  	  <input type="email" name="Bmail" value="<?php echo $Bmail; ?>">
  	</div>
    <div class="input-group">
  	  <label>Shop Address</label>
  	  <input type="text" name="BAddy" value="<?php echo $BAddy; ?>">
  	</div>
    <div class="input-group">
      <label>Buisness Phone</label>
      <input type="text" name="Bphone" value="<?php echo $Bphone; ?>">
    </div>
    <div class="input-group">
        <body>
          <form>
            Last Lift Training: <input type="date" name="LLT" value="<?php echo $LLT; ?>">
          </form>
        </body>
      <div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="SLlogin.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
