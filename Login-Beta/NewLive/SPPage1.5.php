
<?php
 
 $servername = "35.225.125.47";
 $username = "Q";
 $password = "imadminbitch";
 $database = "coreleft";
 
 $conn = mysqli_connect($servername, $username, $password, $database);
 
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
          
.header {
          padding: 0px 16px;
          background: #555;
          color: #f1f1f1;
         }
                
.content {
            padding: 16px;
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
         <div align="center" class="header" id="myHeader222">
         <h2>Approved Repairs</h2>
         </div>
                            
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
                    
                    
                    
                    <div id="table" style="overflow-x:auto;">
                      <body>
                        <table>
                        
                        
                          <tr>
                            <th>Bay</th> 
                            <th>Model 
                            <th>Serial
                            <th>Description</th>
                            <th>Picture</th>                             
                           </tr>
                          </table>
<?php 
      $sql = "SELECT * FROM SPADash;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      
      if ($resultCheck  > 0 ) 
      {                    // output data of each row
        while($row=mysqli_fetch_array($result))
        { 
        <tr>
            <td>  echo escape(["Bay"]); ?></td>
            <td>  echo escape(["Model"]); ?></td>
            <td>  echo escape(["Serial"]; ?></td>
            <td>  echo escape(["Description"]); ?></td>
        </tr>
        }

      }
      
      
 ?>                                                                 
                                                                                                                                    
                 </body>
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
