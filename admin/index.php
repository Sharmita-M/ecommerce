
<?php
session_start();
if (!empty($_SESSION['errorMsg'])):
    $alertClass = $_SESSION['errorStatus'] === 'success' ? 'alert-success' : 'alert-danger';
?>
<div id="sessionAlert" class="alert <?= $alertClass ?> alert-dismissible fade show position-absolute top-0 start-0 w-100 text-center" role="alert">
  <?= $_SESSION['errorMsg']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
    unset($_SESSION['errorMsg'], $_SESSION['errorStatus']);
endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
       <link rel="stylesheet" href="asserts/style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"rel="stylesheet" >
    
  
</head>
<body>
    <div class="wrapper1">
  <div class="container">
    <div class="col-left">
      <div class="login-text">
        <h2>Welcome Back</h2>
        <p>Create your account.<br>It's totally free.</p>
      </div>
    </div>
    <div class="col-right ">
      <div class="login-form">
        <h2>Login</h2>
        <form method ="POST" action="manage/manage-account.php" >
            <label>Username or email address<span>*</span></label>
            <input type="text"name="email"  placeholder="Username or Email" required>
            <label class="mt-2">Password<span>*</span></label>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="submit"class="mt-4 mb-4 p-1" value="login" > Login</button>
            <a class="float-end text-secondary text-decoration-none" href="">Forget Password?</a>
        </form>
      </div>
    </div>
  </div>
  <div class="credit">
      Made by Sharmita Mahapatra
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<script>
   setTimeout(() => {
    const alert = document.getElementById('sessionAlert');
    if (alert) {
      alert.classList.remove('show'); // hide with fade
      alert.classList.add('fade');    // ensure fade is active
    }
  }, 2000);
</script>
</body>
</html>