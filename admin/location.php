<?php include 'includes/header.php'; ?>
<body>

<div class="flex-grow-1 container-fluid mt-5">
  <h2 class="section-title text-center">📍 Address & Location Management</h2>

  <!-- Add Address Card -->
  <div class="card card-custom">
    <div class="gradient-header">➕ Add Address / Location</div>
    <div class="card-body">
      <form>
        <div class="mb-3">
          <label for="placeName" class="form-label">Name</label>
          <input type="text" class="form-control" id="placeName" placeholder="E.g. Head Office, Warehouse">
        </div>
        <div class="mb-3">
          <label for="locationAddress" class="form-label">Address</label>
          <textarea name="locationAddress" id="editor1" rows="4" class="form-control" placeholder="Enter full address with PIN, City, State, etc."></textarea>
        </div>
        <button type="submit" class="btn btn-theme w-100">Save Address</button>
      </form>
    </div>
  </div>

  <!-- View Addresses Card -->
  <div class="card card-custom">
    <div class="gradient-header">📋 Saved Locations</div>
    <div class="card-body">
      <div class="mb-4">
        <h6 class="fw-semibold">Head Office</h6>
        <div class="bg-light border p-3 rounded address-box">
          123, Infinity Tower Road, Phase II,<br>
          Mumbai, Maharashtra - 400001
        </div>
      </div>
      <div class="mb-4">
        <h6 class="fw-semibold">Warehouse 1</h6>
        <div class="bg-light border p-3 rounded address-box">
          Plot No. 14A, Industrial Estate,<br>
          Hosur, Tamil Nadu - 635126
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
</div>
