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
<link href="style.css" rel="stylesheet" type="text/css" />
    <title>admin page</title>
  </head>
  <body>
    <div class="container" id="upload_file">


<?php   
define('HOTEL_PICTURE','images/');

$output_form=false;
if(isset($_POST['submit'])){
$hotel_name=mysqli_real_escape_string($dbc,trim($_POST['hotel_name']));
$price=mysqli_real_escape_string($dbc,trim($_POST['price']));
$hotel_location=mysqli_real_escape_string($dbc,trim($_POST['hotel_location']));
$description=mysqli_real_escape_string($dbc,substr(trim($_POST['description']),0,350));

$picture=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_size=$_FILES['picture']['size'];
  


  if(!empty($hotel_name) && !empty($price) && is_numeric($price) && !empty($hotel_location) && !empty($picture) && !empty($description) && (($picture_type=='image/png') || ($picture_type=='image/jpg') || ($picture_type=='image/jpeg') || ($picture_type=='image/gif')) && $picture_size< 6000000){
  $target=HOTEL_PICTURE.$picture; 
if(move_uploaded_file($_FILES['picture']['tmp_name'],$target)){
  $query="INSERT INTO hotel_table(hotel_name,location,description,price,date_submitted,picture) VALUES('$hotel_name','$hotel_location','$description','$price',NOW(),'$picture')";
  $result=mysqli_query($dbc,$query)or die('Error querying database.');
  echo "<p>Successfully added hotel.<a href='admin.php'>Go back.</a></p>";
  echo "<img src='".$target."' class='img-fluid' style='max-width:550px;max-height:500px;'/>";
  $hotel_name='';
 $hotel_location='';
  $price='';
   $description='';
 

  
}

else{
  echo "<p>shit needed.</p>";
$output_form=true;
}
}else{
  echo "<p>Please enter all information needed.</p>";
$output_form=true;
}
}else{
  $output_form=true;
}
if($output_form){
 
 ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-group" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-sm-6">
<p>Enter Hotel name:</p>
<input type="text" class="form-control" name="hotel_name" value="<?php if(!empty($hotel_name))echo $hotel_name; ?>" required/>
</div>
<div class="col-sm-6">
  <p>Price per night:</p>
<input type="text" class="form-control" name="price" placeholder="P 00.00" value="<?php if(!empty($price))echo $price; ?>" required/>
</div>
</div>
<p>Location of Hotel:</p>
<input type="text" class="form-control" name="hotel_location" value="<?php if(!empty($hotel_location))echo $hotel_location; ?>" required/>
<p>Description:</p>
<textarea name="description" class="form-control" required>
<?php if(!empty($description))echo $description; ?>
</textarea>
<br/>
<input type="file" name="picture" class="form-control-file" accept="image/*" required/>
<button type="submit" name="submit" class="btn btn-warning" style="float:right;">Submit</button>
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
  </body>
</html>