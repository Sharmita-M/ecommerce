<?php include '../config.php';
session_start();


if (!empty($_POST['action'])){
    $submit = $_POST['action'];
} else {
    $submit = $_REQUEST['action'];
};
$datetime = date('Y-m-d_H-i-s'); 
$session_id = session_id();

// echo( $submit);
// die();

switch($submit){
    case 'submit':
 
        $qty   = mysqli_real_escape_string($db, $_POST['qty']);
        $product_res = $db->query("SELECT `id`, `product_selling_price`,`status` FROM `product`");
    if ($product_res->num_rows === 0) {
        $_SESSION['msg'] = "Product not found.";
        header("Location: ../../view-cart.php");
        exit;
    };
    $productT = $product_res->fetch_object();
    $p_id = $productT->id;
    $price = $productT->product_selling_price;
    $status = $productT->status;

         $inserted = $db-> query("INSERT INTO `cart` (`ct_id`, `p_id`,`session_id`, `price` , `qty` , `status` , `create_at`) VALUES ( NULL, '$p_id', '$session_id', '$price', '$qty', '1', '$datetime')");
          header("Location: ../../view-cart.php");      

        $check = $db->query("SELECT * FROM `cart` WHERE `p_id` = '$p_id' AND `session_id` = '$session_id'");

if ($check->num_rows > 0) {
    $db->query("UPDATE `cart` SET `qty` = `qty` + $qty WHERE `p_id` = '$p_id' AND `session_id` = '$session_id'");
};
    break;
    case 'delete':
         $ct_id = mysqli_real_escape_string($db, $_REQUEST['id']);
        //  echo $ct_id;
        //  die();
         $deleted = $db->query(" DELETE FROM `cart` WHERE `ct_id` = '$ct_id'");
            header("Location: ../../view-cart.php");     
            exit;
               break;

};


?>