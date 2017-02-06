<?php
require_once('config.php');
require_once('error_handler.php');
require_once('News.php');


$news = new myblog();
$c = '';
$result = $news->GetCategory();
while ($row = mysqli_fetch_array($result)){
	
		$c .='<option>'.$row['category_name'].'</option>';
	}
//Getting a category id
//$message = '';
//$headline = $article = $image = $sub_category = $userid = $category = "";
//$Errheadline = $Errarticle = $Errimage = $Errsub_category = $Erruserid = $Errcategory = "";

if(isset($_POST['post'])){
	
	   $headline = $_POST['headline'];
       $article = $_POST['message'];
       $image =  $_FILES['image']['name'];
   	   $category = $_POST['category'];
       $category = $news->getSubID($category);
       $summary = $_POST['summary'];
    	
    $btn = "submit";
	$news->post($article,$image,$headline,$summary, $category,$btn);
	
    
}

?>