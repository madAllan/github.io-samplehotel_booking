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
  background-color:#fff;
  cursor: pointer;
  padding:10px 20px 9px 20px;
  border:1px solid #ff9a00; 
  border-radius: 5%;
}
.fa-search:hover{
background-color:#ff9a00;
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
  max-width: 350px;
  max-height: 350px;
  box-shadow: 10px 10px #ff9a00;
}
.show_more{
 
  color:blue;
  cursor:pointer;
}


#header{
  padding:0 0% 5%;
    position: relative;

}
.hotel_name{
  font-family: 'Satisfy', cursive;
  font-size:1.5rem;
}
.hotel_name:hover{
  color:#ff9a00;
}
.w-100{
  height: 38rem;
  background-size: cover;
}
#hotel_title{
margin-top: 60%;
}

#hotel_title,#popular{
  text-align: center;
margin-bottom: 5%;
}
.experience_text{
   font-family: 'Montserrat', sans-serif;
    color: #ff9a00;
    font-size: 3rem;
 
}
.most_popular{
   font-family: 'Montserrat', sans-serif;
    color: #ff9a00;
    font-size: 3rem;
    padding-top: 5%;
}

/************from playground************/
.explore-more{
position:absolute;
top:60%;
color:#fff;
left:15%;
display:block;
}
.travel-now{
position:absolute;
top:70%;
color:#fff;
left:15%;
display:block;
}

@media (min-width:360px) and (max-width:767px){
.explore-more{
padding:4px 6px;
font-size: 80%;
line-height: 1;
border-radius: 0px;
top:60%;
}
.travel-now{
padding:4px 6px;
font-size: 80%;
line-height: 1;
border-radius: 0px;
top:75%;
}
}



@media (max-width:359px){
.explore-more{
padding:2px 4px;
font-size: 40%;
line-height: 1;
border-radius: 0px;
top:60%;
}
.travel-now{
padding:2px 4px;
font-size: 40%;
line-height: 1;
border-radius: 0px;

top:70%;
}

}
@media (min-width:768px) and (max-width:1024px){
.explore-more{
padding:10px 12px;
font-size: 100%;
line-height: 1;
border-radius: 0px;
top:60%;
}
.travel-now{
padding:10px 12px;
font-size: 100%;
line-height: 1;
border-radius: 0px;

top:70%;
}
}
@media (min-width:1025px) and (max-width:1323px){
.explore-more{
padding:14px 16px;
font-size: 100%;
line-height: 1;
border-radius: 0px;
top:60%;
}
.travel-now{
padding:14px 16px;
font-size: 100%;
line-height: 1;
border-radius: 0px;
top:70%;
}


}
.video_header{
  padding:0 0;
  position: absolute;
  top:0;
}
/**********SHOW SEARCH **********/
/*.align-middle{
 position:absolute;
bottom:-75%;
  
  right:5%; 
top:105%;
  
}
.search_background{
background-color: #eee;
cursor: pointer;
max-width:365px;
}
.listing{
   padding:10px;
}
.listing-location{
padding: 0;
text-decoration: underline;
font-size:.75rem;
}
*/
/**********SHOW SEARCH **********/
/*@media (min-width:768px) and (max-width:1023px){
  .align-middle{
    position: absolute;
    left:0%;
  }
  .myform{
  position: relative;
}
.fa-search{
  position: absolute;
  right:10%;
  left:32%;
  cursor: pointer;
}
.search_background{
background-color: #eee;
cursor: pointer;
max-width:280px;
}
}
@media (min-width:321px) and (max-width:414px){

}
*/
@media (max-width:575px){
  .myform{
    position: relative;
  }
  .fa-search{
    position: absolute;
    right:5%;
    border:1px  solid #fff;
  }
}
.result-row{
  padding:5% 0;
}
.col-sm-5{
  position: relative;
}
.col-sm-5 img{
  position: absolute;
  top:0;
  bottom: 0;
  right: 0;
  left:0;
  margin:auto;
  box-shadow: 5px 10px #ff9a00;
}
.col-sm-7 .title{
color: #ff9a00;
font-weight: bold;
font-size: 1.2rem;

}
#showing .container a{
   text-decoration: none;
 color: gray; 
}
#showing .container a:hover{
  color:black;
  text-decoration: none;
}

</style>
    <title>HOME</title>
  </head>
  <body>

<!--COMMON CODES TO ALL EXCEPT LOGIN AND SIGN UP-->

<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="#"><i class="fas fa-hotel"></i></a>
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

<form class="form-inline my-2 my-lg-0 myform navbar-form">
<div class="input-group">
  <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2" id="search" list='datalist1'>
<datalist id="datalist1">

</datalist>
  <div class="input-group-append">
    <button class="btn btn-outline-secondary fas fa-search" type="button" id="button"></button>
  </div>
