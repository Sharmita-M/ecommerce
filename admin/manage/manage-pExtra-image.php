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
        $pId = mysqli_real_escape_string($db, $_POST['pId']);
        $inserted = $db-> query("INSERT INTO `product_extra_image` (`pei_id`) VALUES ( NULL)");
        if($inserted){
            $_SESSION['errorMsg'] = 'Product added successfully';
            $_SESSION['errorStatus'] = 'success';
        } else {
            $_SESSION['errorMsg'] = 'Failed to add Product';
            $_SESSION['errorStatus'] = 'danger';
        };
     
        header("Location: ../product_extra_banner.php?success");
        $new = $db-> insert_id;
        if(!empty ($_FILES['image']['name'])) {
            $old_image = $_FILES['image']['name'];
           $divide = explode('.', $old_image);
           $current_name = current($divide);
           $ext = end($divide);
           $allowed = array('jpg', 'jpeg', 'png', 'gif');
            if(in_array($ext, $allowed)) {
                $new_image = $current_name . '_' . $datetime . '.' . $ext;
                $upload_path = '../uploads/p_extra_image/' . $new_image;
                $tempName = $_FILES['image']['tmp_name'];
                move_uploaded_file($tempName, $upload_path);
                $db->query("UPDATE `product_extra_image` SET `image` = '$new_image' WHERE `pei_id` = '$new'");
            } else {
                echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
                exit;
            }
        } else {
            echo "No image uploaded.";
            exit;
        };
        header("Location: ../product_extra_banner.php?success");
    break;
    case 'delete':
        $pei_id = mysqli_real_escape_string($db, $_REQUEST['pei_id']);
        $result = $db-> query("SELECT * FROM `product_extra_image` WHERE `pei_id` = '$pei_id'");
            $row = $result-> fetch_object();  
        if(!empty($pei_id)){
            
            $upload_path = '../uploads/p_extra_image/' . $row->image;  
            unlink($upload_path); 
        }else {
            echo "Invalid Product ID.";
            exit;
        }
        $deleted = $db->query(" DELETE FROM `product_extra_image` WHERE `pei_id` = '$pei_id'");
        if($deleted){
            $_SESSION['errorMsg'] = 'Product deleted successfully';
            $_SESSION['errorStatus'] = 'success';
        } else {
            $_SESSION['errorMsg'] = 'Failed to delete Product';
            $_SESSION['errorStatus'] = 'danger';
        };
               header("Location: ../product_extra_banner.php");
               exit();        
               break;

   
        case 'update':
            $pei_id = mysqli_real_escape_string($db, $_POST['edit_id']);
            $updated = $db-> query("UPDATE `product_extra_image` SET  WHERE `pei_id` = '$pei_id'");
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
                    $upload_path = '../uploads/p_extra_image/' . $new_image;
                    $tempName = $_FILES['image']['tmp_name'];
                    move_uploaded_file($tempName, $upload_path);
                    $db->query("UPDATE `product_extra_image` SET `image` = '$new_image' WHERE `pei_id` = '$pei_id'");
                } else {
                    echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
                    exit;
                };
            };

            header("Location: ../product_extra_banner.php?success");
            break;     
    default:
    echo "Invalid action specified.";
    break;

};

?>


