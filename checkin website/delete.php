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
<style>
.picture{
  max-width: 250px;
  max-height: 250px;
}
.button{
  padding:25px 0;
}

</style>

    <title>delete page</title>
  </head>
  <body>

<div class="container-fluid">

  <form action="delete.php" method="post">
<?php   
define('HOTEL_PICTURE','images/');

if(isset($_POST['submit'])){
if(!empty($_POST['delete'])){

foreach($_POST['delete'] as $delete_id){
$query="DELETE FROM hotel_table WHERE id='$delete_id'";
$result=mysqli_query($dbc,$query)or die('Error deleting items.');
echo "<p>Successfully deleted ".$delete_id.".</p>";
header('Location:delete.php');

}
}else{
  echo "Empty Items.";
  show();
}
}else{
  show();
}
function show(){

$query="SELECT * FROM hotel_table";
$result=mysqli_query($dbc,$query)or die('Error querying database.');
echo "<h3>Check to delete.</h3>";
while($row=mysqli_fetch_array($result)){
  echo "<input type='checkbox' name='delete[]' value='".$row['id']."'/>";
  echo "<b>".$row['id']." ".$row['hotel_name']."</b>";
echo "<p>".$row['description']."</p>";
echo "<p>".$row['price']."</p>"; 
echo "<img src='".HOTEL_PICTURE.$row['picture']."' class='picture'/><br/>";

}

}


?>


  <div class='button'><button type='submit' name='submit' class='btn btn-dark'>Delete</button>
  </div></form>






</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>