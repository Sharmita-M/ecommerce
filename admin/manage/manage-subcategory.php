<?php include '../config.php';
session_start();


if (empty($_POST['action'])){
    $submit = $_REQUEST['action'];
} else {
    $submit = $_POST['action'];
}
$datetime = date('Y-m-d_H-i-s'); 

function slug($subcategory){
    $tittle = trim($subcategory);
    $tittle = strtolower($tittle);
    return str_replace(' ', '-', $tittle);
};
switch($submit){
    case 'submit':
        $categoryId = mysqli_real_escape_string($db, $_POST['categoryId']);
        $subcategory = mysqli_real_escape_string($db, $_POST['subcategory']);
        $description = mysqli_real_escape_string($db, $_POST['description']);
        $slug = slug($subcategory);
        $inserted = $db-> query("INSERT INTO `product_subcategory` (`psc_id`,`pc_id`,`slug`, `psc_name`, `description`) VALUES ( NULL, '$categoryId', '$slug','$subcategory','$description')");
        if($inserted){
            $_SESSION['errorMsg'] = 'Sub-Category added successfully';
            $_SESSION['errorStatus'] = 'success';
        } else {
            $_SESSION['errorMsg'] = 'Failed to add Sub-category';
            $_SESSION['errorStatus'] = 'danger';
        };
     
        header("Location: ../sub_category.php?success");
        $new = $db-> insert_id;
        if(!empty ($_FILES['image']['name'])) {
            $old_image = $_FILES['image']['name'];
           $divide = explode('.', $old_image);
           $current_name = current($divide);
           $ext = end($divide);
           $allowed = array('jpg', 'jpeg', 'png', 'gif');
            if(in_array($ext, $allowed)) {
                $new_image = $current_name . '_' . $datetime . '.' . $ext;
                $upload_path = '../uploads/subcategory/' . $new_image;
                $tempName = $_FILES['image']['tmp_name'];
                move_uploaded_file($tempName, $upload_path);
                $db->query("UPDATE `product_subcategory` SET `psc_image` = '$new_image' WHERE `psc_id` = '$new'");
            } else {
                echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
                exit;
            }
        } else {
            echo "No image uploaded.";
            exit;
        };
        header("Location: ../sub_category.php?success");
    break;
    case 'delete':
        $psc_id = mysqli_real_escape_string($db, $_REQUEST['psc_id']);
        $result = $db-> query("SELECT * FROM `product_subcategory` WHERE `psc_id` = '$psc_id'");
            $row = $result-> fetch_object();  
        if(!empty($psc_id)){
            
            $upload_path = '../uploads/subcategory/' . $row->psc_image;  
            unlink($upload_path); 
        }else {
            echo "Invalid category ID.";
            exit;
        }
        $deleted = $db->query(" DELETE FROM `product_subcategory` WHERE `psc_id` = '$psc_id'");
        if($deleted){
            $_SESSION['errorMsg'] = 'Category deleted successfully';
            $_SESSION['errorStatus'] = 'success';
        } else {
            $_SESSION['errorMsg'] = 'Failed to delete category';
            $_SESSION['errorStatus'] = 'danger';
        };
               header("Location: ../sub_category.php");
               exit();        
               break;

   
        case 'update':
            $psc_id = mysqli_real_escape_string($db, $_POST['edit_id']);
            $subcategory = mysqli_real_escape_string($db, $_POST['subcategory']);
            $description = mysqli_real_escape_string($db, $_POST['description']);

            $updated = $db-> query("UPDATE `product_subcategory` SET `psc_name` = '$subcategory', `description` = '$description' WHERE `psc_id` = '$psc_id'");
            if($updated){
                $_SESSION['errorMsg'] = 'Category updated successfully';
                $_SESSION['errorStatus'] = 'success';
            } else {
                $_SESSION['errorMsg'] = 'Failed to update category';
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
                    $upload_path = '../uploads/subcategory/' . $new_image;
                    $tempName = $_FILES['image']['tmp_name'];
                    move_uploaded_file($tempName, $upload_path);
                    $db->query("UPDATE `product_subcategory` SET `psc_image` = '$new_image' WHERE `psc_id` = '$psc_id'");
                } else {
                    echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
                    exit;
                };
            };

            header("Location: ../sub_category.php?success");
            break;     
    default:
    echo "Invalid action specified.";
    break;

};

?>


