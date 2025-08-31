<?php include 'includes/header.php'; 
   $id= $_REQUEST['id'] ?? '';
   
   if(!empty($id)){
     $result = $db->query(" SELECT * FROM `product` WHERE `id` = '$id' ");
     $cate = $result->fetch_object();
   };
   
   if (!empty($_SESSION['errorMsg'])):
       $alertClass = $_SESSION['errorStatus'] === 'success' ? 'alert-success' : 'alert-danger';
   ?>
<div id="sessionAlert"
   class="alert <?= $alertClass ?> alert-dismissible fade show position-absolute top-0 start-0 w-100 text-center z-3"
   role="alert">
   <?= $_SESSION['errorMsg']; ?>
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
   unset($_SESSION['errorMsg'], $_SESSION['errorStatus']);
   endif;
   ?>
<div class="flex-grow-1 container-fluid mt-5">
   <h2 class="section-title text-center">📝 Product Management</h2>
   <!-- Add Testimonial Card -->
   <div class="card card-custom">
      <div class="gradient-header">➕ Add New Product</div>
      <div class="card-body">
         <form method="POST" action="manage/manage-product.php" enctype="multipart/form-data">
            <div class="row">
               <!-- Select Category -->
               <div class="col-md-4 mb-3">
                  <label for="categorySelect" class="form-label">Select Category</label>
                  <select id="categorySelect" class="form-select" name="categoryId">
                     <option disabled>Select</option>
                     <?php 
                        $cates = $db->query("SELECT * FROM `product_categories` ORDER BY `pc_id` ASC");
                        while($newCate = $cates->fetch_object()) {
                            $selected = ($newCate->pc_id == ($cate->pc_id ?? '')) ? 'selected' : '';
                        ?>
                     <option value="<?= $newCate->pc_id; ?>" <?=$selected; ?>>
                        <?= $newCate->pc_name; ?>
                     </option>
                     <?php } ?>
                  </select>
               </div>
               <!-- Select Sub-category -->
               <div class="col-md-4 mb-3">
                  <label for="subCategorySelect" class="form-label">Select Sub-category</label>
                  <select id="subCategorySelect" class="form-select" name="sub_cateId">
                     <option disabled>Select</option>
                     <?php 
                        $subs = $db->query("SELECT * FROM `product_subcategory` ORDER BY `psc_name` ASC");
                        while($sub = $subs->fetch_object()) {
                            $selected = ($sub->psc_id == ($cate->psc_id ?? '')) ? 'selected' : '';
                        ?>
                     <option data-cat="<?= $sub->pc_id ?>" value="<?= $sub->psc_id ?>" <?=$selected; ?>>
                        <?= $sub->psc_name ?>
                     </option>
                     <?php } ?>
                  </select>
               </div>
               <!-- Product Name -->
               <div class="col-md-4 mb-3">
                  <label for="productName" class="form-label">Product Name</label>
                  <input type="text" name="pName" id="productName" class="form-control" placeholder="Name"
                     value="<?= $cate->product_name ?? '';?>">
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 mb-3">
                  <label for="subCategorySelect" class="form-label">Select Gender</label>
                  <select id="subCategorySelect" class="form-select" name="gender">
                     <option disabled>Select</option>
                     <?php 
                        $subs = $db->query("SELECT * FROM `gender` ORDER BY `g_id` ASC");
                        while($sub = $subs->fetch_object()) {
                            $selected = ($sub->g_id == ($cate->g_id ?? '')) ? 'selected' : '';
                        ?>
                     <option data-cat="<?= $sub->g_id ?>" value="<?= $sub->g_id  ?>" <?=$selected; ?>>
                        <?= $sub->gender ?>
                     </option>
                     <?php } ?>
                  </select>
               </div>
               <div class="col-md-4 mb-3">
                  <label for="subCategorySelect" class="form-label">Select Size</label>
                  <select id="subCategorySelect" class="form-select" name="size">
                     <option disabled>Select</option>
                     <?php 
                        $sizes = $db->query("SELECT * FROM `size` ORDER BY `s_id` ASC");
                        while($s = $sizes->fetch_object()) {
                            $selected = ($s->s_id == ($cate->s_id ?? '')) ? 'selected' : '';
                        ?>
                     <option data-cat="<?= $s->s_id ?>" value="<?= $s->s_id  ?>" <?=$selected; ?>>
                        <?= $s->size_name ?>
                     </option>
                     <?php } ?>
                  </select>
               </div>
               <div class="col-md-4 mb-3">
                  <label for="subCategorySelect" class="form-label">Select Color</label>
                  <select id="subCategorySelect" class="form-select" name="color">
                     <option disabled>Select</option>
                     <?php 
                        $colors = $db->query("SELECT * FROM `color` ORDER BY `co_id` ASC");
                        while($co = $colors->fetch_object()) {
                            $selected = ($co->co_id == ($cate->co_id ?? '')) ? 'selected' : '';
                        ?>
                     <option data-cat="<?= $co->co_id ?>" value="<?= $co->co_id  ?>" <?=$selected; ?>>
                        <?= $co->color ?>
                     </option>
                     <?php } ?>
                  </select>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 mb-3">
                  <label for="Stock" class="form-label">Stock</label>
                  <input type="text" id="Stock" name="stock" class="form-control"
                     placeholder="Stock available" value="<?= $cate->stock ?? '';?>">
               </div>
               <!-- Selling Price -->
               <div class="col-md-4 mb-3">
                  <label for="sellingPrice" class="form-label">Selling Price</label>
                  <input type="text" id="sellingPrice" name="sellingPrice" class="form-control"
                     placeholder="Price" value="<?= $cate->product_selling_price ?? '';?>">
               </div>
               <!-- Market Price -->
               <div class="col-md-4 mb-3">
                  <label for="marketPrice" class="form-label">Market Price</label>
                  <input type="text" id="marketPrice" name="marketPrice" class="form-control"
                     placeholder="Market Price" value="<?= $cate->product_market_price ?? '';?>">
               </div>
            </div>
            <div class="row">
               <!-- Image Upload -->
               <div class="col-md-12 mb-3">
                  <label for="productImage" class="form-label">Image</label>
                  <input type="file" id="productImage" name="image" class="form-control"
                     value="<?= $cate->product_image ?? '';?>">
               </div>
            </div>
            <div class="mb-3">
               <label for="testimonialText" class="form-label">Catagory Description</label>
               <textarea name="description" id="editor1" rows="6"
                  class="form-control testimonial-content"><?= $cate->product_long_description ?? '';?></textarea>
            </div>
            <?php if(!empty($id)){ ?>
            <input type="hidden" name="edit_id" value="<?= $cate->id ?? '';?>">
            <button type="update" name="action" value="update" class="btn btn-theme w-100">Update Product</button>
            <?php } else { ?>
            <button type="submit" name="action" value="submit" class="btn btn-theme w-100">Add Product</button>
            <?php } ?>
         </form>
      </div>
   </div>
   <div class="card">
      <div class="gradient-header bg-primary text-white fw-semibold">
         View Category
      </div>
      <div class="card-body table-responsive">
         <table class="table table-bordered align-middle text-center">
            <thead class="table-light">
               <tr>
                  <th>Sl No</th>
                  <th>Action</th>
                  <th>Category Name</th>
                  <th>Sub-category Name</th>
                  <th>Product Name</th>
                  <th>Gender</th>
                  <th>Size</th>
                  <th>Color</th>
                  <th>Stock</th>
                  <th>Market Price</th>
                  <th>Selling Price</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Date Of Add</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  $i = 1;
                  $query = $db->query(" SELECT p.*, ps.psc_name, pc.pc_name, g.gender, c.color, s.size_name
                  FROM `product` p
                  JOIN `product_subcategory` ps ON p.psc_id = ps.psc_id
                  JOIN `product_categories` pc ON p.pc_id = pc.pc_id
                  JOIN `gender` g ON p.g_id = g.g_id
                  JOIN `color` c ON p.color_available = c.co_id
                  JOIN `size` s ON p.size_available = s.s_id
                  WHERE p.id = '$id' OR 1=1
                  ORDER BY p.id DESC
                  ");

                  
                  while ($row = $query->fetch_object()) {
                  ?>
               <tr>
                  <td>
                     <?= $i++; ?>
                  </td>
                  <td class="text-start">

                     <a href='?id=<?= $row->id; ?>' class='btn btn-sm btn-outline-primary'>Edit</a>

                     <a href='manage/manage-product.php?action=delete&id=<?= $row->id; ?>' class="btn btn-sm btn-outline-danger">Delete</a>

                  </td>
                  <td>
                     <?= $row->pc_name; ?>
                  </td>
                  <td>
                     <?= $row->psc_name; ?>
                  </td>
                  <td>
                     <?= $row->product_name; ?>
                  </td>
                  <td>
                     <?= $row->gender; ?>
                  </td>
                  <td>
                     <?= $row->size_name; ?>
                  </td>
                  <td>
                     <?= $row->color_available; ?>
                  </td>
                  <td>
                     <?= $row->stock; ?>
                  </td>
                  <td>
                     <?= $row->product_market_price; ?>
                  </td>
                  <td>
                     <?= $row->product_selling_price; ?>
                  </td>
                  <td>
                     <?= $row->product_long_description; ?>
                  </td>
                  <td>
                     <?php if (!empty($row->product_image)) { ?>
                     <img src="uploads/products/<?= $row->product_image; ?>" class="img-fluid"
                        style="width: 50px;" alt="Product Image">
                     <?php } else { ?>
                     <span>No image found</span>
                     <?php } ?>
                  </td>
                  <td>
                     <?= $row->create_at; ?>
                  </td>
               </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<?php include 'includes/footer.php'; ?>
</div>