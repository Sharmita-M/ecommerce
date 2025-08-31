
  <?php include 'includes/header.php'; 

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

                    <main class="main-content ms-5">

                        <div class="content ">
                            <h1>Welcome Admin</h1>

                            <div class="quick-stats">
                                <div class="stat-card">
                                    <div class="stat-icon" style="background-color: #4e73df;">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                    <div class="stat-info">
                                        <h3>12</h3>
                                        <p>Total orders</p>
                                    </div>
                                </div>
                                <div class="stat-card">
                                    <div class="stat-icon" style="background-color: #1cc88a;">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <div class="stat-info">
                                        <h3>4</h3>
                                        <p>Completed</p>
                                    </div>
                                </div>
                                <div class="stat-card">
                                    <div class="stat-icon" style="background-color: #f6c23e;">
                                        <i class="fas fa-exclamation-circle"></i>
                                    </div>
                                    <div class="stat-info">
                                        <h3>5</h3>
                                        <p>Pending</p>
                                    </div>
                                </div>
                                <div class="stat-card">
                                    <div class="stat-icon" style="background-color: #e74a3b;">
                                        <i class="fas fa-times-circle"></i>
                                    </div>
                                    <div class="stat-info">
                                        <h3>3</h3>
                                        <p>Cancelled</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                </div>
                </main>

       

        </div>
   
       
<?php include 'includes/footer.php'; ?>
