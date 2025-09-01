<?php include 'includes/header.php';

$id= $_REQUEST['id'] ?? '';

if(!empty($id)){
  $result = $db->query(" SELECT * FROM `product_categories` WHERE `pc_id` = '$id' ");
  $cate = $result->fetch_object();
};

if (!empty($_SESSION['errorMsg'])):
    $alertClass = $_SESSION['errorStatus'] === 'success' ? 'alert-success' : 'alert-danger';
?>
<div id="sessionAlert" class="alert <?= $alertClass ?> alert-dismissible fade show position-absolute top-0 start-0 w-100 text-center z-3" role="alert">
  <?= $_SESSION['errorMsg']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
    unset($_SESSION['errorMsg'], $_SESSION['errorStatus']);
endif;
?>
 <div class="flex-grow-1 container-fluid mt-5 mb-5">
  <h2 class="section-title text-center">📝 Category Management</h2>

  <!-- Add Testimonial Card -->
  <div class="card card-custom">
    <div class="gradient-header">➕ Add New Category</div>
    <div class="card-body">
      <form method ="POST" action="manage/manage-category.php" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="authorName" class="form-label"> Category Name</label>
          <input type="text" name="category"  class="form-control" id="authorName" placeholder="E.g. Men Jeans" value="<?= $cate->pc_name ?? '';?>">
        </div>
    
        <div class="mb-3">
          <label for="bannerImage" class="form-label">Upload Image <small class="text-muted">(400x400)</small></label>
          <input class="form-control" name="image" type="file" id="bannerImage" value="<?= $cate->pc_image ?? '';?>">
          <?php if (!empty($cate->pc_image)){?>
          <div class="mt-2">
          <label for="bannerImage" class="form-label d-block">Current Image </label>
          <img src="uploads/category/<?= $cate->pc_image;?>" alt="current image" style="max-width: 50px;">

          
        </div>  
          <?php };?>
        </div>
        
        <div class="mb-3">
          <label for="testimonialText" class="form-label">Catagory Description</label>
          <textarea name="description" id="editor1" rows="6" class="form-control testimonial-content" ><?= $cate->description ?? '';?></textarea>
        </div>
        <?php if(!empty($id)){ ?>
          <input type="hidden" name="edit_id" value="<?= $cate->pc_id ?? '';?>">
        <button type="update" name="action" value="update" class="btn btn-theme w-100">Update Category</button>

<?php } else { ?>
        <button type="submit" name="action" value="submit" class="btn btn-theme w-100">Add Category</button>
<?php } ?>
      </form>
    </div>
  </div>   

<div class="card">
  <div class="gradient-header bg-primary text-white fw-semibold">
    View Category
  </div>
  <div class="card-body table-responsive">
    <table  id="example" class="table table-bordered align-middle text-center">
      <thead class="table-light">
        <tr>
          <th>Sl No</th>
          <th>Action</th>
          <th>Product Name</th>
          <th>Description</th>
          <th>Image</th>
          <th>Date Of Add</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $i = 1;
          $query = $db-> query(" SELECT * FROM `product_categories` ORDER BY `pc_id` DESC");
          while($row = $query-> fetch_object()){
          
        ?>
        <!-- Example Row 1 -->
        <tr>
          <td><?= $i++;?></td>
         <td class="text-start">
              <button onclick="location.href = '?id=<?= $row->pc_id;?>' " class="btn btn-sm btn-outline-primary">Edit</button>
              <button onclick="location.href='manage/manage-category.php?action=delete&pc_id=<?= $row->pc_id;?>' " class="btn btn-sm btn-outline-danger">Delete</button>
            </td>
          <td><?= $row-> pc_name?></td>
          <td><?= $row -> description?></td>
          <td><img src="uploads/category/<?= $row-> pc_image?>" alt="no images found" class="img-fluid" style="width: 50px;"></td>
          <td><?= $row-> create_at?></td>
        </tr>
        <?php 
          }
        ?>
       
        <!-- More rows here... -->
      </tbody>
    </table>
  </div>
</div>
</div>

<!-- CKEditor CDN -->

  
<?php include 'includes/footer.php'; ?>


</div>

