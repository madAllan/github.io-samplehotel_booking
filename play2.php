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
<style>
#star-inner{
  position:absolute;
  top:0;
 
  overflow: hidden;
  white-space: nowrap;
  left:0;
}
.star-outer{
  position: relative;
  display: inline-block;
}

#star-inner::before{
content:"\f005 \f005 \f005 \f005 \f005";
font-family: "Font Awesome 5 Free";
font-weight: 900;
color:yellow;
}
.star-outer::before{
  content:"\f005 \f005 \f005 \f005 \f005";
  font-weight: 900;
  font-family: "Font Awesome 5 Free";
  color:#ccc;
}
.rate_me{
  text-decoration: underline;
  color:blue;
  font-size: .75rem;
  cursor: pointer;
}
.fa-star{
color:#ccc;
transition-duration: 1s;
}
/*.modal-body::before{
  content:"\f005 \f005 \f005 \f005 \f005";
  font-weight: 900;
  font-family: "Font Awesome 5 Free";
  color:#ccc;
}

.modal-body{
color:yellow;
transition-duration: 2s;
}

.modal-body:hover{
  color:red;
}
*/
/*.fa-search{
	position: absolute;
	top:0%;
	background-color: #ff9a00;
	padding: 5% 7% 5% 7%;
}
*/
.input-group-btn{
background-color: gray;
border-radius:0 5px 5px 0;
}


</style>

    <title>Playground 2</title>
  </head>
  <body>

<section>
<div class="container">
<form action="" class="navbar-form">
<div class="form-group input-group col-sm-4">
<input type="text" placeholder="Search here" name="search" id="search" list="datalist1" class="form-control">
<datalist id='datalist1'>
<option  value="red">
<option  value="pink">	
<option  value="violet">
<option  value="blue">
<option  value="yellow">
<option  value="green">

</datalist>

<div class="input-group-btn">
	<button type="button" class="btn btn-default"><i class="fas fa-search"></i></button>
</div>
</div>
</form>
</div>
</section>



<div class="container mt-5">
<div class="star-outer">
<span id="star-inner">
</span>
</div>
<span class="rating"></span>
<span class="rate_me">Rate me</span>
<span class="show_num_clicks"></span>
<section>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-modal" style="display:none;" data-toggle="modal" data-target="#exampleModal">
Rate Me
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rate Me</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <i class="fas fa-star"><b>1</b></i>
        <i class="fas fa-star"><b>2</b></i>
        <i class="fas fa-star"><b>3</b></i>
        <i class="fas fa-star"><b>4</b></i>
        <i class="fas fa-star"><b>5</b></i>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary save-changes" onclick="show_num_clicks();">Save changes</button>
      </div>
    </div>
  </div>
</div>
</section>
<!--<embed src="Game_of_Business_Paul_Gorman.pdf" width="400px" height="600px" />-->
</div>

<div class="container-fluid">
<div class="row">
	<div class="col-sm-4">
	<input type="search" name="search" class="form-control mr-sm-2" placeholder="Search"></div>
<div class="col-sm-2">
	 <i class="fas fa-search search_icon"></i></div>

	<div class="col-sm-6"></div>

</div>
<div class="result"></div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<ul>
<li class='optioning'>allan</li>
<li class='optioning'>tyron</li>
<li class='optioning'>vanessa</li>
<li class='optioning'>xtian</li>
<li class='optioning'>mj</li>
</ul>
<input type="text" id="getcolors" list='colors' />
<datalist id="colors">
<option value="red">red</option>
<option value="blue">blue</option>
<option value="black">black</option>
<option value="gray">gray</option>
<option value="green">green</option>
</datalist>

<span id="spanresult"></span>

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
var getValue=document.querySelector('#getcolors');
getValue.addEventListener('input',function(){
document.getElementById('spanresult').innerHTML="The selected value of the datalist is "+this.value;

});


</script>


<script>

$('b').hide();


document.addEventListener('DOMContentLoaded',show_stars);
var starInner=document.querySelector('#star-inner');
var starOuter=document.querySelector('.star-outer');
var rate_me=document.querySelector('.rate_me');
rate_me.addEventListener('click',show_modal);


function show_modal(){
$('.btn-modal').click();
}

var old_value=3.2;

var defaultval;

//number of reviews
var default_num_clicks=4;
document.querySelector('.show_num_clicks').innerHTML=default_num_clicks+ " Reviews";

var cnt=default_num_clicks;

function show_num_clicks(){
cnt=parseInt(cnt) + parseInt(1);
document.querySelector('.show_num_clicks').innerHTML=cnt+" Reviews";
}


function show_stars(){
//function of on ratings

if(defaultval==="" || typeof(defaultval)==="undefined"){
defaultval=3.2;
}


//console.log(defaultval);

var defaultValue=(defaultval/5)*100;
var percentageValue=Math.round(defaultValue/10)*10+"%";
starInner.style.width=percentageValue;
var rating=document.querySelector('.rating');
rating.innerHTML=defaultval;



}
$('.fa-star').mouseenter(function(){
  var active=$(this);
  $(this).css({"color":"red"});
  $(this).prevAll().css({"color":"red"});
  $(this).nextAll().css({"color":"#ccc"});

 $('.save-changes').click(function(){
defaultval=active.text();


var defaultValue=(defaultval/5)*100;
var percentageValue=Math.round(defaultValue/10)*10+"%";
starInner.style.width=percentageValue;
var rating=document.querySelector('.rating');
rating.innerHTML=defaultval;



console.log(parseFloat(defaultval)+4);
//console.log(typeof(defaultval));
defaultval=(parseFloat(defaultval)+old_value)/2;
show_stars(defaultval);

 }); 
});





$('.optioning').click(function(){
console.log(this);
});
var resulting=$('.optionValue').attr('value');
$(resulting).click(function(){
	console.log(this);
});



$('#search').keyup(function(){

var searchVal=$('#search').val();
if(searchVal==="") {
console.log('error');
}else{
	console.log(searchVal);
	
}
});




</script>
  </body>
</html>