</div>
 
    </form>


    
  </div>
    




</nav>
<!--COMMON CODES TO ALL EXCEPT LOGIN AND SIGN UP END-->
<section id="showing">
<div class="container-fluid video_header">
<div id='header'>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
     <video src="videos/video1.mp4" class="embed-responsive" autoplay muted preload loop>

</video>
    </div>
    <div class="carousel-item">
     <video src="videos/video2.mp4" class="embed-responsive" autoplay muted preload loop>

</video>
    </div>
    <div class="carousel-item">
     <video src="videos/video3.mp4" class="embed-responsive" autoplay muted preload loop>

</video>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div><button type="button" class="btn btn-outline-warning btn-lg explore-more">Explore More</button></div>
<div><button type="button" class="btn btn-warning btn-lg travel-now">Travel Now</button></div>
</div>
 </div>
</section>
<section id="hotel_title">
<div class="container-fluid">
<h3 class="experience_text"> Experience Life</h3>
</div>
</section>





<div class="container">
<?php  
define('HOTEL_PICTURE','images/');



$query="SELECT * FROM hotel_table";
$result=mysqli_query($dbc,$query)or die('Error querying database.');
echo "<div class='row others'>";
$i=0;
while($row=mysqli_fetch_array($result)){
  $id=$row['id'];
$hotel_name=$row['hotel_name'];
$location=$row['location'];
$description=$row['description'];
$price=$row['price'];
$picture=$row['picture'];
$ratings=$row['ratings'];
$picture_file=HOTEL_PICTURE.$picture;

if($i%2==0){
  echo "<div class='col-md-6'>";
echo "<div data-aos='fade-right'>";
echo "<a class='hotel_name' id='".$id."' href='hotel_info.php?id=".$id."&amp;hotel_name=".$hotel_name."&amp;location=".$location."&amp;description=".$description."&amp;price=".$price."&amp;picture=".$picture."&amp;picture_file=".$picture_file."&amp;ratings=".$ratings."'><b >".$hotel_name."</b></a>";
echo "<p>".$location."</p>";
echo "<p>".substr($description,0,75)."<span class='show_more' id='".$id."'>.See more..</span></p>";
echo "<p>".$price."</p>";
echo "<img src='".$picture_file."' class='picture_size'/>";
echo "</div><br/>";
echo "<div class='num_of_clicks'>".$row['num_Click']." Views</div>";
echo "</div>";
}else{
     echo "<div class='col-md-6'>";
echo "<div data-aos='fade-left'>";
echo "<a class='hotel_name' id='".$id."' href='hotel_info.php?id=".$id."&amp;hotel_name=".$hotel_name."&amp;location=".$location."&amp;description=".$description."&amp;price=".$price."&amp;picture=".$picture."&amp;picture_file=".$picture_file."&amp;ratings=".$ratings."'><b >".$hotel_name."</b></a>";
echo "<p>".$location."</p>";
echo "<p>".substr($description,0,75)."<span class='show_more' id='".$id."'>.See more..</span></p>";
echo "<p>".$price."</p>";
echo "<img src='".$picture_file."' class='picture_size'/>";
echo "</div><br/>";
echo "<div class='num_of_clicks'>".$row['num_Click']." Views</div>";
echo "</div>";
}



$i++;
}
echo "</div>";

?>

</div>
<section id="popular">
<div class="container-fluid">
  <h4 class="most_popular">Most Popular:</h4>
<div class="row">
<div class="col-md-3">


</div>
<div class="col-md-3">


</div>
<div class="col-md-3">


</div>
<div class="col-md-3">


</div>


</div>
</div>
</section>
<section id="testimony">


</section>

<section id="famous_brand_says">

</section>
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
  var show=false;
  $('.show_more').click(function(){
    if(show==false){
var id=$(this);
var user_id=id.attr('id');

$.post('show_more.php',{id:user_id},function(data){
  $('.show_search').fadeIn();
$(id).html(data);
});



   // $(this).html('.why');
    show=true;
    }
    else if(show==true){
  $(this).html('.See more..');
    show=false;
    }

  });
});

$('.hotel_name').click(function(){
var hotelName=$(this).text();
var hotelId=$(this).attr('id');
$.post('count_clicks.php',{hotelName:hotelName,hotelId:hotelId},function(data){

});

});

</script>

<!-- Script for Search bar-->
<script>
var searchVal=document.querySelector('#search');
searchVal.addEventListener('keyup',search_now);


function search_now(){
var final_word=searchVal.value;
if(final_word!='' || typeof(final_word)!=='undefined'){
console.log(final_word);
 
$.post('search_word.php',{final_word:final_word},function(data){
    
$('#showing').html(data);


});


}
}

</script>
<!-- Script for Search bar END-->

  </body>
</html>