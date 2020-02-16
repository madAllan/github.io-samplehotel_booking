<?php
require_once('session_code.php');
require_once('start_connect.php');
?>

<?php

if(isset($_POST['hotelName']) && isset($_POST['hotelId'])){
	$hotelName=$_POST['hotelName'];
	$hotelId=$_POST['hotelId'];

$query="SELECT * FROM hotel_table WHERE id='$hotelId'";
$result=mysqli_query($dbc,$query)or die('Error querying database.');
$row=mysqli_fetch_array($result);

$update_num_Click=$row['num_Click'];
$update_num_Click=$update_num_Click + 1;

$query2="UPDATE hotel_table SET num_Click='$update_num_Click' WHERE id='$hotelId'";
$result2=mysqli_query($dbc,$query2)or die('Error querying database second time.');
echo "You clicked this hotel ".$update_num_Click." hotel id: ".$hotelId;

}


?>