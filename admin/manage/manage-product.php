<?php include '../config.php';
session_start();

if (empty($_POST['action'])){
    $submit = $_REQUEST['action'];
} else {
    $submit = $_POST['action'];
}
$datetime = date('Y-m-d_H-i-s'); 

function slug($pName){
    $tittle = trim($pName);
    $tittle = strtolower($tittle);
    return str_replace(' ', '-', $tittle);
};
switch($submit){
    case 'submit':
        $categoryId = $_POST['categoryId'] ?? '';
$sub_cateId = $_POST['sub_cateId'] ?? '';
$pName = $_POST['pName'] ?? '';
$gender = $_POST['gender'] ?? '';
$description = $_POST['description'] ?? '';
$size = $_POST['size'] ?? '';
$color = $_POST['color'] ?? '';
$stock = $_POST['stock'] ?? '';
$sellingPrice = $_POST['sellingPrice'] ?? '';
$marketPrice = $_POST['marketPrice'] ?? '';
        $slug = slug($pName);
        $inserted = $db->
        query("INSERT INTO `product` (`id`,`pc_id`,`psc_id`,`g_id`,`slug`, `product_name`, `product_market_price`,`product_selling_price`,`size_available`,`color_available`,`stock`,`product_long_description` ) 
        VALUES ( NULL, '$categoryId','$sub_cateId','$gender', '$slug','$pName','$marketPrice','$sellingPrice','$size','$color','$stock','$description')");
        if($inserted){
            $_SESSION['errorMsg'] = 'Product added successfully';
            $_SESSION['errorStatus'] = 'success';
        } else {
            $_SESSION['errorMsg'] = 'Failed to add Product';
            $_SESSION['errorStatus'] = 'danger';
        };
     
        header("Location: ../product.php?success");
        $new = $db-> insert_id;
        if(!empty ($_FILES['image']['name'])) {
            $old_image = $_FILES['image']['name'];
           $divide = explode('.', $old_image);
           $current_name = current($divide);
           $ext = end($divide);
           $allowed = array('jpg', 'jpeg', 'png', 'gif');
            if(in_array($ext, $allowed)) {
                $new_image = $current_name . '_' . $datetime . '.' . $ext;
                $upload_path = '../uploads/products/' . $new_image;
                $tempName = $_FILES['image']['tmp_name'];
                move_uploaded_file($tempName, $upload_path);
                $db->query("UPDATE `product` SET `product_image` = '$new_image' WHERE `id` = '$new'");
            } else {
                echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
                exit;
            }
        } else {
            echo "No image uploaded.";
            exit;
        };
        header("Location: ../product.php?success");
    break;
    case 'delete':
        $id = mysqli_real_escape_string($db, $_REQUEST['id']);
        $result = $db-> query("SELECT * FROM `product` WHERE `id` = '$id'");
            $row = $result-> fetch_object();  
        if(!empty($id)){
            
            $upload_path = '../uploads/products/' . $row->product_image;  
            unlink($upload_path); 
        }else {
            echo "Invalid product ID.";
            exit;
        }
        $deleted = $db->query(" DELETE FROM `product` WHERE `id` = '$id'");
        if($deleted){
            $_SESSION['errorMsg'] = 'Product deleted successfully';
            $_SESSION['errorStatus'] = 'success';
        } else {
            $_SESSION['errorMsg'] = 'Failed to delete Product';
            $_SESSION['errorStatus'] = 'danger';
        };
               header("Location: ../product.php");
               exit();        
               break;
        case 'update':
            $id = mysqli_real_escape_string($db, $_POST['edit_id']);
            $categoryId = $_POST['categoryId'];
            $sub_cateId = $_POST['sub_cateId'] ;
            $gender = $_POST['gender'] ?? '';
            $pName = $_POST['pName'] ;
            $description = $_POST['description'] ;
            $size = $_POST['size'];
            $color = $_POST['color'];
            $stock = $_POST['stock'];
            $sellingPrice = $_POST['sellingPrice'];
            $marketPrice = $_POST['marketPrice'];

            $updated = $db-> query("UPDATE `product` SET `pc_id` = '$categoryId', `psc_id` = '$sub_cateId' ,`g_id` = '$gender', `product_name` = '$pName' 
            , `product_market_price` = '$marketPrice', `product_selling_price` = '$sellingPrice' , `size_available` = '$size' , `color_available` = '$color' 
            , `stock` = '$stock' , `product_long_description` = '$description'  WHERE `id` = '$id'");
            if($updated){
                $_SESSION['errorMsg'] = 'Product updated successfully';
                $_SESSION['errorStatus'] = 'success';
            } else {
                $_SESSION['errorMsg'] = 'Failed to update Product';
                $_SESSION['errorStatus'] = 'danger';
            };
            if(!empty ($_FILES['image']['name'])) {
                $old_image = $_FILES['image']['name'];
            $divide = explode('.', $old_image);
            $current_name = current($divide);
            $ext = end($divide);
            $allowed = array('jpg', 'jpeg', 'png', 'gif');

                if(in_array($ext, $allowed)) {
                    $new_image = $current_name . '_' . $datetime . '.' . $ext;
                    $upload_path = '../uploads/products/' . $new_image;
                    $tempName = $_FILES['image']['tmp_name'];
                    move_uploaded_file($tempName, $upload_path);
                    $db->query("UPDATE `product` SET `product_image` = '$new_image' WHERE `id` = '$id'");
                } else {
                    echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
                    exit;
                };
            };
            header("Location: ../product.php?success");
            break;     
    default:
    echo "Invalid action specified.";
    break;

};

?>


