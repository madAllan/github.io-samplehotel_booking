<?php
require_once('session_code.php');
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
/*********COMMON STYLES TO ALL EXCEPT LOGIN AND SIGN UP***********/
.container{
  text-align: center;
}

body{
  background-color: #f6f6f6;
  font-family: 'Montserrat', sans-serif;
}


.navbar{
  z-index: 2;
}
.nav-link{
   color: #ff9a00;
   font-size: .75rem;
}
.search{
font-size: .75rem;
}
.fa-bars{
  z-index: 3;
  color: #ff9a00;
  padding-top:25%;
}
.fa-search{
  position: absolute;
  right:10%;
  cursor: pointer;
}
.myform{
  position: relative;
}
.active,.nav-link:hover{
border:1px solid #ff9a00;
border-radius: 5%;
font-weight: bold;
color:#303a52;
}
/*********COMMON STYLES TO ALL EXCEPT LOGIN AND SIGN UP END***********/
.container-fluid{
text-align: left;
padding:5% 10%;
}
.profile-group{
padding-left: 7.5%;

}
.card-text{
font-size: .75rem;
}
.card-body{
  padding:1% 3%;
}
.card-title{
margin-bottom:3%; 
}
.description-group{
font-size: .85rem;
}
.wrapper-button{
padding:0;
}
.card-img-top{
  height:290px;
}
.change{
position: absolute;
left:35%;
top:45%;
}
.yes{
position: absolute;
left:30%;
top:55%;
border-bottom:1px solid #ff9a00;
}
.no{
position: absolute;
left:60%;
top:55%;
border-bottom:1px solid #ff9a00;
}
.yes:hover,.no:hover{
   color:#ff9a00;
}
.upload_proflie_pic{

display: none;
}

</style>
    <title>HOME</title>
  </head>
  <body>

<!--COMMON CODES TO ALL EXCEPT LOGIN AND SIGN UP-->

<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="navbar-toggler-icon fas fa-bars"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <?php
if(isset($_SESSION['id']) && isset($_SESSION['first_name'])){
?>
<ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="host_house.php">Host a House</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="viewprofile.php">View Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout(<?php echo $_SESSION['first_name'];?>)</a>
      </li>
    </ul>

<?php
}else{
  ?>
  <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="host_house.php">Host a House</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Log In</a>
      </li>
    </ul>
  <?php
}
  ?>
<form class="form-inline my-2 my-lg-0 myform">
     <input class="form-control mr-sm-2 search" type="search" placeholder="Search" aria-label="Search">
      <i class="fas fa-search"></i>
    </form>
  </div>
</nav>
<!--COMMON CODES TO ALL EXCEPT LOGIN AND SIGN UP END-->

<div class="container-fluid">
<?php



if(!isset($_SESSION['id'])){
  header('Location:index.php');
}else{
$query="SELECT * FROM hotel_user_info WHERE id='".$_SESSION['id']."'";
$result=mysqli_query($dbc,$query)or die('Error querying database.');
$row=mysqli_fetch_array($result);
?>

<section id="info">
<div class="row">
<div class="col-md-4 profile-group">
  <button class='wrapper-button'>
   <form enctype='multipart/form-data' method="post" action="showshow.php">
    <input type="file" name="prof_pic_upload" accept="image/*" onchange="loadFile();" class="prof_pic_upload" style='display: none;'/>
<div class="card" style="max-width: 12rem;">

<p class="change">Change?</p>
<p class="yes" >Yes</p>
<p class="no" >No</p>
<input type="submit" name="submit" class='upload_proflie_pic' value="upload"/>
</form>
<?php 
define('HOTEL_PICTURE','images/');

$picture_file=HOTEL_PICTURE.$row['profile_picture'];
if(isset($row['profile_picture'])){

echo "<img src='".$picture_file."' class='card-img-top' />";
}else{
   echo "<img src='images/unverified.png' class='card-img-top' />";
}
?>
  
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['first_name']." ".$row['last_name']; ?></h5>
    <p class="card-text">Some quick example text to build.</p>
  </div>
</div>
</button>
</div>
<div class="col-md-6 description-group">
  <p class="what" id="okay">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nu. </p>
</div>
</div>
</section>

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

<script>
var preview=document.querySelector('.card-img-top');
   $(preview).click(function(){
      $('input[type=file]').click();
   });

 function loadFile(){
   
   var imagefile=document.querySelector('input[type=file]').files[0];
   var reader=new FileReader();
   reader.addEventListener('load',function(){
      preview.src=reader.result;
      preview.style.display='';
      $('.upload_proflie_pic').click();

   });
if(imagefile){
   reader.readAsDataURL(imagefile);
}

}
$('.no').click(function(){
   $('.change,.no,.yes').hide();

});
$('.yes').click(function(){
    $('input[type=file]').click();
});

</script>
  </body>
</html>