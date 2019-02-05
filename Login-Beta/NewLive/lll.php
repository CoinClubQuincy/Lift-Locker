 <?php
  
    $servername = "35.225.125.47";
    $username = "Q";
    $password = "imadminbitch";
    $database = "coreleft";
            
    $conn = mysqli_connect($servername, $username, $password, $database);  
                    
    $sql ="SELECT * FROM SPADash";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($myConnection)); ;
                           
?>

