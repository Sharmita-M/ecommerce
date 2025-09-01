<?php 
session_start();
include '../config.php';

if(empty($_POST['submit'])){
    $submit = $_REQUEST['submit'];
} else {
    $submit = $_POST['submit'];
}
switch($submit){
    case'login':
  
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

     $data = $db-> query( "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password' " );

     if($data-> num_rows > 0){
        $value = $data->fetch_object();
        $u_id = $value->u_id;
        $email = $value-> email;
        // echo $u_id;
        // die();
        $_SESSION['u_id'] = $u_id;
        $_SESSION['email'] = $email;    
        $_SESSION['errorMsg'] = 'Welcome User';
        $_SESSION['errorStatus'] = 'success';
        header("Location: ../../account-page.php");
    
     } else {
        $_SESSION['errorMsg'] = 'Invalid Email or Password';
        $_SESSION['errorStatus'] = 'danger';
        header("Location: ../../login.php");
     }
     break;

     case 'logout':
        unset($_SESSION['u_id']);
        unset($_SESSION['email']);
        session_destroy();
        header("Location:../../login.php");
        break;

    default:
        $_SESSION['errorMsg'] = 'Invalid Request';
        $_SESSION['errorStatus'] = 'danger';
        header("Location:../../login.php");
        break;
}

?>