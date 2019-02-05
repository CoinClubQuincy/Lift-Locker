<?php

  $servername = "35.247.56.103";
  $username = "Q";
  $password = "imadminbitch";
  $database = "SLAdmin";

  $id = $_GET["id"];
  $conn = mysqli_connect($servername, $username, $password, $database);
  $sql ="SELECT * FROM RegisterdLifts";
  $result = mysqli_query($conn, $sql) or die(mysqli_error($myConnection)); ;

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="jquery.tabledit.min.js"></script>


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
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     <meta name="viewport" content="width=device-width, initial-scale=1">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <body>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <div class="w3-container">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <script>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            function changeSrc()
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             var oiFrame1 = document.getElementById('mIframe');
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             oiFrame.src = 'LiftReg.html';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            }

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            function changeSrc()
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             window.location = 'LiftReg.html';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </script>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <meta name="viewport" content="width=device-width, initial-scale=1">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <body>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <div class="w3-container">



                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </body>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </body>                                                                                                                                                                                                         <body>

                          <div align="center" class="sticky" id="myHeader222">
                            <h2>Tech Check<h2>
                            </div>

                           <div style="width:500px;height:35px;border:0px solid #000;"></div>

                           <script>
                             function changeSrc()
                             {
                              var oiFrame1 = document.getElementById('mIframe');
                              oiFrame.src = 'RegisterdLifts.php';
                             }

                             function changeSrc()
                             {
                              window.location = 'RegisterdLifts.php';;
                             }
                             function changeSrc2()
                             {
                              var oiFrame1 = document.getElementById('mIframe');
                              oiFrame.src = 'RegisterdLifts2.php';
                             }

                             function changeSrc2()
                             {
                              window.location = 'RegisterdLifts2.php';;
                             }
                             </script>

                           <div>
                                  <button onclick='changeSrc()' class="w3-btn w3-ripple w3-black">Registerd Lifts</button>
                                  <button onclick='changeSrc2()' class="w3-btn w3-ripple w3-yellow">Edit Registerd Lifts</button>
                            </div>

                               </div>


                            </div>


                            <form method="post">
                           <tbody  style="overflow-x:auto;">
                             <strong><table>
                               <tr>
                               <th>#</th>
                               <th>Bay</th>
                               <th>Brand</th>
                               <th>Capacity</th>
                               <th>Lift Type</th>
                               <th>Serial</th>
                               <th>Notes</th>


                            <?php
                                while($rows=mysqli_fetch_assoc($result))
                                {
                                echo '
                               <tr>
                                 <td>' .$rows["id"].'</td>
                                 <td>' .$rows["Bay"].'</td>
                                 <td>' .$rows["Brand"].'</td>
                                 <td>' .$rows["Capacity"].'</td>
                                 <td>' .$rows["LiftType"].'</td>
                                 <td>' .$rows["Serial"].'</td>
                                 <td>' .$rows["Notes"].'</td>
                               </tr>
                               ';
                                 }
                            ?>
                          </strong></table>

                          </form>

                          <head>
                          <meta name="viewport" content="width=device-width, initial-scale=1">
                          <style>
                          body {
                            font-family: Arial, Helvetica, sans-serif;
                            background-color: black;
                            width: 100%
                          }

                          * {
                            box-sizing: border-box;
                          }

                          /* Add padding to containers */
                          .container {
                            padding: 16px;
                            background-color: yellow;
                            width: 30%
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

                          <form method="POST" action="LiftRegisterserver.php">
                                <script>
                                function changeSrc3()
                                {
                                 var oiFrame1 = document.getElementById('mIframe');
                                 oiFrame.src = 'RegisterdLifts.php';
                                }

                                function changeSrc3()
                                {
                                 window.location = 'RegisterdLifts.php';
                                }
                                </script>
                                <meta name="viewport" content="width=device-width, initial-scale=1">
                          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                          <body>

                          <div class="w3-container">

                          </div>

                          </body>
                          <div class="container">
                            <div class="w3-container">
                              </div>
                              <hr>

                              <form>
                              <label for="bay"><b>Are All Visible Parts In Good Condition?</b></label>
                              <input type="radio" name="gender" value="Anchor">Yes<br>
                              <input type="radio" name="gender" value="Hose">No<br>
                              </form>
                              <hr>

                              <form>
                              <label for="LB"><b>Is Hydraulic System In Good Condition?</b></label>
                              <input type="radio" name="gender" value="Anchor">Yes<br>
                              <input type="radio" name="gender" value="Hose">No<br>
                              </form>
                              <hr>

                              <form>
                              <label for="LC"><b>Does the lift appear to be raising and lowering evenly?</b></label>
                              <input type="radio" name="gender" value="Anchor">Yes<br>
                              <input type="radio" name="gender" value="Hose">No<br>
                              </form>
                              <hr>

                              <form>
                              <label for="LT"><b>Are Safety Locks Working Properly?</b></label>
                              <input type="radio" name="gender" value="Anchor">Yes<br>
                              <input type="radio" name="gender" value="Hose">No<br>
                              </form>
                              <hr>

                              <form>
                              <label for="S"><b>Are Lifting Surfaces In Good Condition?</b></label>
                              <input type="radio" name="gender" value="Anchor">Yes<br>
                              <input type="radio" name="gender" value="Hose">No<br>
                              </form>
                              <hr>

                              <form>
                              <label for="LC"><b>Do You Feel This Lift Is In Safe Working Order?</b></label>
                              <input type="radio" name="gender" value="Anchor">Yes<br>
                              <input type="radio" name="gender" value="Hose">No<br>
                              </form>
                              <hr>

                              <button type="submit" name="go" class="registerbtn">Complete Daily Check</button>
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
