<?php include 'includes/header.php';
if (!isset($_SESSION['u_id'])) {
    echo "<script>window.location.replace('login.php');</script>";
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

// Get current user data
$user_query = $db->query("SELECT * FROM `user` WHERE `u_id` = '" . $_SESSION['u_id'] . "'");
$user_data = $user_query->fetch_object();
?>

        <!-- Page Title -->
        <section class="s-page-title">
            <div class="container">
                <div class="content">
                    <h1 class="title-page">Account Settings</h1>
                    <ul class="breadcrumbs-page">
                        <li><a href="index.php" class="h6 link">Home</a></li>
                        <li class="d-flex"><i class="icon icon-caret-right"></i></li>
                        <li><a href="account-page.php" class="h6 link">My Account</a></li>
                        <li class="d-flex"><i class="icon icon-caret-right"></i></li>
                        <li>
                            <h6 class="current-page fw-normal">Settings</h6>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- /Page Title -->

        <!-- Account Settings -->
        <section class="flat-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 d-none d-xl-block">
                        <div class="sidebar-account sidebar-content-wrap sticky-top">
                            <div class="account-author">
                                <div class="author_avatar">
                                    <div class="image">
                                        <img class="lazyload" src="admin/uploads/profiles/<?= $user_data->image ; ?> " data-src="admin/uploads/profiles/<?= $user_data->image ; ?> "
                                            alt="Avatar">
                                    </div>
                                </div>
                                <h4 class="author_name"><?php echo $user_data->name ?? 'User'; ?></h4>
                                <p class="author_email h6"><?php echo $user_data->email ?? ''; ?></p>
                            </div>
                            <ul class="my-account-nav">
                                <li>
                                    <a href="account-page.php" class="my-account-nav_item h5">
                                        <i class="icon icon-circle-four"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="account-orders.php" class="my-account-nav_item h5">
                                        <i class="icon icon-box-arrow-down"></i>
                                        Orders
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="account-addresses.php" class="my-account-nav_item h5">
                                        <i class="icon icon-address-book"></i>
                                        My address
                                    </a>
                                </li> -->
                                <li>
                                    <a href="account-setting.php" class="my-account-nav_item h5 active">
                                        <i class="icon icon-setting"></i>
                                        Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="admin/manage/manage-user.php?submit=logout" class="my-account-nav_item h5">
                                        <i class="icon icon-sign-out"></i>
                                        Log out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="my-account-content">
                            <div class="account-settings-wrap">
                                <h2 class="account-title type-semibold">Account Information</h2>

        <form id="accountSettingsForm" class="account-settings-form" method="POST" action="admin/manage/action-profile.php" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-8">

            <!-- Full Name -->
            <div class="form-group mb-4">
                <label for="userName" class="form-label h6">Full Name</label>
                <input type="text" class="form-control" id="userName" name="name"
                       value="<?php echo $user_data->name ?? ''; ?>" placeholder="Enter your full name">
            </div>

            <!-- Email -->
            <div class="form-group mb-4">
                <label for="userEmail" class="form-label h6">Email Address</label>
                <input type="email" class="form-control" id="userEmail" name="email"
                       value="<?php echo $user_data->email ?? ''; ?>" readonly>
                <small class="form-text text-muted">Email cannot be changed</small>
            </div>

            <!-- Profile Picture -->
            <div class="form-group mb-4">
                <label for="userAvatar" class="form-label h6">Profile Picture</label>
                <input type="file" class="form-control" id="userAvatar" name="image" accept="image/*">

                <!-- Preview Image -->
                <div class="mt-3">
                    <img id="previewAvatar" 
                         src="admin/uploads/profiles/<?= $user_data->image ; ?> "
                         alt="Profile Image" width="120" class="rounded border">
                </div>
            </div>

            <!-- Submit -->
            <div class="form-group">
                <button type="submit" name="action" value="submit" class="tf-btn btn-primary" id="saveSettingsBtn">
                    <span class="btn-text">Save Changes</span>
                    <span class="btn-loading d-none">
                        <i class="icon icon-spinner me-2"></i>Saving...
                    </span>
                </button>
            </div>
        </div>
    </div>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Account Settings -->

    </div>

    <!-- Mobile Menu -->
    <div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
        <span class="icon-close-popup" data-bs-dismiss="offcanvas">
            <i class="icon-close"></i>
        </span>
        <div class="canvas-header">
            <p class="text-logo-mb">Ochaka.</p>
            <a href="login.php" class="tf-btn type-small style-2">
                Login
                <i class="icon icon-user"></i>
            </a>
            <span class="br-line"></span>
        </div>
        <div class="canvas-body">
            <div class="mb-content-top">
                <ul class="nav-ul-mb" id="wrapper-menu-navigation"></ul>
            </div>
            <div class="group-btn">
                <a href="wishlist.php" class="tf-btn type-small style-2">
                    Wishlist
                    <i class="icon icon-heart"></i>
                </a>
                <div data-bs-dismiss="offcanvas">
                    <a href="#search" data-bs-toggle="modal" class="tf-btn type-small style-2">
                        Search
                        <i class="icon icon-magnifying-glass"></i>
                    </a>
                </div>
            </div>
            <div class="flow-us-wrap">
                <h5 class="title">Follow us on</h5>
                <ul class="tf-social-icon">
                    <li>
                        <a href="https://www.facebook.com/" target="_blank" class="social-facebook">
                            <span class="icon"><i class="icon-fb"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" target="_blank" class="social-instagram">
                            <span class="icon"><i class="icon-instagram-logo"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://x.com/" target="_blank" class="social-x">
                            <span class="icon"><i class="icon-x"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.tiktok.com/" target="_blank" class="social-tiktok">
                            <span class="icon"><i class="icon-tiktok"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="payment-wrap">
                <h5 class="title">Payment:</h5>
                <ul class="payment-method-list">
                    <li><img src="images/payment/visa.png" alt="Payment"></li>
                    <li><img src="images/payment/master-card.png" alt="Payment"></li>
                    <li><img src="images/payment/amex.png" alt="Payment"></li>
                    <li><img src="images/payment/discover.png" alt="Payment"></li>
                    <li><img src="images/payment/paypal.png" alt="Payment"></li>
                </ul>
            </div>
        </div>
        <div class="canvas-footer">
            <div class="tf-currencies">
                <select class="tf-dropdown-select style-default type-currencies">
                    <option selected data-thumbnail="images/country/us.png">USD</option>
                    <option data-thumbnail="images/country/vie.png">VND</option>
                </select>
            </div>
            <span class="br-line"></span>
            <div class="tf-languages">
                <select class="tf-dropdown-select style-default type-languages">
                    <option>English</option>
                    <option>العربية</option>
                    <option>简体中文</option>
                    <option>اردو</option>
                </select>
            </div>
        </div>
    </div>
    <!-- /Mobile Menu -->

    <!-- Toolbar -->
    <div class="tf-toolbar-bottom">
        <div class="toolbar-item">
            <a href="product.php">
                <span class="toolbar-icon">
                    <i class="icon icon-storefront"></i>
                </span>
                <span class="toolbar-label">Shop</span>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="#search" data-bs-toggle="modal">
                <span class="toolbar-icon">
                    <i class="icon icon-magnifying-glass"></i>
                </span>
                <span class="toolbar-label">Search</span>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="account-page.php">
                <span class="toolbar-icon">
                    <i class="icon icon-user"></i>
                </span>
                <span class="toolbar-label">Account</span>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="wishlist.php">
                <span class="toolbar-icon">
                    <i class="icon icon-heart"></i>
                    <span class="toolbar-count">7</span>
                </span>
                <span class="toolbar-label">Wishlist</span>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="view-cart.php">
                <span class="toolbar-icon">
                    <i class="icon icon-shopping-cart-simple"></i>
                    <span class="toolbar-count">24</span>
                </span>
                <span class="toolbar-label">Cart</span>
            </a>
        </div>
    </div>
    <!-- /Toolbar -->

    <!-- Button Sidebar -->
    <div class="btn-sidebar-mb d-lg-none left">
        <button data-bs-toggle="offcanvas" data-bs-target="#mbSidebar">
            <i class="icon icon-sidebar"></i>
        </button>
    </div>
    <!-- /Button Sidebar -->

    <!-- Sidebar -->
    <div class="offcanvas offcanvas-start canvas-sidebar" id="mbSidebar">
        <div class="canvas-wrapper">
            <div class="canvas-header">
                <span class="title h4 fw-bold">My Account</span>
                <span class="icon-close link icon-close-popup" data-bs-dismiss="offcanvas"></span>
            </div>
            <div class="canvas-body sidebar-mobile-append sidebar-account"></div>
        </div>
    </div>
    <!-- /Sidebar -->

    <!-- Account Settings Script -->
    <script>
const formData = new FormData();
formData.append('name', name);
formData.append('action', 'submit'); 

// Append image if selected
const file = $("#userAvatar")[0].files[0];
if (file) {
    formData.append('image', file);
}



// Preview image before upload
$("#userAvatar").on("change", function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            $("#previewAvatar").attr("src", e.target.result);
        }
        reader.readAsDataURL(file);
    }
});


    $(document).ready(function() {
        // Handle form submission
        $("#accountSettingsForm").on("submit", function(e) {
            e.preventDefault();

            const name = $("#userName").val().trim();
            console.log("Form submitted with name:", name);

            if (!name) {
                showAlert('Please enter your name', 'danger');
                return;
            }

            if (name.length < 2) {
                showAlert('Name must be at least 2 characters long', 'danger');
                return;
            }

            // Show loading state
            $("#saveSettingsBtn").prop('disabled', true);
            $(".btn-text").addClass('d-none');
            $(".btn-loading").removeClass('d-none');

            const formData = new FormData();
            formData.append('name', name);
            formData.append('update_profile', '1');

        });

        // Function to show alerts
        function showAlert(message, type) {
            const alertHtml = `
                <div class="alert alert-${type} alert-dismissible fade show position-fixed top-0 end-0 m-3 z-5" role="alert" style="min-width: 300px;">
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            `;
            $('body').append(alertHtml);

            // Auto remove after 5 seconds
            setTimeout(function() {
                $('.alert').fadeOut();
            }, 5000);
        }
    });
    </script>

 <?php include 'includes/footer.php'; ?>
</body>
</html>
