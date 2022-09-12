<?php
class homemodel {

 public function showpost() {
    $DB = new config();
    $limit = 6;
    $collName = "posts.id, posts.title,posts.description,posts.category_name, category.category_id, posts.date, posts.author, posts.slug, posts.post_img";
  if( $DB->select('posts', $collName, "LEFT JOIN category ON posts.id = category.category_id", null, "id DESC", $limit)){
   return $DB->getResult();
  }
   return $DB->baseurl();
 }
}

?>