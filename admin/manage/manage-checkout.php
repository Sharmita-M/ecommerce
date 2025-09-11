<?php include '../config.php';
session_start();


if (empty($_POST['action'])){
    $submit = $_REQUEST['action'];
} else {
    $submit = $_POST['action'];
}
$datetime = date('Y-m-d_H-i-s'); 

switch($submit){
    case 'submit':
        $first_name_infor = mysqli_real_escape_string($db, $_POST['first_name_infor']);
        $last_name_infor = mysqli_real_escape_string($db, $_POST['last_name_infor']);
        $email_infor = mysqli_real_escape_string($db, $_POST['email_infor']);
        $phone_infor = mysqli_real_escape_string($db, $_POST['phone_infor']);
        $address_country = mysqli_real_escape_string($db, $_POST['address_country']);
        $city_infor = mysqli_real_escape_string($db, $_POST['city_infor']);
        $street_infor = mysqli_real_escape_string($db, $_POST['street_infor']);
        $address_province = mysqli_real_escape_string($db, $_POST['address_province']);
        $number_card = mysqli_real_escape_string($db, $_POST['number_card']);
        $description = mysqli_real_escape_string($db, $_POST['description']);

        $inserted = $db-> query("INSERT INTO `order_details` (`first_name`, `last_name`, `mobile`, `email`, `adress`, `city`, `state`, `pincode`, `payment_method`, `order_id`) 
        VALUES ('$category', '$description', '$slug')");
        if($inserted){
            $_SESSION['errorMsg'] = 'Adress saved successfully';
            $_SESSION['errorStatus'] = 'success';
        } else {
            $_SESSION['errorMsg'] = 'Failed to saved Adress';
            $_SESSION['errorStatus'] = 'danger';
        };
    
        header("Location: ../checkout.php?success");
    break;
}