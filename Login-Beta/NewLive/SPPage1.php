<?php

    ////// above php in not finnished

  $servername = "35.247.56.103";
  $username = "Q";
  $password = "imadminbitch";
  $database = "SPAdmin";

  $query = "SELECT * FROM SPAdmin ORDER BY id DESC";
  $conn = mysqli_connect($servername, $username, $password, $database);

  $sql ="SELECT * FROM Repairs_In_progress";
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
                            <h2>Repairs in Progress <h2>
                            </div>
                            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                           <div style="width:500px;height:50px;border:0px solid #000;"></div>
                           <div class="search-container">
                             <form action="/action_page.php">
                               <input type="text" placeholder="Search..." name="search">
                               <button class="w3-btn w3-ripple w3-grey" type="submit">Search</button>

                             </form>

                           </div>

                           <div class="table-responsive">
                             <script>
                             function changeSrc()
                             {
                              var oiFrame1 = document.getElementById('mIframe');
                              oiFrame.src = 'AR.php';
                             }

                             function changeSrc()
                             {
                              window.location = 'AR.php';;
                             }
                             </script>
                               <table id="editable_table" class="table table-bordered table-striped">
                                 <tr>
                                   <th>#</th>
                                   <th>Bay</th>
                                   <th>Model #</th>
                                   <th>Serial #</th>
                                   <th>Description</th>
                                </tr>

                               <tbody  style="overflow-x:auto;">
                                 <style>
                                  .w3-btn {margin-bottom:10px;}
                                  </style>
                               <?php
                                   while($rows=mysqli_fetch_assoc($result))
                                 {

                                    echo '
                                   <tr>
                                     <td>' .$rows["id"].'</td>
                                     <td>' .$rows["Bay"].'</td>
                                     <td>' .$rows["Model"].'</td>
                                     <td>' .$rows["Serial"].'</td>
                                     <td>' .$rows["Des"].'</td>
                                   </tr>
                                   ';
                                 }
                                 ?>
                               </tbody>
                              </table>
                               </div>
                            </div>
                            <script>
                                $(document).ready(function(){
                                   $('#editable_table').Tabledit({
                                    url:'action.php',
                                    columns:{
                                     identifier:[0, "id"],
                                     editable:[[1, 'Bay'], [2, 'Model'], [3, 'Serial'], [4, 'Des']]
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
