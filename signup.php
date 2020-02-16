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
.signup{
  padding: 5% 0 2%;


}
.form-control{
line-height: .5rem;
}
.text{
  margin-bottom: 0;
}
.password-group{
position: relative;
}
.fas{
position: absolute;
top:60%;
right:5%;
color:gray;
}
.submit-group{
  margin:5% 0; 
  text-align: left;
}
</style>
    <title>Sign Up</title>
  </head>
  <body>

<div class="container">
  <h3 class="signup">Sign Up</h3>

<?php

$output_form=false;
if(isset($_POST['submit'])){
  if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password'])){

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];

$query="SELECT * FROM hotel_user_info WHERE email='$email'";
$result=mysqli_query($dbc,$query)or die('Error querying database.');

  if(mysqli_num_rows($result)>=1){
echo "<p>Email already registered.<a href='login.php'>Log In.</a></p>";

}else{
$query="INSERT INTO hotel_user_info(first_name,last_name,password,email,date_registered) VALUES('$first_name','$last_name',SHA('$password'),'$email',NOW()) ";
$result=mysqli_query($dbc,$query)or die('Error querying database.');
//$to=$email;
//$from="allan01bryan@gmail.com";
//$subject=$first_name." Verify your account.";
//$msg="<form action='verifying_account.php' method='get'><a href='verifying_account.php'><input type='hidden' name='email' value='.$email.'>Click this link to verify your account.Verify Account.</a></form>";
//mail($to,$subject,$msg,'From:'.$from);
echo "<p>Successfully registered.<a href='login.php'>Log In</a></p>";
echo "<p>Dont forget to verify your account sent to your email address.</p>";
}
}else{
  echo "<p>Please enter all Required.</p>";
  $output_form=true;
}

}else{

  $output_form=true;
}
if($output_form){
?>
<form class="form-group" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<div class="row">
<div class="col-sm-6">
  <p class="text">First Name:</p>
  <input type="text" name="first_name" placeholder="First Name" class="form-control inputs" required/>
</div>
<div class="col-sm-6">
  <p class="text">Last Name:</p>
  <input type="text" name="last_name" placeholder="Last Name" class="form-control inputs" required/>
</div>

</div>
<br/>

<div class="row">
<div class="col-sm-6">
  <p class="text">Email:</p>
  <input type="email" name="email" placeholder="name@example.com" class="form-control" required/>
   <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="col-sm-6">

<div class="password-group">
<p class="text">Password:</p>

<input type="password" name="password" class="form-control password" placeholder="Password" />
<i class="fas fa-eye" id="viewPassword"></i></div>



</div>

</div>
<div class="row submit-group">
<div class="col-sm-4">
<button type="submit" class="btn btn-warning" name="submit">Sign Up</button>
</div>
</div>
</form>
</div>

<?php
}

?>



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
<script>
 $(document).ready(function(){

let viewPassword=true;
$("#viewPassword").click(function(){
  if(viewPassword==false){
$(this).attr('class','fas fa-eye');
$('.password').attr('type','password');
viewPassword=true;
  }

 else if(viewPassword==true){
$(this).attr('class','fas fa-eye-slash');
$('.password').attr('type','text');
viewPassword=false;
  }

});
$('.inputs').mouseleave(function(){
  var inputValue=$(this).val();
var capitalize=inputValue.slice(0,1);
capitalize=capitalize.toUpperCase();
var normal=inputValue.slice(1,inputValue.length);
normal=normal.toLowerCase();
$(this).val(capitalize+normal);
});


});
</script>

  </body>
</html>