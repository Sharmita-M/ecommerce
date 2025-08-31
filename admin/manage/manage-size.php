<?php include '../config.php';
session_start();

if (empty($_POST['action'])){
    $submit = $_REQUEST['action'];
} else {
    $submit = $_POST['action'];
};
$datetime = date('Y-m-d_H-i-s'); 
switch($submit){
    case 'submit':
        $size_name = mysqli_real_escape_string($db, $_POST['size']);
        if (empty($size_name)) {
    $_SESSION['errorMsg'] = 'size name required.';
    $_SESSION['errorStatus'] = 'danger';
     header("Location: ../add_size.php?success");
    exit;
};
        $inserted = $db-> query("INSERT INTO `size` (`s_id`, `size_name`) VALUES ( NULL, '$size_name')");
        if($inserted){
            $_SESSION['errorMsg'] = 'size added successfully';
            $_SESSION['errorStatus'] = 'success';
        } else {
            $_SESSION['errorMsg'] = 'Failed to add size';
            $_SESSION['errorStatus'] = 'danger';
        };
        header("Location: ../add_size.php?success");
    break;
    case 'delete':
        $s_id = mysqli_real_escape_string($db, $_REQUEST['s_id']);
        $result = $db-> query("SELECT * FROM `size` WHERE `s_id` = '$s_id'");
            $row = $result-> fetch_object();  
        if(!empty($s_id)){
        }else {
            echo "Invalid size ID.";
            exit;
        }
        $deleted = $db->query(" DELETE FROM `size` WHERE `s_id` = '$s_id'");
        if($deleted){
            $_SESSION['errorMsg'] = 'size deleted successfully';
            $_SESSION['errorStatus'] = 'success';
        } else {
            $_SESSION['errorMsg'] = 'Failed to delete size';
            $_SESSION['errorStatus'] = 'danger';
        };
                header("Location: ../add_size.php?success");
               exit();        
               break;
        case 'update':
            $s_id = mysqli_real_escape_string($db, $_POST['edit_id']);
            $size_name = mysqli_real_escape_string($db, $_POST['size']);

            $updated = $db-> query("UPDATE `size` SET `size_name` = '$size_name' WHERE `s_id` = '$s_id'");
            if($updated){
                $_SESSION['errorMsg'] = 'size updated successfully';
                $_SESSION['errorStatus'] = 'success';
            } else {
                $_SESSION['errorMsg'] = 'Failed to update size';
                $_SESSION['errorStatus'] = 'danger';
            };
            header("Location: ../add_size.php?success");
            break;     
    default:
    echo "Invalid action specified.";
    break;
};

?>