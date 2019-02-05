<?php
//action.php
$connect = mysqli_connect('35.247.56.103', 'Q', 'imadminbitch', 'SPAdmin');

$input = filter_input_array(INPUT_POST);

$first = mysqli_real_escape_string($connect, $input["first"]);
$last = mysqli_real_escape_string($connect, $input["last"]);
$email = mysqli_real_escape_string($connect, $input["email"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE users
 SET first = '".$first."',
 last = '".$last."',
 email = '".$email."'
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM users
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
