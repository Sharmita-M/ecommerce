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
        $title = mysqli_real_escape_string($db, $_POST['title']);
        $description = mysqli_real_escape_string($db, $_POST['description']);

        if (empty($title) || empty($description)) {
    $_SESSION['errorMsg'] = 'Category name and description are required.';
    $_SESSION['errorStatus'] = 'danger';
    header("Location: ../desktop_banner.php");
    exit;
};
        $inserted = $db-> query("INSERT INTO `banner` (`id`, `title`, `description`) VALUES ( NULL, '$title', '$description')");
        if($inserted){
            $_SESSION['errorMsg'] = 'Banner added successfully';
            $_SESSION['errorStatus'] = 'success';
        }   else {
            $_SESSION['errorMsg'] = 'Failed to add Banner';
            $_SESSION['errorStatus'] = 'danger';
        };
        $new = $db-> insert_id;
        if(!empty ($_FILES['image']['name'])) {
            $old_image = $_FILES['image']['name'];
           $divide = explode('.', $old_image);
           $current_name = current($divide);
           $ext = end($divide);
           $allowed = array('jpg', 'jpeg', 'png', 'gif');
            if(in_array($ext, $allowed)) {
                $new_image = $current_name . '_' . $datetime . '.' . $ext;
                $upload_path = '../uploads/banners/' . $new_image;
                $tempName = $_FILES['image']['tmp_name'];
                move_uploaded_file($tempName, $upload_path);
                $db->query("UPDATE `banner` SET `image` = '$new_image' WHERE `id` = '$new'");
            } else {
                echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
                exit;
            }
        } else {
            echo "No image uploaded.";
            exit;
        };
      
     
        header("Location: ../desktop_banner.php");
    break;

    case 'delete':
        $id = mysqli_real_escape_string($db, $_REQUEST['id']);
        $result = $db-> query("SELECT * FROM `banner` WHERE `id` = '$id'");
            $row = $result-> fetch_object();  
        if(!empty($id)){
            
            $upload_path = '../uploads/banners/' . $row->image;  
            unlink($upload_path); 
        }else {
            echo "Invalid Banner ID.";
            exit;
        }
        $deleted = $db->query(" DELETE FROM `banner` WHERE `id` = '$id'");
        if($deleted){
            $_SESSION['errorMsg'] = 'Banner deleted successfully';
            $_SESSION['errorStatus'] = 'success';
        } else {
            $_SESSION['errorMsg'] = 'Failed to delete Banner';
            $_SESSION['errorStatus'] = 'danger';
        };
               header("Location: ../desktop_banner.php");
               exit();        
               break;
        case 'update':
            $id = mysqli_real_escape_string($db, $_POST['edit_id']);
            $title = mysqli_real_escape_string($db, $_POST['title']);
            $description = mysqli_real_escape_string($db, $_POST['description']);

            $updated = $db-> query("UPDATE `banner` SET `title` = '$title', `description` = '$description' WHERE `id` = '$id'");
            if($updated){
                $_SESSION['errorMsg'] = 'Banner updated successfully';
                $_SESSION['errorStatus'] = 'success';
            } else {
                $_SESSION['errorMsg'] = 'Failed to update Banner';
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
                    $upload_path = '../uploads/banners/' . $new_image;
                    $tempName = $_FILES['image']['tmp_name'];
                    move_uploaded_file($tempName, $upload_path);
                    $db->query("UPDATE `banner` SET `image` = '$new_image' WHERE `id` = '$id'");
                } else {
                    echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
                    exit;
                };
            };

            header("Location: ../desktop_banner.php?success");
            break;     
    default:
    echo "Invalid action specified.";
    break;

};

?>