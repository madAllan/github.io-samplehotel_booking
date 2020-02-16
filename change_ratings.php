<?php
require_once('start_connect.php');
?>

<?php
if(isset($_POST['average_star'])){
	$id=$_POST['hotelId'];
	$ratings=$_POST['average_star'];
	$query="UPDATE hotel_table SET ratings='$ratings' WHERE id='$id'";
	$result=mysqli_query($dbc,$query)or die('Error querying database.');
	mysqli_close($dbc);
}


?>