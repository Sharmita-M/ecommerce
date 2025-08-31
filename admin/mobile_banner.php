
<?php include 'includes/header.php'; 
$id= $_REQUEST['id'] ?? '';
$cate = null;

if(!empty($id)){
  $result = $db->query(" SELECT * FROM `banner` WHERE `id` = '$id' ");
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


<div class="flex-grow-1 container-fluid mt-5">
  <h2 class="section-title text-center">📢 Mobile Banner Management</h2>

  <!-- Add Banner Card -->
  <div class="card card-custom">
    <div class="gradient-header">➕ Add New Banner</div>
    <div class="card-body">
      <form method ="POST" action="manage/manage-banner.php" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="bannerTitle" class="form-label">Banner Title</label>
          <input type="text" name="title" class="form-control" id="bannerTitle" placeholder="E.g. Flash Sale" value="<?= $cate->title ?? '';?>">
        </div>
        
        <div class="mb-3">
          <label for="bannerImage" class="form-label">Upload Banner <small class="text-muted">(1920x600)</small></label>
          <input class="form-control" name="image" type="file" id="bannerImage" value="<?= $cate->image ?? '';?>">
         <?php if (!empty($cate->image)){?>
          <div class="mt-2">
          <label for="bannerImage" class="form-label d-block">Current Image </label>
          <img src="uploads/banners/<?= $cate->image;?>" alt="current image" style="max-width: 50px;">

          
        </div>
          <?php };?>
        </div>
        
        <?php if(!empty($id)){ ?>
          <input type="hidden" name="edit_id" value="<?= $cate->id ?? '';?>">
        <button type="update" name="action" value="update" class="btn btn-theme w-100">Update Banner</button>

<?php } else { ?>
        <button type="submit" name="action" value="submit" class="btn btn-theme w-100">Add Banner</button>
<?php } ?>
      </form>
    </div>
  </div>

  <!-- View Banners Card -->
  <div class="card card-custom mb-5">
    <div class="gradient-header">📋 View All Banners</div>
    <div class="card-body table-responsive">
      <table class="table table-bordered align-middle">
        <thead>
          <tr>
            <th>SL no</th>
          <th>Action</th>
            <th>Title</th>
            <th>Preview</th>
            <th>Date of add</th>
          </tr>
        </thead>
        <tbody>
         
           <?php
          $i = 1;
          $query = $db-> query(" SELECT * FROM `banner` ORDER BY `id` DESC");
          while($row = $query-> fetch_object()){
          
        ?>
        <!-- Example Row 1 -->
        <tr>
          <td><?= $i++;?></td>
         <td class="text-start">
              <button onclick="location.href = '?id=<?= $row->id;?>' " class="btn btn-sm btn-outline-primary">Edit</button>
              <button onclick="location.href='manage/manage-banner.php?action=delete&id=<?= $row->id;?>' " class="btn btn-sm btn-outline-danger">Delete</button>
            </td>
          <td><?= $row-> title?></td>

          <td><img src="uploads/banners/<?= $row->image?>" alt="no images found" class="img-fluid" style="width: 50px;"></td>
          <td><?= $row-> create_at?></td>
        </tr>
        <?php 
          };
        ?>
        
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
</div>
