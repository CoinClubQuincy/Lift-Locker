<?php
//action.php
$connect = mysqli_connect('35.247.56.103', 'Q', 'imadminbitch', 'SPAdmin');

$input = filter_input_array(INPUT_POST);

$Bay = mysqli_real_escape_string($connect, $input["Bay"]);
$Model = mysqli_real_escape_string($connect, $input["Model"]);
$Serial = mysqli_real_escape_string($connect, $input["Serial"]);
$Des = mysqli_real_escape_string($connect, $input["Des"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE Repairs_In_progress
 SET Bay = '".$Bay."',
 Model = '".$Model."',
 Serial = '".$Serial."',
 Des = '".$Des."'
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM Repairs_In_progress
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
