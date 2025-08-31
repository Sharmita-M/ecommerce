<?php include 'includes/header.php'; ?>

 <div class="flex-grow-1 container-fluid mt-5">
  <h2 class="section-title text-center">📝 Stock Management</h2>

  <!-- Add Testimonial Card -->
  <div class="card card-custom">
    <div class="gradient-header">➕ Add Stock</div>
    <div class="card-body">
      <form>
         <div class="row">
        <!-- Select Category -->
        <div class="col-md-4 mb-3">
          <label for="categorySelect" class="form-label">Select Category</label>
          <select id="categorySelect" class="form-select">
            <option selected disabled>Select</option>
            <option value="Men">Men</option>
            <option value="Women">Women</option>
            <option value="Electronics">Electronics</option>
          </select>
        </div>

        <!-- Select Sub-category -->
        <div class="col-md-4 mb-3">
          <label for="subCategorySelect" class="form-label">Select Sub-category</label>
          <select id="subCategorySelect" class="form-select">
            <option selected disabled>Select</option>
            <option value="Shirts">Shirts</option>
            <option value="Mobiles">Mobiles</option>
            <option value="Shoes">Shoes</option>
          </select>
        </div>
 <div class="col-md-4 mb-3">
          <label for="productName" class="form-label">Add Stock Unit</label>
          <input type="text" id="productName" class="form-control" placeholder="E.g 2 Pair">
        </div>
      </div>
        
        <button type="submit" class="btn btn-theme w-100">Add Stock</button>
      </form>
    </div>
  </div>   

<div class="card">
  <div class="gradient-header bg-primary text-white fw-semibold">
    View Stock
  </div>
  <div class="card-body table-responsive">
    <table class="table table-bordered align-middle text-center">
      <thead class="table-light">
        <tr>
          <th>Sl No</th>
          <th>Action</th>
          <th>Category Name</th>
          <th>Sub- Category Name</th>
          <th>Stock Unit</th>
          <th>Date Of Add</th>
        </tr>
      </thead>
      <tbody>
        <!-- Example Row 1 -->
        <tr>
          <td>1</td>
         <td class="text-start">
              <button class="btn btn-sm btn-outline-primary">Edit</button>
              <button class="btn btn-sm btn-outline-danger">Delete</button>
            </td>
          <td>Men</td>
          <td>Blue Striped Shirt</td>
          <td>5 Pair</td>
          <td>2024-11-21 12:38:01</td>
        </tr>
        <!-- Example Row 2 -->
        <tr>
          <td>2</td>
          <td class="text-start">
              <button class="btn btn-sm btn-outline-primary">Edit</button>
              <button class="btn btn-sm btn-outline-danger">Delete</button>
            </td>
          <td>Electronics</td>
          <td>Samsung Galaxy</td>
          <td>10 Units</td>
          <td>2024-12-03 14:15:33</td>
        </tr>
        <!-- More rows here... -->
      </tbody>
    </table>
  </div>
</div>
</div>
<?php include 'includes/footer.php'; ?>
</div>

