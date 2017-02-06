<?php
require_once('config.php');
require_once('error_handler.php');
class myblog{
	
   private $mysqli;
   public function __construct(){
		
		$this->mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
		}
   public function __destruct(){
		
		$this->mysqli->close();
		}

	public function editCat($id){
	   
	    $id = $this ->mysqli->real_escape_string($id);
		$query = "SELECT category_name FROM category WHERE catid='$id'";
        $res = $this->mysqli->query($query);
        
        while($row = mysqli_fetch_array($res)){
            $cat = $row['category_name'];
        }
		return $cat;
	} 
    public function getNewsID($newsID){
        
        $newsID = $this ->mysqli->real_escape_string($newsID);
        $query = "SELECT headline, post, image, posted_on FROM myblog
                    WHERE bid =".$newsID;
                    
       $result = $this->mysqli->query($query);
       return $result;  
    }
     public function getTopNews($id){
        
        $id = $this ->mysqli->real_escape_string($id);
        $query = "SELECT myblog.bid, myblog.headline, myblog.image, myblog.posted_on, category.category_name
                  FROM myblog INNER JOIN category ON myblog.catid = category.catid 
                  WHERE  category.catid = $id ORDER BY myblog.posted_on
                  DESC LIMIT 4";
                  
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function deletemyblog($id){
       
       $id = $this ->mysqli->real_escape_string($id);
        $query = "Delete FROM myblog
                WHERE nid IN ($id)";
        $result = $this->mysqli->query($query);
        return $result;
    }
 
	//Populating dropdown sub category
	public function GetCategory(){
		$query = "SELECT category_name FROM category 
                  ORDER BY category_name ASC";
		$result = $this->mysqli->query($query);
        return $result;
		
		}
	
	//Getting a sub category id 
	public function getSubID($catid){  
		
        $catid = $this ->mysqli->real_escape_string($catid);
		$q = "SELECT catid FROM category WHERE category_name ='$catid'";
        $result = $this->mysqli->query($q);

        while($row = mysqli_fetch_array($result)){
            $catid = $row['catid'];
        }
		return $catid;
	}
    
    //Getting a  category id 
	public function getID($nid){  
		$nid = $this ->mysqli->real_escape_string($nid);
		$q = "SELECT catid FROM myblog WHERE bid ='$nid'";
        $result = $this->mysqli->query($q);

        while($row = mysqli_fetch_array($result)){
            $pid = $row['catid'];
        }
		return $pid;
	}
    public function getTopmyblog($id){
        
        $id = $this ->mysqli->real_escape_string($id);
        $query = "SELECT myblog.nid, myblog.headline, myblog.image,myblog.posted_on,category.category_name
                  FROM myblog INNER JOIN category ON myblog.catid = category.catid 
                  WHERE  category.catid = $id ORDER BY myblog.posted_on
                  DESC LIMIT 4";
                  
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function tobEidted($id){
        
        $id = $this ->mysqli->real_escape_string($id);
        $query = "SELECT nid, headline,myblog, image,posted_on,summary, catid
                  FROM myblog  
                  WHERE nid = $id";
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function ViewReadersN($id){
        
        $id = $this ->mysqli->real_escape_string($id);
        $query = "SELECT rid, email,message
                  FROM readermessages 
                  WHERE rid = $id";
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function readerMsgs(){
        
        $id = $this ->mysqli->real_escape_string($id);
        $query = "SELECT rid, email,message
                  FROM readermessages";
        $result = $this->mysqli->query($query);
        return $result;
    }
   // public function updatemyblog($myblogid,$category,$summary,$article,$image,$headline,$userid,$btn){
//        
//        $myblogid = $this ->mysqli->real_escape_string($myblogid);
//        $summary = $this ->mysqli->real_escape_string($summary);
//        $category = $this ->mysqli->real_escape_string($category);
//        $article = $this ->mysqli->real_escape_string($article);
//        $headline = $this ->mysqli->real_escape_string($headline);
//        $userid = $this ->mysqli->real_escape_string($userid);
//        
//        $tmp_dir = $_FILES['image']['tmp_name'];
//		$imgSize = $_FILES['image']['size'];
//        
//        $upload_dir = 'image/'; // upload directory
//	
//	    $imgExt = strtolower(pathinfo($image,PATHINFO_EXTENSION)); // get image extension
//		
//		// valid image extensions
//		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
//		
//		// rename uploading image
//		$image = rand(1000,1000000).".".$imgExt;
// 	    // allow valid image file formats
//		if(in_array($imgExt, $valid_extensions)){			
//				// Check file size '5MB'
//				if(($imgSize < 5000000) && (!empty($image)))				{
//					move_uploaded_file($tmp_dir,$upload_dir.$image);
//				}
//				else{
//					echo  "<script>alert('Sorry, your file is too large.')</script>";
//				}
//			}
//			else{
//				echo  "<script> alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";		
//			}
//         
//        $query = "UPDATE myblog SET myblog = '".$article."',summary ='".$summary."', image= '".$image."', 
//                         headline = '".$headline."',
//                         catid = '".$category."', userid = '".$userid."' WHERE nid = '".$myblogid."'";
//        try{
//        if ($this->mysqli->query($query) === TRUE) {
//            
//                    header("Location:edit.php");
//          
//        } else {
//            echo   "<script>  alert('". "Error: " . $query . "<br>" .$this->mysqli->error ."') </script>";
//        }
//        }catch(exception $e){
//            echo   "<script>  alert('". "Error: " .$e->getMessage() ."') </script>";
//        }
//    }
   // public function addReadermyblog($headline,$summary, $msg,$btn){
//        $email = $this->mysqli->real_escape_string($email);
//        $msg = $this->mysqli->real_escape_string($msg);
//        
//        $query = "INSERT INTO myblog(message, email, sent_on) VALUES ('".$msg."','".$email."',NOW());";
//                
//        if ($this->mysqli->query($query) === TRUE) {
//           
//           header('Location: Message.php');
//          
//        } else {
//            echo   "<script>  alert('". "Error: " . $sql . "<br>" .$this->mysqli->error ."') </script>";
//        }
//    }
    public function post($article,$image,$headline,$summary, $catid,$btn){
	    
        $article = $this ->mysqli->real_escape_string($article);
        $headline = $this ->mysqli->real_escape_string($headline);
        $summary = $this ->mysqli->real_escape_string($summary);
        $image = $this ->mysqli->real_escape_string($image);
        $catid = $this ->mysqli->real_escape_string($catid);
        $tmp_dir = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];
        
        $upload_dir = 'image/'; // upload directory

	
	    $imgExt = strtolower(pathinfo($image,PATHINFO_EXTENSION)); // get image extension
		
		// valid image extensions
		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
		// rename uploading image
		$image = rand(1000,1000000).".".$imgExt;
 	    // allow valid image file formats
		if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$image);
				}
				else{
					echo  "<script>alert('Sorry, your file is too large.')</script>";
				}
			}
			else{
				echo  "<script> alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";		
			}
            
     // $this->mysqli->query("INSERT INTO cat (catid, catid) VALUES('".$category."','".$sub_category."')");
	//	$catid  =$this->mysqli->insert_id;
		
	    $sql = "INSERT INTO myblog (post, image,posted_on,headline,summary,catid)
               VALUES('".$article."','".$image."',NOW(),'"
               .$headline."','".$summary."','".$catid."')";
        try{
        if ($this->mysqli->query($sql) === TRUE) {
           
            header('Location: SuccessMessage.php');
          
        } else {
            //header('Location: ErrorMessage.php');
        }
		} catch(Exception $e){
		     echo "<script>
                        alert('An error has occured while trying to add article');
                    </script>".$e->getMessage();
		}
        	
	}
    
    //public function editmyblog($id){
//        
//        $id = $this ->mysqli->real_escape_string($id);
//        $query = "SELECT nid, headline,posted_on
//                  FROM myblog  
//                  WHERE userid = $id ORDER BY posted_on
//                  DESC LIMIT 30";
//        
//        $result = $this->mysqli->query($query);
//        return $result;
//    }
    public function myStories(){
        $query = "SELECT myblog.bid, myblog.headline, myblog.image, myblog.summary,
                    myblog.posted_on, category.category_name
                  FROM myblog INNER JOIN category ON myblog.catid = category.catid 
                  WHERE  category.catid = 4 ORDER BY myblog.posted_on
                  DESC LIMIT 3 OFFSET 1";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
     public function anomyStories(){
        $query = "SELECT myblog.bid, myblog.headline, myblog.image, myblog.summary,
                    myblog.posted_on, category.category_name
                  FROM myblog INNER JOIN category ON myblog.catid = category.catid 
                  WHERE  category.catid = 4 ORDER BY myblog.posted_on
                  DESC LIMIT 3 OFFSET 3";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function myStoriesTop(){
        $query = "SELECT myblog.bid, myblog.headline, myblog.image,myblog.summary,
                    myblog.posted_on,category.category_name
                  FROM myblog INNER JOIN category ON myblog.catid = category.catid 
                  WHERE  category.catid = 4 ORDER BY myblog.posted_on
                  DESC LIMIT 1";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function getTech(){
        $query = "SELECT myblog.bid, myblog.headline, myblog.image,myblog.posted_on,
                    myblog.summary,category.category_name
                  FROM myblog INNER JOIN category ON myblog.catid = category.catid 
                  WHERE  category.catid = 3 ORDER BY myblog.posted_on
                  DESC LIMIT 4";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function getTechTop(){
        $query = "SELECT myblog.bid, myblog.headline, myblog.image,myblog.posted_on,
                    myblog.summary,category.category_name
                  FROM myblog INNER JOIN category ON myblog.catid = category.catid 
                  WHERE  category.catid = 3 ORDER BY myblog.posted_on
                  DESC LIMIT 1";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
     public function getProgrammingTop(){
        $query = "SELECT myblog.bid, myblog.headline, myblog.image,myblog.posted_on,
                    myblog.summary,category.category_name
                  FROM myblog INNER JOIN category ON myblog.catid = category.catid 
                  WHERE  category.catid = 2 ORDER BY myblog.posted_on
                  DESC LIMIT 1";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function Programming(){
        $query = "SELECT myblog.bid, myblog.headline, myblog.image, myblog.posted_on,
                    myblog.summary,category.category_name
                  FROM myblog INNER JOIN category ON myblog.catid = category.catid 
                  WHERE  category.catid = 2 ORDER BY myblog.posted_on
                  DESC LIMIT 3 OFFSET 1";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function anoProgramming(){
        $query = "SELECT myblog.bid, myblog.headline, myblog.image, myblog.posted_on,
                    myblog.summary,category.category_name
                  FROM myblog INNER JOIN category ON myblog.catid = category.catid 
                  WHERE  category.catid = 2 ORDER BY myblog.posted_on
                  DESC LIMIT 3 OFFSET 3";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function businessTop(){
        $query = "SELECT myblog.bid, myblog.headline, myblog.image,myblog.posted_on,
                    myblog.summary,category.category_name
                  FROM myblog INNER JOIN category ON myblog.catid = category.catid 
                  WHERE  category.catid = 1 ORDER BY myblog.posted_on
                  DESC LIMIT 1";
        
        $result = $this->mysqli->query($query);
        return $result;
    }          
    public function business(){
        $query = "SELECT myblog.bid, myblog.headline, myblog.image,myblog.posted_on,
                    myblog.summary,category.category_name
                  FROM myblog INNER JOIN category ON myblog.catid = category.catid 
                  WHERE  category.catid = 1 ORDER BY myblog.posted_on
                  DESC LIMIT 2 OFFSET 1";
        
        $result = $this->mysqli->query($query);
        return $result;
    }     
    public function businessSec(){
        $query = "SELECT myblog.bid, myblog.headline, myblog.image,myblog.posted_on,
                    myblog.summary,category.category_name
                  FROM myblog INNER JOIN category ON myblog.catid = category.catid 
                  WHERE  category.catid = 1 ORDER BY myblog.posted_on
                  DESC LIMIT 2 OFFSET 2";
        
        $result = $this->mysqli->query($query);
        return $result;
    }     
    public function getmyblogID($myblogID){
        
        $myblogID = $this ->mysqli->real_escape_string($myblogID);
        $query = "SELECT headline, myblog, image, posted_on FROM myblog
                    WHERE nid =".$myblogID;
                    
       $result = $this->mysqli->query($query);
       return $result;  
    }
 
function humanTiming ($time){

    $time = time() - $time; // to get the time since that moment
    $time = ($time<1)? 1 : $time;
    $tokens = array (
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }

  }
    
}
?>
