<?php
require_once('sessionstart.php');
$page_title='Edit Profile';
require_once('header.php');
require_once('navbar.php');
require_once('connectvars.php');
 ?>
<?php
if(isset($_POST['submit'])){
    $join_date=mysqli_real_escape_string($dbc,trim($_POST['join_date']));
    $join_date=mysqli_real_escape_string($dbc,trim($_POST['join_date']));
    $join_date=mysqli_real_escape_string($dbc,trim($_POST['join_date']));
    $join_date=mysqli_real_escape_string($dbc,trim($_POST['join_date']));
    $join_date=mysqli_real_escape_string($dbc,trim($_POST['join_date']));
    $join_date=mysqli_real_escape_string($dbc,trim($_POST['join_date']));
    $join_date=mysqli_real_escape_string($dbc,trim($_POST['join_date']));
  $insert_query="INSERT INTO mismatch_user(join_date,first_name,last_name,gender,birthdate,city,state,picture) VALUES() ";
}


 ?>






 <?php
$query="SELECT * FROM mismatch_user WHERE user_id='".$_SESSION['user_id']."' AND username='".$_SESSION['username']."'";
$result=mysqli_query($dbc,$query) or die('Error querying database.');
$row=mysqli_fetch_array($result);
  ?>
<form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <fieldset>
    <legend>Personal Information</legend>
    <span>First Name:</span>
    <input type="text" name="firstname" value="<?php if(!empty($row['firstname'])) echo $row['firstname']; ?>">
    <br><br>
    <span>Last Name:</span>
    <input type="text" name="lastname" value="<?php if(!empty($row['lastname'])) echo $row['lastname']; ?>">
    <br><br>
    <span>Gender:</span>
    <select class="" name="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
    </select>
    <br><br>
    <span>Birthdate:</span>
    <input type="date" name="date" value="<?php if(!empty($row['date'])) echo $row['date']; ?>">
    <br><br>
    <span>City:</span>
    <input type="text" name="city" value="<?php if(!empty($row['city'])) echo $row['city']; ?>">
    <br><br>
    <span>State:</span>
    <input type="text" name="state" value="<?php if(!empty($row['state'])) echo $row['state']; ?>">
    <br><br>
    <input type="file" name="picture" value="<?php if(!empty($row['picture'])) echo $row['picture'] ; ?>">
    <?php
    if(!empty($row['picture'])){
      echo "<img src='".MISMATCH_UPLOADPATH.$row['picture']."' width='300px' height='200px'>";
    }
     ?>
     <br><br>
     <input type="submit" name="submit" value="Save Profile">

  </fieldset>
</form>
<?php
require_once('footer.php');
 ?>
