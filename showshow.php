<?php
require_once('session_code.php');
require_once('start_connect.php');
?>
<?php

define('HOTEL_PICTURE','images/');




if(isset($_POST['submit'])){
$picture=$_FILES['prof_pic_upload']['name'];
$target=HOTEL_PICTURE.$picture;
if(move_uploaded_file($_FILES['prof_pic_upload']['tmp_name'],$target)){
$query="UPDATE hotel_user_info SET profile_picture='$picture' WHERE id='".$_SESSION['id']."'";
$result=mysqli_query($dbc,$query)or die('Error querying database.');
mysqli_close($dbc);
header('Location:viewprofile.php');
}else{
	echo "Error";
}
//$query="";
//$result=mysqli_query($dbc,$query)or die('Error querying database.');

}
?>