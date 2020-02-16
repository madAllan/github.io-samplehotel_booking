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
.stars-outer{
  position:relative;
  display:inline-block;
}
.stars-inner{
  position:absolute;
  top:0;
  left:0;
  white-space: nowrap;
  overflow:hidden;
  width:0;
}
.stars-outer::before{
content: "\f005 \f005 \f005 \f005 \f005";
font-family:"Font Awesome 5 Free";
font-weight: 900;
color:#ccc;
}
.stars-inner::before{
content: "\f005 \f005 \f005 \f005 \f005";
font-family:"Font Awesome 5 Free";
font-weight: 900;
color:#f8ce0b;
}
.trial::before{
content: "\f005 \f005 \f005 \f005 \f005";
font-family:"Font Awesome 5 Free";
font-weight: 900;
color:#f8ce0b;
}
</style>

    <title>Playground 2</title>
  </head>
  <body>

<div class="container mt-5">
<div class="form-group">
<select id="product-select" class="form-control custom-select">
<option value="0" disabled selected>Select Product</option>
<option value="sony">Sony 4K TV</option>
<option value="samsung">Samsung 4K TV</option>
<option value="vizio">Vizio 4K TV</option>
<option value="panasonic">Panasonic 4K TV</option>
<option value="phillips">Phillips 4K TV</option>
</select>
</div>
<div class="form-group">
<input type="number" id="rating-control" class="form-control" placeholder="Rate 1-5" step="0.1" max="5" min="0.1" disabled />

</div>
<table class="table table-striped">
<thead>
  <tr>
    <th>4K Television</th>
    <th>Rating</th>
  </tr>
</thead>
<tbody>
<tr class="sony">
<td>Sony 4K TV</td>
<td>
  <div class="stars-outer">
  <div class="stars-inner"></div>
  </div>
  <span class="number-rating"></span>
</td>
</tr>
<tr class="samsung">
<td>Samsung 4K TV</td>
<td>
  <div class="stars-outer">
  <div class="stars-inner"></div>
  </div>
  <span class="number-rating"></span>
</td>
</tr>
<tr class="vizio">
<td>Vizio 4K TV</td>
<td>
  <div class="stars-outer">
  <div class="stars-inner"></div>
  </div>
  <span class="number-rating"></span>
</td>
</tr>
<tr class="panasonic">
<td>Panasonic 4K TV</td>
<td>
  <div class="stars-outer">
  <div class="stars-inner"></div>
  </div>
  <span class="number-rating"></span>
</td>
</tr>
<tr class="phillips">
<td>Phillips 4K TV</td>
<td>
  <div class="stars-outer">
  <div class="stars-inner"></div>
  </div>
  <span class="number-rating"></span>
</td>
</tr>

</tbody>
</table>


</div>




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
//initial ratings
const ratings={
sony:4.6,
samsung:3.4,
vizio:2.4,
panasonic:3.6,
phillips:4.1
}
//Total Stars
const starsTotal=5;
//Run getRatings() when DOM loads
document.addEventListener('DOMContentLoaded',getRatings);
//Forms Elements
const productSelect=document.querySelector("#product-select");
const ratingControl=document.querySelector("#rating-control");

//Init Product
let product;
productSelect.addEventListener('change',function(e){
product=e.target.value;

//Enable rating control
ratingControl.disabled=false;
ratingControl.value=ratings[product];
});
ratingControl.addEventListener('blur',function(e){
const rating=e.target.value;

//Check if value under 5
if(rating>5){
alert('Please Rate 1 - 5 only.');
return;
}
//Change ratings
ratings[product]=rating;
getRatings();


});

//Get ratings
function getRatings(){
for(let rating in ratings){
//Get percentage value
const starPercentage=(ratings[rating]/starsTotal)*100;
//Round to the nearest 10
const starPercentageRounded=Math.round(starPercentage/10)*10+"%";
//Set width of stars-inner to percentage

const text="."+rating+" .stars-inner";
document.querySelector(text).style.width=starPercentageRounded;
document.querySelector("."+rating+" .number-rating").innerHTML=ratings[rating];
}
}





</script>
  </body>
</html>