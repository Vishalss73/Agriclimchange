<?php
class createpost {
    public function showcategory() {
      $DB = new config(); 
      if ( $DB->select('category','*',null,null,null,null)) {
       return  $DB->getResult();
      }
    }
   public function savepost() {
    $DB = new config();
    if(isset($_POST['savepost'])) {
      if ($_FILES['fileToUpload']['name']=='') {
        echo json_encode(array('error'=>'Image field Empty')); exit;
      }
    else if(!isset($_POST['post_title'])) {
      echo json_encode(array('error'=>'Post Title is Empty')); exit;
  }
  else if(!isset($_POST['postdesc'])) {
    echo json_encode(array('error'=>'Post Description is Empty')); exit;
}
else if(!isset($_POST['category'])) {
  echo json_encode(array('error'=>' Category is Empty')); exit;
}
else {
  $file_name = $_FILES['fileToUpload']['name'];
  $file_size = $_FILES['fileToUpload']['size'];
  $file_tmp = $_FILES['fileToUpload']['tmp_name'];
  $file_type = $_FILES['fileToUpload']['type'];
  $tmp = (explode('.',$file_name));
  $file_ext = end($tmp);
  $extensions = array("jpeg","jpg","png");
  if(in_array($file_ext,$extensions) === false)
  {
    echo json_encode(array('error'=>'This extension file not allowed, Please choose a JPG or PNG file.')); exit;
  }

  if($file_size > 2097152){
    echo json_encode(array('error'=>'File size must be 2mb or lower.')); exit;

  }
  $new_name = time(). "-".basename($file_name);
  $target = "./assets/upload/".$new_name;
    move_uploaded_file($file_tmp,$target);

    $title = $DB->escapeString($_POST['post_title']);
    $description = $DB->escapeString($_POST['postdesc']);
    $category = $DB->escapeString($_POST['category']);
   /* $createcategory = $_POST['createcategory']; */
    $metadsc = $DB->escapeString($_POST['metadsc']);
    $tags = $DB->escapeString($_POST['tags']);
    $date = date("d M, Y");
    $author = $_SESSION['id'];
    $slug = $DB->create_slug($title);
    $DB->insert('posts', ['title'=>$title, 'description' => $description, 'category_name' => $category
    , 'metadsc'=> $metadsc,'tags'=> $tags,'date'=> $date,'author'=>$author, 'slug'=>$slug, 'post_img'=>$new_name]);
    $DB->sql("UPDATE category SET post = post+1 WHERE category_id = $category");
  $status = $DB->getresult();
			if(!empty($status)){
        echo json_encode(array('Post Published Successful')); exit;
      }
			} 
    }
} }
?>