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

     $data = $db-> query( "SELECT * FROM `admin` WHERE `email` = '$email' AND `password` = '$password' " );

     if($data-> num_rows > 0){
        $value = $data-> fetch_object();
        $a_id = $value-> a_id;
        $email = $value-> email;

        $_SESSION['a_id'] = $a_id;
        $_SESSION['email'] = $email;    
        $_SESSION['errorMsg'] = 'Welcome Admin';
        $_SESSION['errorStatus'] = 'success';
        header("Location: ../dashboard.php");

     } else {
        $_SESSION['errorMsg'] = 'Invalid Email or Password';
        $_SESSION['errorStatus'] = 'danger';
        header("Location: ../index.php");
     }
     break;

     case 'logout':
        unset($_SESSION['email']);
        session_destroy();
        $_SESSION['errorMsg'] = 'You have been logged out successfully';
        $_SESSION['errorStatus'] = 'success';
        header("Location:../index.php");
        break;

    default:
        $_SESSION['errorMsg'] = 'Invalid Request';
        $_SESSION['errorStatus'] = 'danger';
        header("Location:../index.php");
        break;
}

?>