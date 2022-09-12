<?php 
include('header.php');
?>

<div class="height-100 ">
        <div class="pt-4 post-head d-flex">
    <p> Posts </p>
    <a class="c-btn" href="index.php?controller=admin&function=createpost"> Create Post </a>
</div> 
<div class="mt-2 row">
<ul class="d-flex post-item">
<li> <a href="#">All<span>(29) </span> </a>
<li> <a href="#">Mine<span>(29) </span> </a>
<li> <a href="#">Published<span>(29) </span> </a>
<li> <a href="#">Draft<span>(29) </span> </a>
</ul>

</div>
<div class="post-show-table">
<table class="mb-0 table">
  <thead class="table-head">
    <tr>
      <th scope="col">No. </th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Categories</th>
      <th scope="col">Tags</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Thornton Thornton Thornton Thornton Thornton
      <div class="action-btn mt-2 row">
      <ul class="d-flex post-item">
<li> <a href="#">Edit </a>
</li><li> <a href="#">Delete </a>
</li><li> <a href="#">View </a>
</li><li> <a href="#">Draft</a>
</li></ul>
</div>
      </td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Thornton Thornton Thornton Thornton Thornton Thornton Thornton Thornton Thornton Thornton Thornton Thornton Thornton Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
  </tbody>
</table>

</div>
</div>
</div>
<script>
$(document).ready(function(){
  $("tr").mouseover(function(){
  
    $(".action-btn").show();
    
  });
  $("tr").mouseout(function(){
    $(".action-btn").hide();

});
});
</script>

<?php 
include('footer.php');
?>