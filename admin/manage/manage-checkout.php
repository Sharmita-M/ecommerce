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
        $pincode = mysqli_real_escape_string($db, $_POST['pincode']);
        $description = mysqli_real_escape_string($db, $_POST['description']);
    

        $inserted = $db-> query("INSERT INTO `adress` (`first_name`, `last_name`, `mobile`, `email`,`street`, `country`, `city`, `state`, `pincode`,`description`) 
        VALUES ('$first_name_infor','$last_name_infor','$phone_infor','$email_infor','$street_infor', '$address_country',  '$city_infor', '$address_province', '$pincode', '$description')");
   
        if($inserted){
            $_SESSION['errorMsg'] = 'Adress saved successfully';
            $_SESSION['errorStatus'] = 'success';
        } else {
            $_SESSION['errorMsg'] = 'Failed to saved Adress';
            $_SESSION['errorStatus'] = 'danger';
        };
    
        header("Location: ../../checkout.php?success");
   
       break;

    case 'checkout':
    if (!isset($_SESSION['u_id'])) {
        $_SESSION['errorMsg'] = 'You must be logged in to checkout.';
        $_SESSION['errorStatus'] = 'danger';
        header("Location: ../../login.php");
        exit;
    }

    $address =  mysqli_real_escape_string($db, $_POST['adress']);
    $payment =  mysqli_real_escape_string($db, $_POST['payment-method']);
         $order_id = 'ORD' . strtoupper(uniqid());
        $db->query("INSERT INTO `order_details` (payment_method, order_id, adress_id, u_id, order_status, create_at) VALUES ('$payment', '$order_id', '$address', '{$_SESSION['u_id']}', '0', '$datetime')");
        $cart_ids = $_POST['cart_id'];
        foreach ($cart_ids as $cart_id) {
            $cart_data = $db->query("SELECT * FROM `cart` WHERE ct_id = '$cart_id'");
            $cart = $cart_data->fetch_object();
            $p_id = $cart->p_id;
            $qty = $cart->qty;
            $total_price = $cart->price * $qty;
            // Correctly insert the product ID ($p_id) into the p_id column.
            $db->query("INSERT INTO `order_data` (order_id, ct_id, p_id, price, delivery_details, create_at) VALUES ('$order_id', '$cart_id', '$p_id', '$total_price','$address', '$datetime')");
        }

    if (empty($address)) {
       
        $_SESSION['errorMsg'] = 'Please select an address.';
        $_SESSION['errorStatus'] = 'danger';

        header("Location: ../../checkout.php?select-adress");
        exit;
    } 

    if ($payment == "cod") {
        header("Location: ../../sucess.php?order_id=$order_id");
    } elseif ($payment == "upi") {
        // Redirect to the UPI payment page with the order_id
        header("Location: ../../upi-payment.php?order_id=$order_id");
        
        
        exit; 
    } else {
        $_SESSION['errorMsg'] = 'Please select an payment option.';
        $_SESSION['errorStatus'] = 'danger';

        header("Location: ../../checkout.php?select-payment-option");
        exit;
    }
    break;
}