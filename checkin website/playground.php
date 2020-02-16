<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link href='star-rating-svg.css' rel='stylesheet' />
<style>
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
#header{
  position: relative;
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
/**********FROM CODEPLY*********/


.fa-star{
    color:yellow;
    transition:.5s;
}
.fa-star:hover{
    color:red;
    transition:.5s;
}
/*
.fa-star:after{
    color:yellow;
}
*/
</style>

    <title>Hello, world!</title>
  </head>
  <body>

<!--FROM CODEPLY-->
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<p></p>
<!--End-->







<span class="my-rating-9"></span>
<br/>
<p class="live-rating"></p>

<br/>
<br/>
<section>
<div class="container-fluid">
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
 
</section>



<br/>
<section>

<form action="showshow.php" method="post" class="form-group">

<input type="file" onchange="previewFile()" accept='image/*' class='form-control'/>
<img src="" height="300px" width="450px"alt="image Preview" class='img-responsive' style="display:none;"/>

<p class='showagain'></p>
<br/>
<br/>
<button type="button" class='btn btn-warning'>Upload</button>
</form>
</section>

<section style="background-color:#88304e;margin:5% 20%;border-radius: 5px;position:fixed;top:3%;left:5%;width:50%;padding:0;">
  <div class="container-fluid">
<div class='row'>
  <div class='col-sm-3'>
<img src='images/unverified.png' style="max-width:100px;max-height:70px;" />
</div>
<div class='col-sm-8'>
<h3 style="font-size:1rem;color:#fff;margin:0; ">Show Now</h3>
<a href='peachbuilderco.com' style="font-size: .75rem;color:#fff;">Go to the peachbuilderco.com</a>
  </div>
  <div class='col-sm-1'>
    <b style="font-size:1rem;color:#fff;margin:0;position:absolute;padding-top:10px">></b></div>
</div>
</div>
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='jquery.star-rating-svg.js'></script>
<script>

  $(".my-rating-9").starRating({
    initialRating: 5,
    disableAfterRate: false,
    onHover: function(currentIndex, currentRating, $el){
      $('.live-rating').text(currentIndex);
    },
    onLeave: function(currentIndex, currentRating, $el){
      $('.live-rating').text(currentRating);
      $(currentRating)
    }
  });
</script>
<script>
function previewFile(){
  var preview=document.querySelector('img');
  var file=document.querySelector('input[type=file]').files[0];
  var reader=new FileReader();
  reader.addEventListener('load',function(){
    preview.src=reader.result;
    preview.style.display="";
  });
if(file){
  reader.readAsDataURL(file);
}

}


</script>
<script>

$(document).ready(function(){
    $('p').html('Success');
    
    
   // $('.fa-star').mouseenter(function(){
//     var focuses=$(this);
  // focuses.css({'color':'yellow'});
   //focuses.prevAll().css({'color':'yellow'});     
  
//});  
    
  
 $('.fa-star').click(function(){
     var focuses=$(this);
   focuses.css({'color':'red'});
   focuses.nextAll().css({'color':'yellow'});
   focuses.prevAll().css({'color':'red'});     
  
}); 
     
     
     //else{
       //  focuses.css({'color':'yellow'});
        // show=true;
     
   
 
});

</script>



  </body>
</html>