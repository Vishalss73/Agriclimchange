<?php
class postmodel {

public function showpost() {
    $DB = new config();
    $slug = $DB->escapeString($_GET['slug']);
    $collName = "posts.id, posts.title,posts.description,posts.category_name, category.category_id, posts.date, posts.author, posts.slug, posts.post_img";
    if( $DB->select('posts', $collName, "LEFT JOIN category ON posts.id = category.category_id","posts.slug = '{$slug}'", null,null)){
     return $DB->getResult();
    }
}

}

?>