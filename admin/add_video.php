<?php include 'includes/header.php'; ?>

<div  class="flex-grow-1 container-fluid mt-5">
  <h2 class="section-title text-center">🎬 Video Management</h2>

  <!-- Add Video Card -->
  <div class="card card-custom">
    <div class="gradient-header">➕ Add New Video</div>
    <div class="card-body">
      <form>
        <div class="mb-3">
          <label for="videoTitle" class="form-label">Video Title</label>
          <input type="text" class="form-control" id="videoTitle" placeholder="E.g. Promo Trailer, Interview Clip">
        </div>
        <div class="mb-3">
          <label for="videoLink" class="form-label">Video Link (YouTube/Vimeo)</label>
          <input type="url" class="form-control" id="videoLink" placeholder="https://www.youtube.com/watch?v=abc123">
        </div>
        <button type="submit" class="btn btn-theme w-100">Save Video</button>
      </form>
    </div>
  </div>

  <!-- View Videos Card -->
  <div class="card card-custom">
    <div class="gradient-header">📋 Saved Video Links</div>
    <div class="card-body">
      <div class="video-card">
        <h6 class="fw-semibold">Promo Teaser 2025</h6>
        <a href="https://www.youtube.com/watch?v=abcdef" target="_blank" class="video-link text-decoration-none text-primary">https://www.youtube.com/watch?v=abcdef</a>
      </div>
      <div class="video-card">
        <h6 class="fw-semibold">Behind The Scenes</h6>
        <a href="https://vimeo.com/123456" target="_blank" class="video-link text-decoration-none text-primary">https://vimeo.com/123456</a>
      </div>
    </div>
  </div>
</div>

         

<?php include 'includes/footer.php'; ?>
</div>

 

