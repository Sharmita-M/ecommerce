<?php include '../config.php';
   session_start();
   if (!empty($_POST['action'])){
       $submit = $_POST['action'];
   } else {
       $submit = $_REQUEST['action'];
   };
   $datetime = date('Y-m-d H:i:s');
   $session_id = session_id();
   // echo( $submit);
   // die();
  
   switch($submit){
   case 'submit':
    $p_id = mysqli_real_escape_string($db, $_REQUEST['id']);
    $qty = isset($_REQUEST['qty']) && $_REQUEST['qty'] > 0 ? (int)$_REQUEST['qty'] : 1;
    $product_res = $db->query("SELECT `id`, `product_selling_price`, `status` FROM `product` WHERE `id` = '$p_id'");
   
    if ($product_res->num_rows === 0) {
        $_SESSION['msg'] = "Product not found.";
        header("Location: ../../view-cart.php");
        exit;
    };
   
    $productT = $product_res->fetch_object();
    $price = $productT->product_selling_price;
    $status = $productT->status;
    $check = $db->query("SELECT * FROM `cart` WHERE `p_id` = '$p_id' AND `session_id` = '$session_id'");
   
    if ($check->num_rows > 0) {
        // Update qty
        $db->query("UPDATE `cart` SET `qty` = `qty` + $qty WHERE `p_id` = '$p_id' AND `session_id` = '$session_id'");
    } else {
        // Insert new
        $db->query("INSERT INTO `cart` (`ct_id`, `p_id`, `session_id`, `price`, `qty`, `status`, `create_at`) VALUES (NULL, '$p_id', '$session_id', '$price', '$qty', '0', '$datetime')");
    }
   
    header("Location: ../../view-cart.php");
    exit;
    break;
    case 'delete':
            $ct_id = mysqli_real_escape_string($db, $_REQUEST['id']);
            $deleted = $db->query(" DELETE FROM `cart` WHERE `ct_id` = '$ct_id'");
               header("Location: ../../view-cart.php");     
               exit;
                  break;
   
    case 'add': 
       $cart_id = $_REQUEST['ct_id'];
       $cart_data = $db->query("SELECT * FROM `cart` WHERE `ct_id` = '$cart_id'");
       $cart_value = $cart_data->fetch_object();
       $qty = $cart_value->qty;
       $new_qty = $qty + 1;
       $db->query("UPDATE `cart` SET `qty` = '$new_qty' WHERE `ct_id` = '$cart_id'");
       header("Location: ../../view-cart.php");
               exit;
                   break;
    case 'minus': 
       $cart_id = $_REQUEST['ct_id'];
       $cart_data = $db->query("SELECT * FROM `cart` WHERE `ct_id` = '$cart_id'");
       $cart_value = $cart_data->fetch_object();
       $qty = $cart_value->qty;
       $new_qty = $qty - 1;
       $db->query("UPDATE `cart` SET `qty` = '$new_qty' WHERE `ct_id` = '$cart_id'");
       header("Location: ../../view-cart.php");
               exit;
                break;

    case 'checkout':
    if (!isset($_SESSION['u_id'])) {
   
        header("Location: ../../login.php?redirect=checkout.php");
        exit();
    } else {
   
        header("Location: ../../checkout.php");
        exit();
    }
    break;

    default:
       header("Location: ../../view-cart.php");
       exit;
       break;
               
   };
   
   
   ?>