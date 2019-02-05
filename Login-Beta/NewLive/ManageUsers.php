<?php

  $servername = "35.247.56.103";
  $username = "Q";
  $password = "imadminbitch";
  $database = "SPAdmin";

  $conn = mysqli_connect($servername, $username, $password, $database);

  $sql ="SELECT * FROM users";
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
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <body>

                          <div align="center" class="sticky" id="myHeader222">
                            <h2>Manage Users<h2>
                            </div>

                           <div style="width:400px;height:45px;border:0 solid #000;">
                             <div align="center" class="search-container">
                               <form action="/action_page.php">
                                 <input type="text" name="search">
                                 <button type="submit">Search</button>

                               </form>

                             </div>

                           </div>
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
     window.location = 'AddNewUser.php';;
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
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search..." name="search">
      <button class="w3-btn w3-ripple w3-grey" type="submit">Search</i></button>

    </form>

  </div>
</p>

</div>

</body>
                           <div>
                               <table id="editable_table" class="table table-bordered table-striped">
                                 <tr>
                                 <th>#</th>
                                 <th>First</th>
                                  <th>Last</th>
                                 <th>email</th>
                                </tr>


                               <tbody  style="overflow-x:auto;">
                               <?php
                                   while($rows=mysqli_fetch_assoc($result))
                                 {
                                   echo '
                                  <tr>
                                    <td>' .$rows["id"].'</td>
                                    <td>' .$rows["first"].'</td>
                                    <td>' .$rows["last"].'</td>
                                    <td>' .$rows["email"].'</td>
                                  </tr>
                                  ';
                                    }
                                    ?>
                            </table>
                              </table>
                               </div>


                            </div>
                            <script>
                                $(document).ready(function(){
                                   $('#editable_table').Tabledit({
                                    url:'actionMU.php',
                                    columns:{
                                     identifier:[0, "id"],
                                     editable:[[1, 'first'], [2, 'last'], [3, 'email']] 
                                    },
                                    restoreButton:false,
                                    onSuccess:function(data, textStatus, jqXHR)
                                    {
                                     if(data.action == 'delete')
                                     {
                                      $('#'+data.id).remove();
                                     }
                                    }
                                   });
                                });
                              </script>



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
