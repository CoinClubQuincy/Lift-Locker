


<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    }

    .top-container {
      background-color: #f1f1f1;
        padding: 30px;
          text-align: center;
          }

          .sticky {
            padding: 0px 10px;
              background: #555;
                color: #f1f1f1;
                }

                .content {
                  padding:16px;
                  }

                  .sticky {
                    position: fixed;
                      top: 0;
                        width: 100%;
                        }

                        .sticky + .content {
                          padding-top: 102px;
                          }
                          </style>
                          </head>
                          <body>

                           <div class="content">
                           <head>
                           <meta name="viewport" content="width=device-width, initial-scale=1">
                           <style>
                            table {
                                                                                                                                                            border-collapse: collapse;
                                                                                                                                                                                                                     border-spacing: 0;
                                                                                                                                                                                                                                                         width: 100%;
                                                                                                                                                                                                                                                                                               border: 1px solid #ddd;
                                                                                                                                                                                                                                                                                                                                     }

                                                                                                                                                                                                                                                                                                                                                                                                                 th, td {
                                                                                                                                                                                                                                                                                                                                                                                                                                                         text-align: left;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   padding: 8px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             }

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 tr:nth-child(even){background-color: #f2f2f2}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           </style>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     </head>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <body>

                          <div align="center" class="sticky" id="myHeader222">
                            <h2>Add New User<h2>
                            </div>

                           <div style="width:500px;height:45px;border:0px solid #000;"></div>
                           <title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
<script>
  function changeSrc()
  {
   var oiFrame1 = document.getElementById('mIframe');
   oiFrame.src = 'AddNewUser.php';
  }

  function changeSrc()
  {
   window.location = 'AddNewUser.php';
  }
  function changeSrc2()
  {
   var oiFrame1 = document.getElementById('mIframe');
   oiFrame.src = 'ManageUsers.php';
  }

  function changeSrc2()
  {
   window.location = 'ManageUsers.php';;
  }
</script>
<p>
  <button onclick='changeSrc2();' align="center" class="w3-btn w3-ripple w3-grey">Manage Users</button>
  <button onclick='changeSrc();' align="center"  class="w3-btn w3-ripple w3-yellow">Add New User</button>
</p>
</div>

</body>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form method="POST" action="AddU.php">
  <div class="container">
    <script>
    function changeSrc3()
    {
     var oiFrame1 = document.getElementById('mIframe');
     oiFrame.src = 'ManageUsers.php';
    }

    function changeSrc3()
    {
     window.location = 'ManageUsers.php';;
    }
    </script>

    <h1>Add New User</h1>
    <p>Please fill in this form to create new user</p>
    <hr>

    <label for="bay"><b>First Name</b></label>
    <input type="text" name="first" required>

    <label for="LB"><b>Last Name</b></label>
    <input type="text" name="last" required>

    <label for="LC"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <hr>

    <label for="LT"><b>Mobile Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="Mphone" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button onclick='changeSrc3();' type="submit" name="go" class="registerbtn">Register</button>
  </div>


</form>

</body>



                                <script>
                                window.onscroll = function() {myFunction()};

                                var header = document.getElementById("myHeader222");
                                var sticky = header.offsetTop;

                                function myFunction() {
                                  if (window.pageYOffset > sticky) {
                                      header.classList.add("sticky");
                                        } else {
                                            header.classList.remove("sticky");
                                              }
                                              }
                                              </script>

                                              </body>

<body style="background-color:#FFFFFF;">
</body>
