<?php
//action.php
$connect = mysqli_connect('35.247.56.103', 'Q', 'imadminbitch', 'SPAdmin');

$input = filter_input_array(INPUT_POST);

$Location = mysqli_real_escape_string($connect, $input["Location"]);
$Bay = mysqli_real_escape_string($connect, $input["Bay"]);
$Date = mysqli_real_escape_string($connect, $input["Date"]);
$Time = mysqli_real_escape_string($connect, $input["Time"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE SRepairs
 SET Date = '".$Date."',
 Time = '".$Time."'
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM SRepairs
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
