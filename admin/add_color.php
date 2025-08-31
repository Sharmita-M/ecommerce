<?php include 'includes/header.php';

$id= $_REQUEST['id'] ?? '';

if(!empty($id)){
  $color_data = $db->query(" SELECT * FROM `color` WHERE `co_id` = '$id' ");
  $co_value = $color_data->fetch_object();
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
  <h2 class="section-title text-center">📝 Add color</h2>

  <!-- Add Testimonial Card -->
  <div class="card card-custom">
    <div class="gradient-header">➕ Add color</div>
    <div class="card-body">
      <form method ="POST" action="manage/manage-color.php" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="authorName" class="form-label"> Color Name</label>
          <input type="text" name="color"  class="form-control" id="authorName" placeholder="E.g. Red, Blue" value="<?= $co_value->color ?? '';?>">
        </div>
        </div>
        
        <?php if(!empty($id)){ ?>
          <input type="hidden" name="edit_id" value="<?= $co_value->co_id ?? '';?>">
        <button type="update" name="action" value="update" class="btn btn-theme w-100">Update color</button>

<?php } else { ?>
        <button type="submit" name="action" value="submit" class="btn btn-theme w-100">Add color</button>
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
          <th>color</th>
          <th>Date Of Add</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $i = 1;
          $query = $db-> query(" SELECT * FROM `color` ORDER BY `co_id` DESC");
          while($row = $query-> fetch_object()){
          
        ?>
        <!-- Example Row 1 -->
        <tr>
          <td><?= $i++;?></td>
         <td class="text-start">
              <button onclick="location.href = '?id=<?= $row->co_id;?>' " class="btn btn-sm btn-outline-primary">Edit</button>
              <button onclick="location.href='manage/manage-color.php?action=delete&co_id=<?= $row->co_id;?>' " class="btn btn-sm btn-outline-danger">Delete</button>
            </td>
          <td><?= $row-> color;?></td>
          <td><?= $row-> create_at;?></td>
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

