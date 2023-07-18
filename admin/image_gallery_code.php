<!-- **********************for-Images-upload*************************** -->
<?php
include('authentication.php');
require('config/dbcon.php');

if (isset($_POST['img_upload'])) {

    $img = $_FILES['img_upl']['name'];
    $status = $_POST['status'];


    if ($_FILES['img_upl']["size"] > 700000) {
        $_SESSION['cons_msg'] = " image size is to Big";
        header('location:gallery.php');
    }
    echo $_FILES['img_upl']["size"];
    $img_ext = ['png', 'jpg', 'jpeg'];

    $file_ext = pathinfo($img, PATHINFO_EXTENSION);

    // $img_name = $img ;

    if (!in_array($file_ext, $img_ext)) {

        $_SESSION['cons_msg'] = "img only in jpg  or jpeg ext";
        header('location:gallery.php');
    } else {

        $sql = "INSERT INTO gallery_tbl(image_name,status) VALUES('$img','$status')";

        $connect_db = mysqli_query($con, $sql);

        if ($connect_db) {
            move_uploaded_file($_FILES['img_upl']['tmp_name'], 'admin_img_upload/' . $img);

            $_SESSION['cons_msg'] = "image uploaded  Successfully.";
            header('location:gallery.php');
        } else {

            $_SESSION['cons_msg'] = "Something went wrong";
            header('location:gallery.php');
        }
    }
};
// --------------------------------------------delete-images---------------------------------

if (isset($_POST['delete_img'])) {

    $user_id = $_POST['delete_img_id'];

    $query_delete = " DELETE FROM gallery_tbl WHERE  gall_id ='$user_id'";

    $query_delete_run = mysqli_query($con, $query_delete);

    if ($query_delete_run) {

        $_SESSION['cons_msg'] = "Image deleted";
        header('location:gallery.php');
    } else {
        $_SESSION['cons_msg'] = "Image deletion failed";
        header('location:gallery.php');
    }
}


// ----------------------------------------------UPDATE-image--------------------------------------

// if (isset($_POST['update_img'])) {

//     $id = $_POST['id'];
//     $img = $_FILES['img_new']['name'];
//     $status = $_POST['status'];


//     if ($_FILES['img_new']["size"] > 500000) {
//         $_SESSION['cons_msg'] = " image size is to Big";
//         header('location:image_edit.php');
//     }
//     $img_ext = ['png', 'jpg', 'jpeg'];

//     $file_ext = pathinfo($img, PATHINFO_EXTENSION);

//     $img_name = time() . '.' . $file_ext;

//     if (!in_array($file_ext, $img_ext)) {

//         $_SESSION['cons_msg'] = "img only in jpg ,png or jpeg ext";
//         header('location:image_edit.php');
//     } else {

//         $query = "UPDATE img_tbl SET img_name='$img_name',status='$status' WHERE id ='$id'";
//         $query_run = mysqli_query($con, $query);

//         if ($query_run) {
//             move_uploaded_file($_FILES['img_new']['tmp_name'], 'admin_img_upload/' . $img_name);

//             $_SESSION['cons_msg'] = "image uploaded  Successfully.";
//             header('location:gallery.php');
//         } else {

//             $_SESSION['cons_msg'] = "Somthing went wrong";
//             header('location:image_edit.php');
//         }
//     }
// }



if (isset($_POST['update_img'])) {

    $id = $_POST['id'];
    $new_img = $_FILES['new_img']['name'];
    $status = $_POST['status'];
    $old_img = $_POST['img_old'];


    if ($new_img != '') {
        if ($_FILES['new_img']["size"] > 700000) {
            $_SESSION['cons_msg'] = " image size is to Big";
            header('location:image_edit.php');
        }
        $img_ext = ['png', 'jpg', 'jpeg'];

        $file_ext = pathinfo($new_img, PATHINFO_EXTENSION);

        $img_name = time() . '.' . $file_ext;

        if (!in_array($file_ext, $img_ext)) {
            $_SESSION['cons_msg'] = "img only in jpg ,png or jpeg ext";
            header('location:image_edit.php');
        }

        $updated_img = $new_img;
    } else {
        $updated_img = $old_img;
    }
    $sql = "UPDATE gallery_tbl SET status='$status',image_name='$updated_img' WHERE gall_id='$id'";

    $connect_db = mysqli_query($con, $sql);

    if ($connect_db) {
        if ($_FILES['new_img']['name'] != "") {
            move_uploaded_file($_FILES['new_img']['tmp_name'], 'admin_img_upload/' . $_FILES['new_img']['name']);
            unlink("gallery_img_upload/" . $old_img);
        }
        $_SESSION['cons_msg'] = "image uploaded  Successfully.";
        header('location:gallery.php');
    } else {
        $_SESSION['cons_msg'] = "Som3thing went wrong";
        header('location:gallery.php');
    }
};

?>