<?php

    ////// above php in not finnished

  $servername = "35.247.56.103";
  $username = "Q";
  $password = "imadminbitch";
  $database = "SPAdmin";

  $conn = mysqli_connect($servername, $username, $password, $database);

  $sql ="SELECT * FROM Approved_Repairs";
  $result = mysqli_query($conn, $sql) or die(mysqli_error($myConnection)); ;

?>


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
                            <h2>Approved Repairs <h2>
                            </div>

                           <div style="width:500px;height:40px;border:0px solid #000;"></div>

                           <div>
                             <script>
                             function changeSrc()
                             {
                              var oiFrame1 = document.getElementById('mIframe');
                              oiFrame.src = 'SPPage1.php';
                             }

                             function changeSrc()
                             {
                              window.location = 'SPPage1.php';;
                             }
                             </script>
                               <table>
                                 <tr>
                                 <th>Shop</th>
                                 <th>Location</th>
                                 <th>Date</th>
                                 <th><button onclick='changeSrc();'>Open Repairs in Progress</button></th>
                                </tr>


                               <tbody  style="overflow-x:auto;">
                                 <style>
                                  .w3-btn {margin-bottom:10px;}
                                  </style>
                               <?php
                                   while($rows=mysqli_fetch_assoc($result))
                                 {
                               ?>
                                   <tr>
                                     <td><?php echo $rows['Shop']; ?></td>
                                     <td><?php echo $rows['Location']; ?></td>
                                     <td><?php echo $rows['Date']; ?></td>
                                     <td><button><b><font color="#663300"><a href="edit.php?id=' <?php echo $row['id']; ?> '">Edit</a></font></b></button></td>';
                                  </tr>
                                  <?php
                                    }
                                    ?>
                            </table>
                              </table>
                               </div>


                            </div>



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
