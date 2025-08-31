<?php include 'includes/header.php'; ?>
 <div class="flex-grow-1 container-fluid mt-5">
  <h2 class="section-title text-center">📝 Offer Management</h2>

  <!-- Add Testimonial Card -->
  <div class="card card-custom">
    <div class="gradient-header">➕ Add New Offer</div>
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

        <!-- Product Name -->
        <div class="col-md-4 mb-3">
          <label for="productName" class="form-label">Product Name</label>
          <input type="text" id="productName" class="form-control" placeholder="Name">
        </div>
      </div>

      <div class="row">
        <!-- Selling Price -->
        <div class="col-md-4 mb-3">
          <label for="sellingPrice" class="form-label">Selling Price</label>
          <input type="number" id="sellingPrice" class="form-control" placeholder="Price">
        </div>

        <!-- Market Price -->
        <div class="col-md-4 mb-3">
          <label for="offer" class="form-label">Offer Name</label>
          <input type="text" id="offer" class="form-control" placeholder="E.g New Year Offer">
        </div>

        <!-- Image Upload -->
        <div class="col-md-4 mb-3">
          <label for="productImage" class="form-label">Add Offer Image</label>
          <input type="file" id="productImage" class="form-control">
        </div>
      </div>
        <div class="mb-3">
          <label for="testimonialText" class="form-label">Catagory Description</label>
          <textarea name="testimonialText" id="editor1" rows="6" class="form-control testimonial-content"></textarea>
        </div>
        <button type="submit" class="btn btn-theme w-100">Add Offer</button>
      </form>
    </div>
  </div>   

<div class="card">
  <div class="gradient-header bg-primary text-white fw-semibold">
    View Offers
  </div>
  <div class="card-body table-responsive">
    <table class="table table-bordered align-middle text-center">
      <thead class="table-light">
        <tr>
          <th>Sl No</th>
          <th>Action</th>
          <th>Category </th>
            <th>Sub- Category </th>
            <th>Product Name</th>
            <th>Offer Name</th>
          <th>Description</th>
            <th>Price</th>
          <th>Image</th>
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
          <td>Shirt</td>
          <td>Blue Striped Shirt</td>
          <td>New Year Offer</td>
            <td>Blue Striped Shirt with New Year Offer</td>
            <td>₹ 400</td>
          <td><img src="uploads/mutton.jpg" alt="Blue Striped Shirt" class="img-fluid" style="width: 50px;"></td>
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
          <td>Phone</td>
          <td>Samsung Galaxy</td>
            <td>Festive Offer</td>
                <td>Samsung Galaxy with Festive Offer</td>
                <td>₹ 12000</td>
          <td><img src="uploads/prawn.jpg" alt="Samsung Galaxy Phone" class="img-fluid" style="width: 50px;"></td>
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

