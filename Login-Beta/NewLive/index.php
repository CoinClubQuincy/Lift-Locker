<?php
  session_start();

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: Login/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: Login/login.php");
  }
?>

<!DOCTYPE html>
<html>



<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: right;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 10px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}
</style>
</head>
<body bgcolor="#00000">

<div class="topnav">
  <a href="#about"><b><?php echo $_SESSION['first']; echo $_SESSION['last']; ?>'s </b> Service Provider Admin Dashboard for  <?php echo $_SESSION['Bname']; ?>   </a>
  <a href="#contact">Settings</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search..." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

</body>
</html>




<body>

<p align="center">

<!--
 <button onclick="document.getElementById('SPD').src='LiftReg.html'" class="button2"><span>Registered Lift </span></button>
-->

<iframe align="center" id="SPD" src="SPPage1.php" width="1100" height="700" align="right">
</iframe>


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.button {
  border-radius: 4px;
  background-color: #FFFF00;
  border: none;
  color: #000000;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>



<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  }

  .sidenav {
    height: 95%;
      width: 120px;
        position: fixed;
          z-index: 1;
            top: 0;
              left: 0;
                background-color: #111;
                  overflow-x: hidden;
                    padding-top: 20px;
                    }

                    .sidenav a {
                      padding: 6px 8px 6px 16px;
                        text-decoration: none;
                          font-size: 18px;
                            color: #818181;
                              display: block;
                              }

                              .sidenav a:hover {
                                color: #f1f1f1;
                                }

                                .main {
                                  margin-left: 160px; /* Same as the width of the sidenav */
                                    font-size: 28px; /* Increased text to enable scrolling */
                                      padding: 0px 10px;
                                      }

                                      @media screen and (max-height: 450px) {
                                        .sidenav {padding-top: 15px;}
                                          .sidenav a {font-size: 18px;}
                                          }
                                          </style>
                                          </head>
                                          <body>

                                          <div class="sidenav">
                                          <img src="dis is it.jpg" width="121" height="121">

                                              <head>
                                              <meta name="viewport" content="width=device-width, initial-scale=1">
                                              <style>
                                              .dropbtn {
                                                background-color: #FFDF00;
                                                  color: black;
                                                    padding: 10px;
                                                      font-size: 14px;
                                                        border: none;
                                                        border-radius: 4px;
                                                        moz-border-radius: 10px;
                                                        webkit-border-radius: 10px;
                                                        }

                                               .dropup {
                                                          position: relative;
                                                            display: inline-block;
                                                        }

                                              .dropup-content {
                                                              display: none;
                                                                position: absolute;
                                                                  background-color: #f1f1f1;
                                                                    min-width: 160px;
                                                                      bottom: 50px;
                                                                        z-index: 1;
                                                                }

                                             .dropup-content a {
                                                                          color: black;
                                                                            padding: 12px 16px;
                                                                              text-decoration: none;
                                                                                display: block;
                                                                }

                                                                                .dropup-content a:hover {background-color: #ccc}

                                                                                .dropup:hover .dropup-content {
                                                                                  display: block;
                                                               }

                                                                                  .dropup:hover .dropbtn {
                                                                                    background-color: #2980B9;
                                                                                    }
                                                                                    </style>
                                                                                    </head>
                                                                                    <body>

 <div class="dropup">
   <button class="dropbtn"onclick="document.getElementById('SPD').src='SPPage1.php'" class="button2"><span></span>Repairs in progress</button>
   </div>
   <div class="dropup">
     <button class="dropbtn" onclick="document.getElementById('SPD').src='RegisterdLifts.php'" class="button2"><span></span>Current Registerd Lifts </button>
   </div>

 <div class="dropup">
     <button class="dropbtn" onclick="document.getElementById('SPD').src='SPPage3.php'">Current Shop Locations</button>
 </div>


 <div class="dropup">
  <button class="dropbtn" onclick="document.getElementById('SPD').src='ManageUsers.php'">Manage Current Users</button>
 </div>

 <div class="dropup">
     <button class="dropbtn" onclick="document.getElementById('SPD').src='SPPage4.php'">Recent Work Orders</button>
</div>
<div class="dropup">
  <button class="dropbtn" onclick="document.getElementById('SPD').src='SR.php'">Scheduled Repairs</button>
</div>
<div  class="dropup">
  <button class="w3-btn w3-ripple w3-blue" onclick="document.getElementById('SPD').src='https://www.google.com/maps'"> Open Maps </button>
</div>



<a href="logout.php">Logout</a>

</div>



<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.footer {
   position: bottom;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 25%;
   background-color: #808080;
   color: white;
   text-align: center;
}
</style>
</head>
<body>

<div class="footer">
  <p>Display Lift locker footer info</p>
</div>

</body>




</body>


</html>
