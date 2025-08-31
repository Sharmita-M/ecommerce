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
        $color = mysqli_real_escape_string($db, $_POST['color']);
        if (empty($color)) {
    $_SESSION['errorMsg'] = 'color name required.';
    $_SESSION['errorStatus'] = 'danger';
     header("Location: ../add_color.php?success");
    exit;
};
        $inserted = $db-> query("INSERT INTO `color` (`co_id`, `color`) VALUES ( NULL, '$color')");
        if($inserted){
            $_SESSION['errorMsg'] = 'color added successfully';
            $_SESSION['errorStatus'] = 'success';
        } else {
            $_SESSION['errorMsg'] = 'Failed to add color';
            $_SESSION['errorStatus'] = 'danger';
        };
        header("Location: ../add_color.php?success");
    break;
    case 'delete':
        $co_id = mysqli_real_escape_string($db, $_REQUEST['co_id']);
        $result = $db-> query("SELECT * FROM `color` WHERE `co_id` = '$co_id'");
            $row = $result-> fetch_object();  
        if(!empty($co_id)){
        }else {
            echo "Invalid color ID.";
            exit;
        }
        $deleted = $db->query(" DELETE FROM `color` WHERE `co_id` = '$co_id'");
        if($deleted){
            $_SESSION['errorMsg'] = 'color deleted successfully';
            $_SESSION['errorStatus'] = 'success';
        } else {
            $_SESSION['errorMsg'] = 'Failed to delete color';
            $_SESSION['errorStatus'] = 'danger';
        };
                header("Location: ../add_color.php?success");
               exit();        
               break;
        case 'update':
            $co_id = mysqli_real_escape_string($db, $_POST['edit_id']);
            $color = mysqli_real_escape_string($db, $_POST['color']);

            $updated = $db-> query("UPDATE `color` SET `color` = '$color' WHERE `co_id` = '$co_id'");
            if($updated){
                $_SESSION['errorMsg'] = 'color updated successfully';
                $_SESSION['errorStatus'] = 'success';
            } else {
                $_SESSION['errorMsg'] = 'Failed to update color';
                $_SESSION['errorStatus'] = 'danger';
            };
            header("Location: ../add_color.php?success");
            break;     
    default:
    echo "Invalid action specified.";
    break;
};

?>