<?php include 'includes/header.php';
?>
<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center">
    <div class="row shadow rounded-4 overflow-hidden" style="max-width: 900px; width: 100%;">
      
      <!-- Image Column -->
      <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center bg-light">
  <img src="images/avatar/avatar-1" alt="Avatar" class="rounded-circle img-fluid mx-auto d-block" style="max-width: 250px;">
</div>

      <!-- Form Column -->
      <div class="col-md-6 bg-white p-4 p-md-5">
        <ul class="nav nav-pills mb-4 justify-content-center" id="formTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="login-tab" data-bs-toggle="pill" data-bs-target="#login" type="button" role="tab">Login</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="signup-tab" data-bs-toggle="pill" data-bs-target="#signup" type="button" role="tab">Sign Up</button>
          </li>
        </ul>

        <div class="tab-content" id="formTabsContent">
          <!-- Login Form -->
          <div class="tab-pane fade show active" id="login" role="tabpanel">
            <h4 class="text-center mb-3">Login</h4>
            <form>
              <div class="mb-3">
                <label for="loginEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="loginEmail" placeholder="Enter email">
              </div>
              <div class="mb-3">
                <label for="loginPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="loginPassword" placeholder="Password">
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>

          <!-- Signup Form -->
          <div class="tab-pane fade" id="signup" role="tabpanel">
            <h4 class="text-center mb-3">Sign Up</h4>
            <form>
              <div class="mb-3">
                <label for="signupName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="signupName" placeholder="Your name">
              </div>
              <div class="mb-3">
                <label for="signupEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="signupEmail" placeholder="Enter email">
              </div>
              <div class="mb-3">
                <label for="signupPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="signupPassword" placeholder="Password">
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-success">Create Account</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
<?php include 'includes/footer.php';
?>