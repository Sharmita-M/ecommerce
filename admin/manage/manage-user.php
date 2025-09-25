<?php 
session_start();
include '../config.php';

if(empty($_POST['submit'])){
    $submit = $_REQUEST['submit'];
} else {
    $submit = $_POST['submit'];
}
switch($submit){
    case 'signup':
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        // Check if user already exists
        $check_user = $db->query("SELECT * FROM `user` WHERE `email` = '$email'");
        if ($check_user->num_rows > 0) {
            $_SESSION['errorMsg'] = 'An account with this email already exists.';
            $_SESSION['errorStatus'] = 'danger';
            header("Location: ../../login.php");
        } else {
            // Insert new user
            $insert = $db->query("INSERT INTO `user` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')");
            if ($insert) {
                $_SESSION['errorMsg'] = 'Account created successfully! Please login.';
                $_SESSION['errorStatus'] = 'success';
                header("Location: ../../login.php");
            } else {
                $_SESSION['errorMsg'] = 'Error creating account. Please try again.';
                $_SESSION['errorStatus'] = 'danger';
                header("Location: ../../login.php");
            }
        }
        break;


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