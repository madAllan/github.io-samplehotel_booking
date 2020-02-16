<?php
require_once('start_connect.php');

?>

<html>
<head><title></title>
<style>
.describe_in_details{
	text-decoration:none;
	color:#000;
}
</style>

</head>
<body>




<?php

if(isset($_POST['id'])){
$id=$_POST['id'];

$query="SELECT description FROM hotel_table WHERE id='$id'";
$result=mysqli_query($dbc,$query)or die('Error querying database.');
$row=mysqli_fetch_array($result);
echo "<p class='describe_in_details'>".substr($row['description'],75)."</p>";

}else{
	echo "Error";
}

?>


</body>
</html>