<?php
require_once('start_connect.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Satisfy" rel="stylesheet">
<link href="style.css" rel="stylesheet" type="text/css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
body{
  text-align: center;
}

form{
  text-align: left;
  padding:5% 25%;
}
.submit_button{
margin-top: 5%;
}
.text{
margin-bottom: 0;
}
.login{
  padding-top: 5%;
}
</style>
    <title>Log In</title>
  </head>
  <body>

<div class="container">
  <h3 class="login">Log In</h3>



<?php
session_start();

$output_form=false;
if(isset($_POST['submit'])){
  if(!empty($_POST['email']) && !empty($_POST['password'])){
 $email=$_POST['email'];
  $password=$_POST['password'];
$query="SELECT * FROM hotel_user_info WHERE email='$email' AND password=SHA('$password')";
$result=mysqli_query($dbc,$query)or die('Error querying database.');
if(mysqli_num_rows($result)==1){
  $row=mysqli_fetch_array($result);
setcookie('id',$row['id'],time()+(60*60*24*30));
setcookie('first_name',$row['first_name'],time()+(60*60*24*30));
setcookie('email',$row['email'],time()+(60*60*24*30));
$_SESSION['id']=$row['id'];
$_SESSION['first_name']=$row['first_name'];
header('Location:index.php');
}else{
  echo "<p>No account found.Click here to <a href='signup.php'>Sign Up</a></p>";
  $output_form=true;
}
}else{
  echo "<p>Please Enter correct Email and Password.</p>";
  $output_form=true;
}
}else{
  $output_form=true;
}
if($output_form){
  ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-group">
<p class="text">Email:</p>
<input type="text" name="email" value="<?php if(!empty($email)) echo $email;?>" class="form-control" placeholder="name@example.com"/>
<br/>
<p class="text">Password:</p>
<input type="password" name="password" class="form-control"/>
<button type="submit" name="submit" class=" submit_button btn btn-warning">Log In</button>
</form>


  <?php
}

?>


</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script>
  AOS.init({duration:2000,});
</script>


  </body>
</html>