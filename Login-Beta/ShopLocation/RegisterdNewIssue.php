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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-button {width:150px;}
</style>
<body>
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
                           .container {
                             padding: 16px;
                             background-color: yellow;
                             width: 40%
                           }
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

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <p><button onclick='changeSrc();' class="w3-btn w3-block w3-yellow w3-left-align">Register New Lift</button></p>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </body>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </body>                                                                                                                                                                                                         <body>

                          <div align="center" class="sticky" id="myHeader222">
                            <h2>Register New Issue<h2>
                            </div>

                           <div style="width:500px;height:10px;border:0px solid #000;"></div>

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

                          <body>



                        <div class="container">
                          <textarea rows="4" cols="40"></textarea>
                        <form align="center" action="">
                          <a>Issue Subject/Failed Question</a><br>
                          <input type="radio" name="gender" value="Anchor">Anchor<br>
                          <input type="radio" name="gender" value="Hose">Hose<br>
                          <input type="radio" name="gender" value="Motor">Motor<br>
                          <input type="radio" name="gender" value="Cylinder">Cylinder<br>
                          <input type="radio" name="gender" value="other">Cable<br>
                          <input type="radio" name="gender" value="other">Safety<br>
                          <input type="radio" name="gender" value="other">Locks<br>
                          <input type="radio" name="gender" value="other">Pads<br>
                          <input type="radio" name="gender" value="other">Arms<br>
                          <input type="radio" name="gender" value="other">Pulleys<br>
                          <input type="radio" name="gender" value="other">Runways<br>
                          <input type="radio" name="gender" value="other">Jacks<br>
                          <div class="w3-container">
                            <p><button class="w3-button w3-blue">Submit</button></p>
                        </form>
                      </div>
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
