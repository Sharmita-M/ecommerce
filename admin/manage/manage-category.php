<?php include '../config.php';
session_start();


if (empty($_POST['action'])){
    $submit = $_REQUEST['action'];
} else {
    $submit = $_POST['action'];
}
$datetime = date('Y-m-d_H-i-s'); 

function slug($category){
    $tittle = trim($category);
    $tittle = strtolower($tittle);
    return str_replace(' ', '-', $tittle);
}

switch($submit){
    case 'submit':
        $category = mysqli_real_escape_string($db, $_POST['category']);
        $description = mysqli_real_escape_string($db, $_POST['description']);

        if (empty($category) || empty($description)) {
    $_SESSION['errorMsg'] = 'Category name and description are required.';
    $_SESSION['errorStatus'] = 'danger';
    header("Location: ../category.php");
    exit;
};
        $slug = slug($category);
        $inserted = $db-> query("INSERT INTO `product_categories` (`pc_id`, `pc_name`, `description`, `pc_slug`) VALUES ( NULL, '$category', '$description', '$slug')");
        if($inserted){
            $_SESSION['errorMsg'] = 'Category added successfully';
            $_SESSION['errorStatus'] = 'success';
        } else {
            $_SESSION['errorMsg'] = 'Failed to add category';
            $_SESSION['errorStatus'] = 'danger';
        };
     
        header("Location: ../category.php?success");
        $new = $db-> insert_id;
        if(!empty ($_FILES['image']['name'])) {
            $old_image = $_FILES['image']['name'];
           $divide = explode('.', $old_image);
           $current_name = current($divide);
           $ext = end($divide);
           $allowed = array('jpg', 'jpeg', 'png', 'gif');
            if(in_array($ext, $allowed)) {
                $new_image = $current_name . '_' . $datetime . '.' . $ext;
                $upload_path = '../uploads/category/' . $new_image;
                $tempName = $_FILES['image']['tmp_name'];
                move_uploaded_file($tempName, $upload_path);
                $db->query("UPDATE `product_categories` SET `pc_image` = '$new_image' WHERE `pc_id` = '$new'");
            } else {
                echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
                exit;
            }
        } else {
            echo "No image uploaded.";
            exit;
        };
        header("Location: ../category.php?success");
    break;

    case 'delete':
        $pc_id = mysqli_real_escape_string($db, $_REQUEST['pc_id']);
        $result = $db-> query("SELECT * FROM `product_categories` WHERE `pc_id` = '$pc_id'");
            $row = $result-> fetch_object();  
        if(!empty($pc_id)){
            
            $upload_path = '../uploads/category/' . $row->pc_image;  
            unlink($upload_path); 
        }else {
            echo "Invalid category ID.";
            exit;
        }
        $deleted = $db->query(" DELETE FROM `product_categories` WHERE `pc_id` = '$pc_id'");
        if($deleted){
            $_SESSION['errorMsg'] = 'Category deleted successfully';
            $_SESSION['errorStatus'] = 'success';
        } else {
            $_SESSION['errorMsg'] = 'Failed to delete category';
            $_SESSION['errorStatus'] = 'danger';
        };
               header("Location: ../category.php?success");
               exit();        
               break;
        case 'update':
            $pc_id = mysqli_real_escape_string($db, $_POST['edit_id']);
            $category = mysqli_real_escape_string($db, $_POST['category']);
            $description = mysqli_real_escape_string($db, $_POST['description']);

            $updated = $db-> query("UPDATE `product_categories` SET `pc_name` = '$category', `description` = '$description' WHERE `pc_id` = '$pc_id'");
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
                    $upload_path = '../uploads/category/' . $new_image;
                    $tempName = $_FILES['image']['tmp_name'];
                    move_uploaded_file($tempName, $upload_path);
                    $db->query("UPDATE `product_categories` SET `pc_image` = '$new_image' WHERE `pc_id` = '$pc_id'");
                } else {
                    echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
                    exit;
                };
            };

            header("Location: ../category.php?success");
            break;     
    default:
    echo "Invalid action specified.";
    break;

};

?>