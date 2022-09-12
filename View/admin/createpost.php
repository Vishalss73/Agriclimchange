<?php
include('header.php');
?>
   <div class="height-100 ">
<div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New Post</h1>
             </div>
              <div class="col-md-12">
                  <!-- Form -->
                  <form  action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group post-title-input">
                          <label for="post_title">Title</label>
                          <input type="text" name="post_title" class="form-control" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1"> Description</label>
<textarea name="postdesc" class="form-control" id="editor" cols="30" rows="50"  placeholder="Write here"></textarea>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Category</label>
                         <select name="category" class="form-control">
                     <option disabled selected> Select Category</option>
                     <?php
                 
                   
                              if(count($result) > 0){
                                    foreach($result as $row){ 
                                        echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
                                    }}
                          
                    
                        ?>
                              </select>
                                                    </div>
                    <!-- <div class="form-group">
                          <label for="post_title">Create New Category</label>
                          <input type="text" name="createcategory" placeholder="Create Category" class="form-control" autocomplete="off" required>
                      </div>  -->
                    
                      <div class="form-group">
                          <label class="form-control-upload" for="exampleInputPassword1">Post image</label>
                          <input type="file" name="fileToUpload">
                      </div>
                       <div class="form-group">
                          <p><label for="metadsc">Meta Description</label></p>
                          <textarea class="form-control" id="metadsc" name="metadsc" rows="4" cols="50">
</textarea>
                      </div>
                       <div class="form-group">
                          <label for="post_title">Tags</label>
                          <input type="text" name="tags" class="form-control" autocomplete="off" required>
                      </div>
                      <input type="submit" name="savepost" class="btn btn-primary" value="Save" required />
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>
</div>
  <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <?php 
include('footer.php');
?>