<?php
include '../config.php';
session_start();

if (empty($_POST['action'])) {
    $submit = $_REQUEST['action'];
} else {
    $submit = $_POST['action'];
}

$datetime = date('Y-m-d_H-i-s');

switch ($submit) {
    case 'submit': // Save/Update user with u_id=1
         if (!isset($_SESSION['u_id'])) {
            $_SESSION['errorMsg'] = 'You must be logged in to update your profile.';
            $_SESSION['errorStatus'] = 'danger';
            header("Location: ../../login.php");
            exit;
        }

        $u_id = $_SESSION['u_id']; // Get user ID from session
        $name = mysqli_real_escape_string($db, $_POST['name']);

        if (empty($name)) {
            $_SESSION['errorMsg'] = 'Name is required.';
            $_SESSION['errorStatus'] = 'danger';
            header("Location: ../../account-page.php");
            exit;
        }

        // Update name first
        $updated = $db->query("UPDATE `user` SET `name` = '$name' WHERE `u_id` = '$u_id'");

        if ($updated) {
            $_SESSION['errorMsg'] = 'User updated successfully';
            $_SESSION['errorStatus'] = 'success';
        } else {
            $_SESSION['errorMsg'] = 'Failed to update user';
            $_SESSION['errorStatus'] = 'danger';
        }

        // Handle image
        if (!empty($_FILES['image']['name'])) {
            $old_image = $_FILES['image']['name'];
            $divide = explode('.', $old_image);
            $current_name = current($divide);
            $ext = strtolower(end($divide));
            $allowed = array('jpg', 'jpeg', 'png', 'gif');

            if (in_array($ext, $allowed)) {
                $new_image = $current_name . '_' . $datetime . '.' . $ext;
                $upload_path = '../uploads/profiles/' . $new_image;
                $tempName = $_FILES['image']['tmp_name'];

                move_uploaded_file($tempName, $upload_path);

                $db->query("UPDATE `user` SET `image` = '$new_image' WHERE `u_id` = '$u_id'");
            } else {
                $_SESSION['errorMsg'] = "Invalid file type. Only JPG, JPEG, PNG, and GIF are allowed.";
                $_SESSION['errorStatus'] = 'danger';
                header("Location: ../../account-page.php");
                exit;
            }
        }

         header("Location: ../../account-page.php");
        break;

    default:
        echo "Invalid action specified.";
        break;
}
?>
