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
<link href="style.css" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat|Satisfy" rel="stylesheet">
    <link href='star-rating-svg.css' rel='stylesheet' />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

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
.picture_size{
box-shadow: 10px 10px #ff9a00;
}
body{
  background-color: #f6f6f6;
  font-family: 'Montserrat', sans-serif;
}
.hotel_name{
  font-family: 'Satisfy', cursive;
  font-size:1.7rem;
   color:#ff9a00;
   padding-top: 5%;
   line-height: 1rem;
}
.book_info{
    text-align: center;
}

.booking_title{
  padding-top: 50%;
  font-size:1.5rem;
   color:#ff9a00;
}
.description{
padding-top: 5%;
}
.start_date,.end_date{
  font-size: .5rem;
}
.number_of_days,.price{
 font-size: .8rem;
 text-align: left;
}
.days{
  padding-top: 5%;
}
.location{
	line-height: .8rem;
	margin-bottom: .25rem;
	margin-top: 1.2rem;
}
.price_fixed{
	padding-top:0;
}
.price_num{
	font-size: .70rem;
}
.current_ratings{

}
.rate_me{
	font-size: .80rem;
	text-decoration: underline;
	color:blue;
	cursor:pointer;

}
/**********STYLES FOR MODAL***********/

.fa-star{
position: relative;
left:40px;
color:#CCC;
transition-duration: 1s;
}
.num_val{
position: absolute;
margin-left:-20px;
}

/**********STYLES FOR MODAL END***********/

/***********STAR RATINGS************/
.outer-star{
position: relative;
display:inline-block;
}
.inner-star{
position:absolute;
  top:0;
 
  overflow: hidden;
  white-space: nowrap;
  left:0;
}
.outer-star::before{

  content:"\f005 \f005 \f005 \f005 \f005 ";
  font-family: "Font Awesome 5 Free";
  color:#ccc;
  font-weight: 900;

}
.inner-star::before{
 
  content:"\f005 \f005 \f005 \f005 \f005 ";
  font-family: "Font Awesome 5 Free";
  color:blue;
  font-weight: 900;
  
}

/***********STAR RATINGS END***********/


</style>



    <title><?php echo $_GET['hotel_name']; ?></title>

  </head>
  <body>
<!--COMMON CODES TO ALL EXCEPT LOGIN AND SIGN UP-->

<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="index.php"><i class="fas fa-hotel"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="navbar-toggler-icon fas fa-bars"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <?php
if(isset($_SESSION['id']) && isset($_SESSION['first_name'])){
?>
<ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="host_house.php">Host a House</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewprofile.php">View Profile</a>
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


<div class="container">

<div class="row">
<?php   
define('HOTEL_PICTURE','images/');





if(isset($_GET['id'])){
$id=$_GET['id'];
$hotel_name=$_GET['hotel_name'];
$location=$_GET['location'];
$description=$_GET['description'];
$price=$_GET['price'];
$picture=$_GET['picture'];
$picture_file=HOTEL_PICTURE.$picture;


$query2="SELECT ratings FROM hotel_table WHERE id='$id'";
$result2=mysqli_query($dbc,$query2)or die('Error second query.');
$row=mysqli_fetch_array($result2);

echo "<div class='col-md-8'>";
 echo "<div data-aos='fade-left'>";
echo "<span class='hotel_id'>".$id."</span>";
echo "<p class='hotel_name'>".$hotel_name."</p>";
echo "<p class='location'>".$location."</p>";
echo "<span class='price_fixed'><del>P</del> ".$price." /Night</span>";

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ratings:<div class='outer-star'><span class='inner-star'></span></div>";
 echo "<span class='current_ratings'>".$row['ratings']."</span>";


// Button trigger modal
echo '<button type="button" class=" rate_me btn btn-sm" data-toggle="modal" data-target="#exampleModal">
 Rate me 
</button>';
echo "<span class='people_rated'></span>";

echo "<img src='".$picture_file."' class='picture_size img-fluid'/>";
echo "<p class='description'>".$description."</p>";


echo "</div><br/>";
echo "</div>";



}
?>
<div class="col-md-4">
  <div class="book_info">
<p class='booking_title'>Book info:</p>
<form class="form-group" method="get" >
<div class="row">
  <div class='col-sm-6'>
    <p>Start Date:</p>
<input type='date' class='form-control start_date' name="start_date"/>
</div>
 <div class='col-sm-6'>
    <p>End Date:</p>
<input type='date' class='form-control end_date' name="end_date"/>
</div></div>
<div class="row days">
<div class="col-sm-6">
<p class='number_of_days'># of days: <span class='num' name="number_of_days"></span></p>
</div>
<div class="col-sm-6">
  <p class="price">Price:<del> P</del> <span name="price" class='price_num' id='<?php echo $price;?>'></span></p>
  </div>
</div>
</form>
</div>

</div>
</div>
</div>
<!--MODAL TO RATE -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <i class="fas fa-star"><b class='num_val'>1</b></i>
        <i class="fas fa-star"><b class='num_val'>2</b></i>
        <i class="fas fa-star"><b class='num_val'>3</b></i>
        <i class="fas fa-star"><b class='num_val'>4</b></i>
        <i class="fas fa-star"><b class='num_val'>5</b></i>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary save-changes">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--MODAL TO RATE END-->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script>
$(document).ready(function(){

$('.end_date').mouseleave(show_num);
$('.start_date').mouseleave(show_num);

function show_num(){
var start_date=new Date($('.start_date').val());
	var end_date=new Date($('.end_date').val());
	var dif=(end_date - start_date)/86400000;
if(end_date>start_date){
$('.num').html(dif);
var price_num=$('.price_num').attr('id');


	var total=$('.price_num').html(price_num * dif);
	total.append(".00");
}else{
	$('.price_num').html('');
	$('.num').html('');
}
}
});
</script>

<!-- SCRIPT FOR RATINGS-->
<script>
  var hotelId=document.querySelector('.hotel_id').innerHTML;
  console.log(hotelId);
var star_value;
var star_inner_width;
star_inner_width=document.querySelector('.inner-star');
var star_percentage;
var default_val=$('.current_ratings').html();
$('.fa-star').mouseenter(function(){
  $(this).css({"color":"red"});
  $(this).prevAll().css({'color':'red'});
  $(this).nextAll().css({'color':'#ccc'});

var star_rating=$(this).text();


//console.log(star_percentage);


$('.save-changes').click(function(){



var average_star=(parseInt(star_rating)+parseFloat(default_val))/2;
average_star=average_star.toFixed(1);
console.log(average_star);
$.post('change_ratings.php',{average_star:average_star,hotelId:hotelId},function(data){

});
$('.current_ratings').html(average_star);

average_star=Math.round((average_star/5)*10)*10;

average_star=average_star.toFixed(1);

average_star=average_star+"%";

//console.log(average_star);

star_inner_width.style.width=average_star;


});



});

//Default STAR RATING

star_percentage=Math.round((parseFloat(default_val)/5)*10)*10+"%";
console.log(star_percentage);
star_inner_width.style.width=star_percentage;
//console.log(default_val);

</script>

  </body>
</html>