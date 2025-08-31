<?php include 'includes/header.php'; 
$id= $_REQUEST['id'] ?? '';

if(!empty($id)){
  $result = $db->query(" SELECT * FROM `product_extra_image` WHERE `pei_id` = '$id' ");
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
  <h2 class="section-title text-center">📢 Product Extra Image</h2>

  <!-- Add Banner Card -->
  <div class="card card-custom">
    <div class="gradient-header">➕ Add New Banner</div>
    <div class="card-body">
      <form method ="POST" action="manage/manage-pExtra-image.php" enctype="multipart/form-data">
       <label for="selectProduct" class="form-label">Select Product</label>
        <select class="form-select" id="selectProduct" name="pId">
          <option selected disabled>Choose Product</option>
        <?php 
        $cates = $db-> query("SELECT * FROM `product` ORDER BY `id` ASC");
        while($newCate = $cates-> fetch_object()){?>
          <option value="<?= $newCate->id;?>"><?= $newCate->product_name;?></option>
          <?php };?>
        </select>
      </div>
                 
        <div class="mb-3">
          <label for="bannerImage" class="form-label">Upload Banner <small class="text-muted">(1000x700)</small></label>
          <input class="form-control" name="image" type="file" id="bannerImage">
        </div>
                 <?php if(!empty($id)){ ?>
            <input type="hidden" name="edit_id" value="<?= $newCate->id ?? '';?>">
            <button type="update" name="action" value="update" class="btn btn-theme w-100">Update Image</button>
            <?php } else { ?>
            <button type="submit" name="action" value="submit" class="btn btn-theme w-100">Add Image</button>
            <?php } ?>
      </form>
    </div>
  </div>
  <!-- View Banners Card -->
  <div class="card card-custom">
    <div class="gradient-header">📋 View All Banners</div>
    <div class="card-body table-responsive">
      <table class="table table-bordered align-middle">
        <thead>
          <tr>
            <th>S.l no</th>
              <th class="text-center">Actions</th>
            <th>Title</th>
            <th>Preview</th>
            <th>Date</th>
          
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
            $query = $db->query("
              SELECT pei.*, p.product_name 
              FROM product_extra_image pei
              LEFT JOIN product p ON pei.p_id = p.id
              ORDER BY pei.pei_id DESC
            ");
          while($row = $query-> fetch_object()){
          
        ?>
        <!-- Example Row 1 -->
        <tr>
          <td><?= $i++;?></td>
         <td class="text-center">
              <button onclick="location.href = '?id=<?= $row->pei_id;?>' " class="btn btn-sm btn-outline-primary">Edit</button>
              <button onclick="location.href='manage/manage-pExtra-image.php?action=delete&pei_id=<?= $row->pei_id;?>' " class="btn btn-sm btn-outline-danger">Delete</button>
            </td>
          <td><?= $row-> product_name?></td>
          <td><img src="uploads/p_extra_image/<?= $row->image?>" alt="no images found" class="img-fluid" style="width: 50px;"></td>
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