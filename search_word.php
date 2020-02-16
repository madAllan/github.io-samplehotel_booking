<?php
require_once('start_connect.php');
define('HOTEL_PICTURE','images/');
?>

<?php
echo "<div class='container'>";
if(!empty($_POST['final_word'])){
$user_search=$_POST['final_word'];
$clean_search=str_replace(',',' ',$user_search);
$search_words=explode(' ',$clean_search);
$final_search_words=array();
if(count($search_words) > 0){
foreach($search_words as $word){
	if(!empty($word)){
$final_search_words[]=$word;
}
}
}
$where_list=array();
if(count($final_search_words) > 0){
foreach($final_search_words as $word){
$where_list[]="hotel_name LIKE '%$word%'";
}
}
$where_clause=implode(' OR ',$where_list);
if(!empty($where_clause)){
$query="SELECT * FROM hotel_table WHERE $where_clause";
}
$result=mysqli_query($dbc,$query)or die('Error querying database.');
if(mysqli_num_rows($result) > 0){
while($row=mysqli_fetch_array($result)){
echo "<a href='#'><div class='row result-row'><div class='col-sm-5'><img src='".HOTEL_PICTURE.$row['picture']."' class='img-fluid'></div>";
echo "<div class='col-sm-7'><p class='title'>".$row['hotel_name']."</p><p class=''description>".$row['description']."</p></div></div></a>";
}
}


}
echo "</div>";
?>

<!--



//$output="";

//$query="SELECT * FROM hotel_table WHERE hotel_name LIKE '%".$user_search."%'";
//$result=mysqli_query($dbc,$query)or die('Error querying database.');

//if(mysqli_num_rows($result)>0){
//while($row=mysqli_fetch_array($result)){
//$output.="<option value='".$row['hotel_name']."'>";
//}

//}

//else{
//$output.="<option value='Not found'>";
//}
//echo $output;
//}else{
//	echo  "Error";
//}
-->