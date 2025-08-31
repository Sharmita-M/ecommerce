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
        $gender = mysqli_real_escape_string($db, $_POST['gender']);
        if (empty($gender)) {
    $_SESSION['errorMsg'] = 'gender name required.';
    $_SESSION['errorStatus'] = 'danger';
     header("Location: ../add_gender.php?success");
    exit;
};
        $inserted = $db-> query("INSERT INTO `gender` (`g_id`, `gender`) VALUES ( NULL, '$gender')");
        if($inserted){
            $_SESSION['errorMsg'] = 'Gender added successfully';
            $_SESSION['errorStatus'] = 'success';
        } else {
            $_SESSION['errorMsg'] = 'Failed to add Gender';
            $_SESSION['errorStatus'] = 'danger';
        };
        header("Location: ../add_gender.php?success");
    break;
    case 'delete':
        $g_id = mysqli_real_escape_string($db, $_REQUEST['g_id']);
        $result = $db-> query("SELECT * FROM `gender` WHERE `g_id` = '$g_id'");
            $row = $result-> fetch_object();  
        if(!empty($g_id)){
        }else {
            echo "Invalid gender ID.";
            exit;
        }
        $deleted = $db->query(" DELETE FROM `gender` WHERE `g_id` = '$g_id'");
        if($deleted){
            $_SESSION['errorMsg'] = 'Gender deleted successfully';
            $_SESSION['errorStatus'] = 'success';
        } else {
            $_SESSION['errorMsg'] = 'Failed to delete Gender';
            $_SESSION['errorStatus'] = 'danger';
        };
                header("Location: ../add_gender.php?success");
               exit();        
               break;
        case 'update':
            $g_id = mysqli_real_escape_string($db, $_POST['edit_id']);
            $gender = mysqli_real_escape_string($db, $_POST['gender']);

            $updated = $db-> query("UPDATE `gender` SET `gender` = '$gender' WHERE `g_id` = '$g_id'");
            if($updated){
                $_SESSION['errorMsg'] = 'Gender updated successfully';
                $_SESSION['errorStatus'] = 'success';
            } else {
                $_SESSION['errorMsg'] = 'Failed to update Gender';
                $_SESSION['errorStatus'] = 'danger';
            };
            header("Location: ../add_gender.php?success");
            break;     
    default:
    echo "Invalid action specified.";
    break;
};

?>