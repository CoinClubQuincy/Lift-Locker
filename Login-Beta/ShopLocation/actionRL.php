<?php
//action.php
$connect = mysqli_connect('35.247.56.103', 'Q', 'imadminbitch', 'SLAdmin');

$input = filter_input_array(INPUT_POST);

$Bay = mysqli_real_escape_string($connect, $input["Bay"]);
$Brand = mysqli_real_escape_string($connect, $input["Brand"]);
$Capacity = mysqli_real_escape_string($connect, $input["Capacity"]);
$LiftType = mysqli_real_escape_string($connect, $input["LiftType"]);
$Serial = mysqli_real_escape_string($connect, $input["Serial"]);
$Notes = mysqli_real_escape_string($connect, $input["Notes"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE RegisterdLifts
 SET Bay = '".$Bay."',
 Brand = '".$Brand."',
 Capacity = '".$Capacity."',
 LiftType = '".$LiftType."',
 Serial = '".$Serial."',
 Notes = '".$Notes."'
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM RegisterdLifts
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
